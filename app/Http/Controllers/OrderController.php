<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\resources\TrackingNumberResource;
use App\Models\Order;
use App\Models\Area;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Traits\HttpResponses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderController extends Controller
{
    use HttpResponses;

    private function generateTrackingNumber()
    {
        $characters = '0123456789';
        $trackingNumber = '';
        $length = 8;
        // Generate random characters
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $trackingNumber .= $characters[$index];
        }

        // Check if the tracking number is unique
        while (Order::where('tracking_number', $trackingNumber)->exists()) {
            // Regenerate if the tracking number already exists in the database
            $trackingNumber = '';
            for ($i = 0; $i < $length; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $trackingNumber .= $characters[$index];
            }
        }

        return $trackingNumber;
    }

    public function index()
    {
        $orders = Order::paginate(10);
        // dd($orders);
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {

        // return "hamadaaa";
        $productsJson = $request->input('products');
        $productsArray = json_decode($productsJson, true);
        foreach ($productsArray as $product) {
            $productId = $product['id'];
            $quantity = $product['quantity'];
        }

        // return $productsArray;
        $order = Order::create([
            'shipping_address' => $request->input('shipping_address'),
            'customer_phone' => $request->input('customer_phone'),
            'location_cdn' => $request->input('location_cdn'),
            'tracking_number' => $this->generateTrackingNumber(),
            'total_price' => 0,
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'area_id' => $request->input('area_id'),
        ]);

        $products = $productsArray;

        $total = 0;
        foreach ($products as $productData) {
            $orderProductId = DB::table('order_product')->insertGetId([
                'order_id' => $order->id,
                'product_id' => $productData['id'],
                'quantity' => $productData['quantity'],
            ]);
            $product = Product::find($productData['id']);
            $total += $product->price * $productData['quantity'];
        }
        $area_id = $order->area_id;
        $areaData = Area::find($area_id);
        $shipping_fee = $areaData->price;

        $total += $shipping_fee;
        $order->total_price = $total;
        $order->save();
        $tracking_number = $order->tracking_number;
        $total = $order->total_price;

        return view('user.order-success', compact('tracking_number', 'total'));
        // return response()->json(['message' => 'Order placed successfully', 'order_id' => $order->id, 'tracking_number' => $order->tracking_number, 'total_price' => $order->total_price], 201);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->query('search');
        $orders = order::where('customer_phone', 'like', "%$searchTerm%")
            ->orWhere('customer_name', 'like', "%$searchTerm%")
            ->orWhere('shipping_address', 'like', "%$searchTerm%")
            ->orWhere('tracking_number', 'like', "%$searchTerm%")
            ->paginate(10)
            ->appends(['search' => $searchTerm]);

        return view('admin.orders.index', compact('orders'));
    }

    public function markAsPending($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->status = 'pending';
        $order->save();

        return redirect()->back()->with('success', 'Order marked as pending.');
    }

    public function markAsShipped($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->status = 'shipped';
        $order->save();

        return redirect()->back()->with('success', 'Order marked as shipped.');
    }

    public function markAsDelivered($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->status = 'delivered';
        $order->delivered_on = Carbon::now()->toDateString();
        $order->save();

        return redirect()->back()->with('success', 'Order marked as delivered.');
    }

    public function products($id)
    {
        $order = Order::find($id);
        $products = $order->products;
        foreach ($products as $product) {
            $quantity = DB::table('order_product')->where('product_id', $product->id)->where('order_id', $order->id)->first();
            $product['count'] = $quantity->quantity;
        }
        return view('admin.orders.products', compact('order', 'products'));

    }

    public function removeProduct($product_id, $order_id)
    {
        DB::table('order_product')->where('product_id', $product_id)->where('order_id', $order_id)->delete();
        return redirect()->route('order.products', ['id' => $order_id]);
    }

    public function newOrders()
    {
        $orders = Order::where('is_done', 0)->paginate(10);
        return view('admin.orders.new-orders', compact('orders'));
    }

    public function done($id)
    {
        $order = Order::findOrFail($id);
        $order->is_done = 1 - $order->is_done;
        $order->save();

        return response()->json(['message' => 'Order marked as done.']);
    }

    public function exportNewOrders()
    {
        $orders = Order::where('is_done', 0)->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=new-orders.csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function () use ($orders) {
            $file = fopen('php://output', 'w');

            // Add the table header
            fputcsv($file, ['Order ID', 'ADDRESS', 'LOCATION', 'CUSTOMER NAME', 'CUSTOMER PHONE', 'TRACKING NUMBER', 'IS PAID?', 'TOTAL' ]);

            // Add the table data
            foreach ($orders as $order) {
                fputcsv($file, [$order->id, $order->shipping_address, $order->location_cdn, $order->customer_phone, $order->tracking_number, $order->transaction_status,  $order->total_price]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    public function searchOrder()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('user.search-order', compact('categories', 'brands'));
    }

    public function trackingOrder(Request $request, $id)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $order = Order::where('tracking_number', $request->input('tracking_number'))->first();

        if (!$order) {
            $error = "No order found with the provided tracking number.";
            return view('user.search-order', compact('error', 'categories', 'brands'));
        }

        return view('user.tracking-order', compact('order', 'categories', 'brands'));
    }

    public function cart()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('user.cart', compact('categories', 'brands'));
    }

    public function checkout()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $areas = Area::all();


        return view('user.checkout', compact('categories', 'brands', 'areas'));
    }

    public function paid($id)
    {
        $order = Order::findOrFail($id);
        $order->transaction_status = 1-$order->transaction_status;
        $order->save();

        return response()->json(['message' => 'Order Paid.']);
    }
}
