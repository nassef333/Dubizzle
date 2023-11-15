<x-main-layout>
    <style>
        @media (min-width: 1025px) {
        .h-custom {
        height: 100vh !important;
        }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }

        .card-registration .select-arrow {
        top: 13px;
        }

        .bg-grey {
        background-color: #E6EBFC;
        }

        @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
        }
        }

        @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        }
        }
    </style>
    <section class="" style="background-color: #f5f5f5;">
        <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
              <div class="card card-registration card-registration-2 mt-5" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h3 class="fw-bold mb-0 text-black">Shopping Cart</h3>

                            {{-- <h6 class="mb-0 text-muted">
                                @if(count($carts) == 1)
                                    One Item
                                @else
                                    {{ count($carts) }} Items
                                @endif
                            </h6> --}}
                            @if(empty($carts[0]))<h3>Your Cart is empty!!</h3> @endif

                        </div>

                        <hr class="my-4">
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($carts as $cart)
                        <div class="row mb-4 d-flex justify-content-between align-items-center" data-part-chip="{{ $cart->id }}">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img
                                src="{{ $cart->part->media[0]['original_url'] }}"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">Parts</h6>
                              <h6 class="text-black mb-0">{{ $cart->part->name }}</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <input type="number" class="form-control" value="{{ $cart->count }}" name="part[]" data-product-id="{{ $cart->part_id }}">
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">{{ $cart->part->price }}$</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <button class="btn btn-outline-danger btn-sm remove-cart-item" data-part-id="{{ $cart->id }}">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <hr class="my-4">
                          </div>
                          @php
                              $total += $cart->count * $cart->part->price;
                          @endphp
                        @endforeach

                        <div class="pt-5 d-flex justify-content-between">
                            <h6 class="mb-0"><a href="/" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                            @if(!empty($carts[0]))<a href="/checkout/addressInfo" type="button" class="btn btn-dark btn-block btn-lg"
                                data-mdb-ripple-color="dark">Proceed To Checkout</a> @endif
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function () {
                $('input[name="part[]"]').on('change', function () {
                    var inputField = $(this);
                    var product_id = inputField.data('product-id');
                    var count = inputField.val();

                    inputField.prop('disabled', true);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('updateCartCount') }}",
                        data: {
                            product_id: product_id,
                            count: count,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function (response) {
                            inputField.prop('disabled', false);
                            // Update total price with the received value from the server
                            updateTotalPrice(response);
                        },
                        error: function (xhr, status, error) {
                            // Handle errors
                        }
                    });
                });

                $('.remove-cart-item').on('click', function (e) {
                    e.preventDefault();
                    var id = $(this).data('part-id');
                    var parentRow = $(this).closest('.row[data-part-chip="' + id + '"]');

                    $.ajax({
                        type: "POST",
                        url: "{{ route('removeCartItem') }}",
                        data: {
                            id: id,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function (response) {
                            parentRow.remove();
                            // Update total price with the received value from the server
                            updateTotalPrice(response);
                        },
                        error: function (xhr, status, error) {
                            // Handle error
                        }
                    });
                });
            });

            // Function to update the total price on the page
            function updateTotalPrice(newTotalPrice) {
                // console.log(newTotalPrice);
                // Assuming the total price element has an ID like 'total-price'
                $('#total-price').text(newTotalPrice + ' $');
                $('#initial-price').text(newTotalPrice + ' $');
            }
        </script>




</x-main-layout>
