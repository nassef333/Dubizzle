<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('user.static.head')

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

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


    @php
        $currentProduct = $product;
    @endphp
    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    @php
                                        $image = explode(',', $product->image);
                                    @endphp
                                    <img src="{{ asset("storage/".$image[0])}}" id="current" alt="#">
                                </div>
                                <div class="images">

                                    @foreach (explode(',', $product->image) as $image)
                                    <img src="{{ asset("storage/".$image)}}" class="img" alt="#">
                                    @endforeach
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{$product->name}}</h2>
                            <div class="d-flex">
                                <p class="category"><i class="lni lni-tag"></i> Brand:<a href="/brand/{{$product->brand_id}}">{{$product->brand->name}}</a></p>
                                <p class="category" style="margin-left: 5%"><i class="lni lni-tag"></i> Category:<a href="/category/{{$product->category_id}}">{{$product->category->name}}</a></p>
                            </div>
                            <p class="category">Rating: {{ $product->rate }}<img width="21" height="21" src="https://img.icons8.com/fluency/48/star.png" alt="star"/></p>
                            <h3 class="price">AED {{$product->price}}<span>{{$product->old_price}}</span></h3>
                            <p class="info-text">{{$product->description}}</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Quantity</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color"> Add to cart </label>
                                        <div class="button cart-button">
                                            <button id="add-to-cart-btn" class="btn" style="width: 100%;">Add to Cart</button>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-lg-4 col-md-4 col-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info">
                <div class="single-block">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Details</h4>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="info-body">
                                <h4>Specifications</h4>
                                <ul class="normal-list">
                                    <li><span>Name:</span> {{ $product->name }}</li>
                                    <li><a href="/brand/{{ $product->brand_id }}"><span>Brand:</span> {{ $product->brand->name }}</a></li>
                                    <li><a href="/category/{{ $product->category_id }}"><span>Category:</span> {{ $product->category->name }}</a></li>
                                    <li><span>Weight:</span> {{ $product->weight }}</li>
                                    <li><span>Dimensions:</span> {{ $product->dimensions }}</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->

    <!-- Similar Products -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Similar Products</h2>
                        <p>Powerful and efficient computers designed to optimize your productivity with advanced features and lightning-fast performance.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; flex-wrap: wrap;">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12" style="display: flex; flex-direction: column; margin-bottom: 20px;">
                    <!-- Start Single Product -->
                        <div class="single-product" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
                        <div class="product-image">
                        @php
                            $images = $product->image;
                            $images = explode(",", $images);
                        @endphp
                            <img src="{{ asset("storage/".$images[0])}}" alt="Product Image">
                            @if($product->old_price)
                                <span class="sale-tag">
                                    @php
                                        $discountPercentage = 100 - (($product->price / $product->old_price) * 100);
                                        echo number_format($discountPercentage, 2).'%';
                                    @endphp
                                </span>
                            @endif
                            <div class="button">
                                <a class="btn" href="/product/{{ $product->id }}"> View Product</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$product->category->name}}</span>
                            <h4 class="title">
                                <a href="/product/{{$product->id}}" >{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                                <span>{{$product->rate}}</span>
                                <li><i class="lni lni-star-filled"></i></li>
                                <span>Stars</span>
                            </ul>
                            <div class="price">
                                <span>AED {{$product->price}}</span>
                                @if($product->old_price)
                                    <span class="discount-price">AED {{$product->old_price}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End Similar Productss -->

    <!-- Review Modal -->
    <div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-name">Your Name</label>
                                <input class="form-control" type="text" id="review-name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-email">Your Email</label>
                                <input class="form-control" type="email" id="review-email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-subject">Subject</label>
                                <input class="form-control" type="text" id="review-subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-rating">Rating</label>
                                <select class="form-control" id="review-rating">
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-message">Review</label>
                        <textarea class="form-control" id="review-message" rows="8" required></textarea>
                    </div>
                </div>
                <div class="modal-footer button">
                    <button type="button" class="btn">Submit Review</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review Modal -->

    {{-- {{ $currentProduct->name }} --}}
    @php
        $product = $currentProduct;
    @endphp
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
    <script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });


// Get the button element
var addToCartBtn = document.getElementById('add-to-cart-btn');

// Add event listener to the button
addToCartBtn.addEventListener('click', function() {
    // Get the selected quantity
    var quantitySelect = document.querySelector('.form-group.quantity select');
    var quantity = parseInt(quantitySelect.value);

    // Get the product information
    var productId = '{{$product->id}}';
    var productName = '{{$product->name}}';
    @php
        $image = explode(',', $product->image)[0];
    @endphp
    var productImage = '{{$image}}';
    var productPrice = '{{$product->price}}';

    // Create an object to store the product details
    var product = {
        id: productId,
        name: productName,
        image: productImage,
        price: productPrice,
        quantity: quantity
    };

    // Check if there are already items in localStorage
    var cartItems = localStorage.getItem('cartItems');
    if (cartItems) {
        // Parse the existing items
        cartItems = JSON.parse(cartItems);

        // Check if the product already exists in the cart
        var existingProduct = cartItems.find(function(item) {
            return item.id === productId;
        });

        if (existingProduct) {
            // Product already exists in the cart, update the quantity
            existingProduct.quantity += quantity;
        } else {
            // Product does not exist in the cart, add it as a new entry
            cartItems.push(product);
        }
    } else {
        // Create a new array with the product and store it in localStorage
        var newCartItems = [product];
        cartItems = newCartItems;
    }

    // Store the updated cart items in localStorage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    // Show a confirmation message
    alert('Product added to cart');
});



</script>


</body>

</html>
