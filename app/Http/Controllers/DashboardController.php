<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Area;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //this function returns number of categories i have
    protected function categoryCount()
    {
        return Category::count();
    }

    protected function ProductsCount()
    {
        return Product::count();
    }

    protected function ordersCount()
    {
        return Order::count();
    }

    protected function areaCount()
    {
        return Area::count();
    }

    protected function compareMonthProducts()
    {
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        $currentMonthCount = Product::whereMonth('created_at', $currentMonth)->count();
        $previousMonthCount = Product::whereMonth('created_at', $previousMonth)->count();

        $statistics = [];
        $statistics['currentMonthCount'] = $currentMonthCount;
        $statistics['status'] =  $currentMonthCount > $previousMonthCount ? +$currentMonthCount-$previousMonthCount : -$previousMonthCount-$currentMonthCount ; 
        return $statistics;
    }

    protected function compareMonthCategories()
    {
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        $currentMonthCount = Category::whereMonth('created_at', $currentMonth)->count();
        $previousMonthCount = Category::whereMonth('created_at', $previousMonth)->count();

        $statistics = [];
        $statistics['currentMonthCount'] = $currentMonthCount;
        $statistics['status'] =  $currentMonthCount > $previousMonthCount ? +$currentMonthCount-$previousMonthCount : -$previousMonthCount-$currentMonthCount ; 
        return $statistics;
    }

    protected function compareMonthOrders()
    {
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        $currentMonthCount = Order::whereMonth('created_at', $currentMonth)->count();
        $previousMonthCount = Order::whereMonth('created_at', $previousMonth)->count();

        $statistics = [];
        $statistics['currentMonthCount'] = $currentMonthCount;
        $statistics['status'] =  $currentMonthCount > $previousMonthCount ? +$currentMonthCount-$previousMonthCount : -$previousMonthCount-$currentMonthCount ; 
        return $statistics;
    }

        public function getOrderCounts()
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $previousMonths = [];

        // Calculate the start of the previous six months
        for ($i = 1; $i <= 6; $i++) {
            $previousMonths[] = Carbon::now()->subMonths($i)->startOfMonth();
        }

        $orderCounts = [];

        // Get the number of orders for each month
        foreach ($previousMonths as $month) {
            $orderCount = Order::whereBetween('created_at', [$month, $month->copy()->endOfMonth()])->count();
            $orderCounts[] = $orderCount;
        }

        // Get the number of orders for the current month
        $currentMonthOrderCount = Order::whereBetween('created_at', [$currentMonth, Carbon::now()])->count();

        // Add the current month order count to the array
        $orderCounts[] = $currentMonthOrderCount;

        return $orderCounts;
    }


    public function dashboard()
    {
        $noOrders = $this->ordersCount();
        $noProducts = $this->ProductsCount();
        $noCategories = $this->categoryCount();
        $noAreas = $this->areaCount();

        $productsPercent = $this->compareMonthProducts()['status'];
        $categoriesPercent = $this->compareMonthCategories()['status'];
        $ordersPercent = $this->compareMonthOrders()['status'];


        return view('admin.index', compact('noOrders', 'noProducts', 'noCategories', 'noAreas', 'productsPercent', 'categoriesPercent', 'ordersPercent'));
    }

}
