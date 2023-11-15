<x-main-layout>
    <main>
        <div class="container">
            <div class="py-5 text-center"></div>
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach ($carts as $cart)
                            <li class="list-group-item justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"></h6>
                                    <small class="text-muted">{{ $cart->part->name }}</small>
                                </div>
                                <span class="text-muted">
                                    {{ $cart->count }} * {{ $cart->part->price }} =
                                    @if ($cart->count >= $cart->part->sale_amount)
                                        <del>{{ $cart->part->price * $cart->count }}</del>
                                        {{ $cart->part->price * $cart->count * ((100 - $cart->part->sale_price) / 100) }}
                                    @else
                                        {{ $cart->part->price * $cart->count }}
                                    @endif
                                    $
                                </span>
                            </li>
                        @endforeach
                    </ul>


                    <div id="shipping-price"><span class="text-muted">Standard Shipping (for first Part): </span><span
                            id="shipping-price-value"></span></div>
                    <div id="shipping-price"><span class="text-muted">Extra parts : </span><span
                            id="shipping-shipping-price-value"></span></div>
                    <hr>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex  justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"></h6>
                                <small class="text-muted">Before discount</small>
                            </div>
                            <span class="text"><del id="total-price-value"></del></span>
                        </li>
                        <li class="list-group-item d-flex  justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"></h6>
                                <small class="text-muted">After discount</small>
                            </div>
                            <b class="text" id="final-price-value"></b>
                        </li>
                    </ul>
                    {{-- <div class="input-group">
                            <a href="/place-order">
                                <button class="btn btn-primary">Place Order</button>
                            </a>
                        </div> --}}
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" action="/PlaceOrder" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address"
                                placeholder="Please enter your address" name="address">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="exampleFormControlSelect1">Country</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="area_id" required
                                    onchange="updateShippingPrice(this)">
                                    <option disabled selected>Please select your Area</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}" data-price="{{ $area->price }}" data-extraPrice="{{ $area->additional_pieces_price }}">
                                            {{ $area->name }}</option>
                                    @endforeach
                                </select>
                                @error('area_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <hr class="mb-4">

                        {{-- <hr class="mb-4">
                        <h4 class="mb-3">Payment</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio"
                                    class="custom-control-input" checked="" required="">
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio"
                                    class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio"
                                    class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder=""
                                    required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                    required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4"> --}}
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5"></div>

        <script>
            function updateShippingPrice(selectElement) {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var selectedPrice = parseFloat(selectedOption.getAttribute('data-price'));
                var selectedShippingPrice = parseFloat(selectedOption.getAttribute('data-extraPrice'));

                var totalPrice = parseFloat({{ $totalPrice }}) + selectedPrice;
                var finalPrice = parseFloat({{ $totalPriceAfterDiscount }}) + selectedPrice + ({{ $cnt }} * selectedShippingPrice);

                document.getElementById('shipping-price-value').textContent = selectedPrice + ' $';
                document.getElementById('shipping-shipping-price-value').textContent = selectedShippingPrice + ' $';
                document.getElementById('total-price-value').textContent = totalPrice + ' $';
                document.getElementById('final-price-value').textContent = finalPrice + ' $';
            }
        </script>
    </main>
</x-main-layout>
