    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="/">
                            <img src="/assets/user/images/logo/logo.png" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <form action="{{ url('/advanced-search') }}" method="GET">
                                <div class="navbar-search search-style-5">
                                    <div class="search-select">
                                        <div class="select-position">
                                            <select id="select1" name="category_id">
                                                <option selected>All</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <input type="text" placeholder="Search" name="name">
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit"><i class="lni lni-search-alt"></i></button>
                                    </div>
                                </div>
                            </form>

                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Hotline:
                                    <span>+971 58 519 7407</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="cart-items">
                                    <a href="/cart" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        {{-- <span class="total-items">2</span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                            <ul class="sub-category">
                                @foreach ($categories as $category)
                                    <li><a href="{{ url('/category/' . $category->id) }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" class="" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/advanced-search')}}" aria-label="Toggle navigation">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/about-us')}}" aria-label="Toggle navigation">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/faq')}}" aria-label="Toggle navigation">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/order/search')}}" aria-label="Toggle navigation">Tracking Orders</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        <h5 class="title">Follow Us:</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

    <script>
        // Cart data
        var cartData = [
          {"id": "2", "quantity": "1"},
          {"id": "5", "quantity": 7}
        ];

        // Function to display the cart items
        function displayCartItems() {
          var cartItemsContainer = document.getElementById('cartItems');
          cartItemsContainer.innerHTML = '';

          var totalAmount = 0;

          for (var i = 0; i < cartData.length; i++) {
            var cartItem = cartData[i];
            var itemHTML = `
              <li>
                <a href="javascript:void(0)" class="remove" title="Remove this item">
                  <i class="lni lni-close"></i>
                </a>
                <div class="cart-img-head">
                  <a class="cart-img" href="product-details.html">
                    <img src="/assets/user/images/header/cart-items/item${i+1}.jpg" alt="#">
                  </a>
                </div>
                <div class="content">
                  <h4><a href="product-details.html">Product Name</a></h4>
                  <p class="quantity">${cartItem.quantity}x - <span class="amount">$99.00</span></p>
                </div>
              </li>
            `;

            cartItemsContainer.innerHTML += itemHTML;
            totalAmount += parseFloat(cartItem.quantity) * 99.00; // Replace 99.00 with actual item price
          }

          var cartItemCount = cartData.length;
          var cartItemCountElement = document.getElementById('cartItemCount');
          cartItemCountElement.innerText = cartItemCount + (cartItemCount === 1 ? ' Item' : ' Items');

          var cartTotalAmountElement = document.getElementById('cartTotalAmount');
          cartTotalAmountElement.innerText = '$' + totalAmount.toFixed(2);
        }

        // Call the function to display cart items
        displayCartItems();
      </script>
