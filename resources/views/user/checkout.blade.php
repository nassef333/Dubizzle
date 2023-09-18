<!DOCTYPE html>
<html class="no-js" lang="zxx">

    @include('user.static.head')
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
           </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('user.static.header')


    <section class="checkout-wrapper section">
        <form action="/proceed-order" method="POST">
        @csrf
        <input type="hidden" id="productsInput" name="products">

        <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8">
        <div class="checkout-steps-form-style-1">
        <ul id="accordionExample">
        <li>
        <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Your Personal Details </h6>
        <section class="checkout-steps-form-content collapse show" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="row">
            <div class="col-md-12">
                <div class="single-form form-default">
                    <label>Your Info</label>
                    <div class="row">
                        <div class="col-md-6 form-input form">
                            <input type="text" placeholder="Your Name" name="customer_name" value="{{ old('customer_name') }}" required>
                            @error('customer_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-input form">
                            <input type="number" placeholder="Your Phone" name="customer_phone" value="{{ old('customer_phone') }}" required>
                            @error('customer_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-input form">
                            <input type="email" placeholder="Your Email" name="customer_email" class="mt-4" value="{{ old('customer_email') }}" required>
                            @error('customer_email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12">
        <div class="single-form button">
        <button type="button" class="btn" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">next
        step</button>
        </div>
        </div>
        </div>
        </section>
        </li>
        <li>
        <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Shipping Address</h6>
        <section class="checkout-steps-form-content collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="row">
            <div class="col-md-12">
                <div class="single-form form-default">
                    <label>Your Address</label>
                    <div class="row">
                        <div class="col-md-6 form-input form">
                            <div class="select-items">
                                <select class="form-control" name="area_id" required>
                                    <option value="0" data-price="0">select</option>
                                    @foreach ($areas as $area)
                                    <option value="{{ $area->id }}" data-price="{{ $area->price }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                                @error('area_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                             </div>
                        </div>
                        <div class="col-md-6 form-input form">
                        <input type="text" placeholder="Your Address" name="shipping_address" value="{{ old('shipping_address') }}" required>
                        @error('shipping_address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-form form-default">
                <div class="form-input form">
                <input type="text" placeholder="Location Link" name="location_cdn" value="{{ old('location_cdn') }}">
                @error('location_cdn')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        </section>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="checkout-sidebar-price-table mt-0">
        <h5 class="title">Pricing Table</h5>
        <div class="sub-total-price">
        <div class="total-price">
        <p class="value">Subotal Price:</p>
        <p class="price">AED <span id="subtotalPrice">0.00</span></p>
        </div>
        <div class="total-price shipping">
            <p class="value">Shipping:</p>
            <p class="price">AED <span id="shippingPrice">0.00</span></p>
        </div>
        <hr>
        <div class="sub-total-price">
            <div class="total-price total">
                <p class="value">Total Price:</p>
                <p class="price">AED <span id="totalPrice">0.00</span></p>
            </div>
        </div>
        <div class="price-table-btn button">
        <button type="submit" class="btn btn-alt">Checkout</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>
        </section>
        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="orderModalLabel">Order Successful</h5>
                  <a href="/" class="btn-close" ></a>
                </div>
                <div class="modal-body text-center" id="orderModalBody">
                  <!-- Modal content will be dynamically added here -->
                </div>
                <div class="modal-footer">
                    <a href="/" class="btn btn-danger" >Continue</a>
                </div>
              </div>
            </div>
          </div>

    @include('user.static.footer')

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/user//js/bootstrap.min.js"></script>
    <script src="/assets/user//js/tiny-slider.js"></script>
    <script src="/assets/user//js/glightbox.min.js"></script>
    <script src="/assets/user//js/main.js"></script>


    <script>
        // Retrieve cartItems from localStorage
        const cartItems = JSON.parse(localStorage.getItem('cartItems'));

        // Extract only the required fields (id and quantity)
        const products = cartItems.map(item => ({ id: item.id, quantity: item.quantity }));
        // Populate the hidden input field with the products data
        const productsInput = document.getElementById('productsInput');
        productsInput.value = JSON.stringify(products);
        console.log(products);


        let subtotalPrice = 0;

        // Iterate over cartItems and calculate subtotal
        cartItems.forEach(item => {
        const price = parseFloat(item.price);
        const quantity = parseInt(item.quantity);
        subtotalPrice += price * quantity;
        });

        // Display the subtotal price
        document.getElementById('subtotalPrice').textContent = subtotalPrice.toFixed(2);
        document.getElementById('totalPrice').textContent = subtotalPrice.toFixed(2);



        // Retrieve the select element for the area
        const areaSelect = document.querySelector('select[name="area_id"]');

        // Add event listener for the area select element
        areaSelect.addEventListener('change', updatePrices);

        // Function to update the shipping price, subtotal price, and total price
        function updatePrices() {
            // Get the selected area value and price
            const areaId = parseInt(areaSelect.value);
            const selectedOption = areaSelect.options[areaSelect.selectedIndex];
            const shippingPrice = parseFloat(selectedOption.dataset.price);

            // Calculate the subtotal price
            const subtotalPrice = calculateSubtotalPrice();

            // Calculate the total price
            const totalPrice = shippingPrice + subtotalPrice;

            // Display the updated shipping price, subtotal price, and total price
            document.getElementById('shippingPrice').textContent = shippingPrice.toFixed(2);
            document.getElementById('subtotalPrice').textContent = subtotalPrice.toFixed(2);
            document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);
        }

        // Function to calculate the subtotal price
        function calculateSubtotalPrice() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems'));
            let subtotalPrice = 0;

            cartItems.forEach(item => {
                const price = parseFloat(item.price);
                const quantity = parseInt(item.quantity);
                subtotalPrice += price * quantity;
            });

            return subtotalPrice;
        }

    </script>
</body>

</html>
