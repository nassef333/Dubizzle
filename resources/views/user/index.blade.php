<!DOCTYPE html>
<html lang="en">

@include('user.static.head');

<body id="bg">
    {{-- <div id="loading-area" class="loading-page-1">
        <div class="spinner">
            <div class="ball"></div>
        </div>
    </div> --}}
    <div class="page-wraper">
        <!-- Header -->
        @include('user.static.header');
        <!-- Header End -->



        <div class="page-content bg-white">
            <div class="banner-one">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-content">
                            <div class="trending-box">
                                <span class="text-btn">USED CARS</span> PARTS
                            </div>
                            <h1 class="title">Discover Automotive Excellence</h1>
                            <p>Discover a world where automotive excellence and precision craftsmanship converge, revolutionizing your ride and elevating your driving experience to unparalleled heights with our superior quality car parts meticulously engineered for optimal performance, ensuring you unleash the full potential of your vehicle and drive with unwavering confidence on every journey.</p>
                            <div class="car-search-box row item3">
                                <div class="col-md-3 col-sm-6">
                                    <div class="selected-box">
                                        <select class="form-control">
										<option>Make </option>
										<option>BMW</option>
										<option>Honda </option>
										<option>Hyundai </option>
										<option>Nissan </option>
										<option>Mercedes Benz </option>
									</select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="selected-box">
                                        <select class="form-control">
										<option>Class</option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
									</select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="selected-box">
                                        <select class="form-control">
										<option>Model</option>
										<option>3-Series</option>
										<option>Carrera</option>
										<option>GT-R</option>
										<option>Cayenne</option>
										<option>Mazda6</option>
										<option>Macan</option>
									</select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="/assets/javascript:void(0);" class="btn btn-lg effect-1 shadow-none btn-primary d-flex justify-content-between">
									<span class="d-flex justify-content-between w-100">FIND<i class="fa-solid fa-arrow-right"></i></span>
								</a>
                                </div>
                                <img class="img2 move-2" src="/assets/images/pattern/pattern5.png " alt="">
                            </div>
                            <a href="/advanced-search" class="btn-link-lg">Try advanced search<i class="fa-solid fa-magnifying-glass"></i></a>
                            <div class="tags-area">
                                <p>Popular Brands</p>
                                <ul class="tag-list">
                                    <li><a href="javascript:void(0);">HONDO</a></li>
                                    <li><a href="javascript:void(0);">FORT</a></li>
                                    <li><a href="javascript:void(0);">TOYOTO</a></li>
                                    <li><a href="javascript:void(0);">PORCE</a></li>
                                </ul>
                            </div>
                            <img class="img1 move-1" src="/assets/images/pattern/pattern4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-slider">
                            <div class="swiper-container main-silder-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($swipers as $swiper)
                                    <div class="swiper-slide">
                                        <div class="dlab-slide-item">
                                            <div class="silder-content">
                                                <div class="inner-content">
                                                    <div class="left">
                                                        <p class="car-name slide-vertical" data-splitting>{{ $swiper->title }}</p>
                                                    </div>
                                                    <div class="right">
                                                        {{-- <p class="price-label">Starting at </p>
                                                        <p class="car-price" data-splitting>$ 20,500</p> --}}
                                                    </div>
                                                </div>
                                                <a href="/advanced-search" data-splitting class="discover-link">DISCOVER MORE</a>
                                            </div>
                                            <div class="slider-img">
                                                <img src="/storage/{{ $swiper->image }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="slider-one-pagination">
                                    <div class="btn-prev swiper-button-prev1"><i class="fas fa-chevron-left"></i></div>
                                    <div class="btn-next swiper-button-next1"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Us -->
            <section class="content-inner-2 overflow-hidden">
                <div class="container">
                    <div class="row about-bx1">
                        <div class="col-lg-5">
                            <div class="dlab-media">
                                <img src="/assets/images/about/about1.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="section-head">
                                <h6 class="text-primary sub-title">ABOUT</h6>
                                <h2 class="title">About PartsNoon</h2>
                            </div>
                            <p>Partsnoon is your trusted destination for quality used cars and car parts. We connect buyers and sellers, providing a reliable marketplace for automotive enthusiasts. Our platform simplifies the process of finding the right parts or pre-owned vehicles, ensuring a seamless experience for all automotive needs. Discover great deals and a wide selection, all backed by our commitment to quality and customer satisfaction.</p>
                            <div class="swiper-container about-swiper">
                                </style>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="icon-bx-wraper style-1 hover-overlay-effect">
                                            <div class="icon-md m-b40">
                                                <svg width="47" height="42" viewBox="0 0 47 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.9787 1.46102L15.2421 12.3206L2.40714 14.0677C0.105462 14.3793 -0.816966 17.0286 0.85219 18.546L10.138 26.9942L7.94171 38.9283C7.54638 41.0854 9.97984 42.7012 12.018 41.6924L23.5 36.0575L34.982 41.6924C37.0202 42.693 39.4536 41.0854 39.0583 38.9283L36.862 26.9942L46.1478 18.546C47.817 17.0286 46.8945 14.3793 44.5929 14.0677L31.7579 12.3206L26.0213 1.46102C24.9935 -0.474683 22.0153 -0.499289 20.9787 1.46102Z" fill="#0D3DE6"/>
                                                </svg>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="title"><a href="/about-us.html" class="text-effect-1" data-splitting>QUALITY PARTS</a></h4>
                                                <p>Your destination for high-quality car parts. Find the perfect components for your vehicle and keep it running smoothly.</p>
                                            </div>
                                            <div class="effect bg-primary"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="icon-bx-wraper style-1 hover-overlay-effect">
                                            <div class="icon-md m-b40">
                                                <svg width="44" height="42" viewBox="0 0 44 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M44 26.2499V39.375C44 40.8245 42.7685 42 41.25 42H27.5C25.9815 42 24.75 40.8245 24.75 39.375V26.2499C24.75 24.8004 25.9815 23.6249 27.5 23.6249H41.25C42.7685 23.6249 44 24.8004 44 26.2499ZM11 20.9999C4.92508 20.9999 0 25.7011 0 31.4999C0 37.2988 4.92508 42 11 42C17.0749 42 22 37.2988 22 31.4999C22 25.7011 17.0749 20.9999 11 20.9999ZM41.1666 18.3749C43.3443 18.3749 44.7055 16.1871 43.6167 14.4374L35.4501 1.3123C34.3613 -0.437434 31.6388 -0.437434 30.5499 1.3123L22.3833 14.4374C21.2945 16.1871 22.6557 18.3749 24.8334 18.3749H41.1666Z" fill="#0D3DE5"/>
                                                </svg>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="title"><a href="/about-us.html" class="text-effect-1" data-splitting>WIDE SELECTION</a></h4>
                                                <p>Explore our vast and diverse range of used car parts, ensuring you find the right fit and solution for your automotive needs.</p>
                                            </div>
                                            <div class="effect bg-primary"></div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="icon-bx-wraper style-1 hover-overlay-effect">
                                            <div class="icon-md m-b40">
                                                <svg width="36" height="38" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M33.7875 6.21086L19.3875 0.272785C18.9489 0.0926974 18.4786 0 18.0037 0C17.5289 0 17.0586 0.0926974 16.62 0.272785L2.22 6.21086C0.8775 6.76014 0 8.05909 0 9.49908C0 24.2329 8.5875 34.4167 16.6125 37.7272C17.4975 38.0909 18.495 38.0909 19.38 37.7272C25.8075 35.0774 36 25.9253 36 9.49908C36 8.05909 35.1225 6.76014 33.7875 6.21086ZM18.0075 33.1252L18 4.84511L31.1925 10.2859C30.945 21.5237 25.035 29.6663 18.0075 33.1252Z" fill="#0D3DE6"/>
                                                </svg>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="title"><a href="/about-us.html" class="text-effect-1" data-splitting>RELIABLE SOURCES</a></h4>
                                                <p>We source our car parts from trusted sources, ensuring you receive products of the highest quality and reliability.</p>
                                            </div>
                                            <div class="effect bg-primary"></div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="icon-bx-wraper style-1 hover-overlay-effect">
                                            <div class="icon-md m-b40">
                                                <svg width="47" height="42" viewBox="0 0 47 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.9787 1.46102L15.2421 12.3206L2.40714 14.0677C0.105462 14.3793 -0.816966 17.0286 0.85219 18.546L10.138 26.9942L7.94171 38.9283C7.54638 41.0854 9.97984 42.7012 12.018 41.6924L23.5 36.0575L34.982 41.6924C37.0202 42.693 39.4536 41.0854 39.0583 38.9283L36.862 26.9942L46.1478 18.546C47.817 17.0286 46.8945 14.3793 44.5929 14.0677L31.7579 12.3206L26.0213 1.46102C24.9935 -0.474683 22.0153 -0.499289 20.9787 1.46102Z" fill="#0D3DE6"/>
                                                </svg>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="title"><a href="/about-us.html" class="text-effect-1" data-splitting>FAST SHIPPING</a></h4>
                                                <p>Enjoy quick and reliable shipping services, ensuring you receive your ordered parts promptly and in excellent condition.</p>
                                            </div>
                                            <div class="effect bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us -->


            <!-- Core Features -->
            <section class="content-inner-2">
                <div class="container">
                    <div class="row features-box">
                        <div class="col-lg-6 align-self-center m-b30">
                            <div class="content-box">
                                <div class="section-head">
                                    <h6 class="sub-title style-1">We Propel You Into The Future</h6>
                                    <h2 class="title">Rest assured, every unit is thoroughly inspected</h2>
                                </div>
                                <p class="m-b40">Discover a world of automotive excellence at Partsnoon. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <a href="/assets/about-us.html" class="btn btn-primary effect-1"><span>Discover More</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30 m-sm-b0">
                            <div class="image-slider-box">
                                <div class="swiper-container feature-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic1.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic3.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic4.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-one-pagination">
                                        <!-- Add Navigation -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <img class="img1 move-1" src="/assets/images/pattern/pattern6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Core Features -->


            <section class="content-inner-2">
                <div class="container-fluid">
                    <div class="section-head space-lg text-center">
                        <h2 class="title">Top deals of the week</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class="swiper-container deal-swiper swiper-dots-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="car-list-box overlay">
                                    <div class="media-box">
                                        <img src="/assets/images/deal/pic1.webp" alt="">
                                    </div>
                                    <div class="list-info">
                                        <h3 class="title"><a href="/assets/car-details.html" data-splitting class="text-white">SMART GT AA-211</a></h3>
                                        <div class="car-type">SPORT CAR</div>
                                        <span class="badge m-b30">$34,500</span>
                                        <div class="feature-list">
                                            <div>
                                                <label>Transmotion</label>
                                                <p class="value">Automatic</p>
                                            </div>
                                            <div>
                                                <label>Fuel</label>
                                                <p class="value">Electric</p>
                                            </div>
                                            <div>
                                                <label>Passenger</label>
                                                <p class="value">2 Person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="car-list-box overlay">
                                    <div class="media-box">
                                        <img src="/assets/images/deal/pic2.webp" alt="">
                                    </div>
                                    <div class="list-info">
                                        <h3 class="title"><a href="/assets/car-details.html" data-splitting class="text-white">GT-Z 122 Boost</a></h3>
                                        <div class="car-type">SPORT CAR</div>
                                        <span class="badge m-b30">$34,500</span>
                                        <div class="feature-list">
                                            <div>
                                                <label>Transmotion</label>
                                                <p class="value">Automatic</p>
                                            </div>
                                            <div>
                                                <label>Fuel</label>
                                                <p class="value">Electric</p>
                                            </div>
                                            <div>
                                                <label>Passenger</label>
                                                <p class="value">2 Person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="car-list-box overlay">
                                    <div class="media-box">
                                        <img src="/assets/images/deal/pic3.webp" alt="">
                                    </div>
                                    <div class="list-info">
                                        <h3 class="title"><a href="/assets/car-details.html" data-splitting class="text-white">SPORT X-GTZ</a></h3>
                                        <div class="car-type">SPORT CAR</div>
                                        <span class="badge m-b30">$34,500</span>
                                        <div class="feature-list">
                                            <div>
                                                <label>Transmotion</label>
                                                <p class="value">Automatic</p>
                                            </div>
                                            <div>
                                                <label>Fuel</label>
                                                <p class="value">Electric</p>
                                            </div>
                                            <div>
                                                <label>Passenger</label>
                                                <p class="value">2 Person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="car-list-box overlay">
                                    <div class="media-box">
                                        <img src="/assets/images/deal/pic4.webp" alt="">
                                    </div>
                                    <div class="list-info">
                                        <h3 class="title"><a href="/assets/car-details.html" data-splitting class="text-white">Smart Car GT AA-211</a></h3>
                                        <div class="car-type">SPORT CAR</div>
                                        <span class="badge m-b30">$34,500</span>
                                        <div class="feature-list">
                                            <div>
                                                <label>Transmotion</label>
                                                <p class="value">Automatic</p>
                                            </div>
                                            <div>
                                                <label>Fuel</label>
                                                <p class="value">Electric</p>
                                            </div>
                                            <div>
                                                <label>Passenger</label>
                                                <p class="value">2 Person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="car-list-box overlay">
                                    <div class="media-box">
                                        <img src="/assets/images/deal/pic3.webp" alt="">
                                    </div>
                                    <div class="list-info">
                                        <h3 class="title"><a href="/assets/car-details.html" data-splitting class="text-white">SPORT X-GTZ</a></h3>
                                        <div class="car-type">SPORT CAR</div>
                                        <span class="badge m-b30">$34,500</span>
                                        <div class="feature-list">
                                            <div>
                                                <label>Transmotion</label>
                                                <p class="value">Automatic</p>
                                            </div>
                                            <div>
                                                <label>Fuel</label>
                                                <p class="value">Electric</p>
                                            </div>
                                            <div>
                                                <label>Passenger</label>
                                                <p class="value">2 Person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-one-pagination m-t40 m-sm-t20">
                            <!-- Add Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Features -->
            <section class="content-inner-2">
                <div class="container">
                    <div class="row features-box">
                        <div class="col-lg-6 m-b30">
                            <div class="image-slider-box">
                                <div class="swiper-container feature-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic2.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic1.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic3.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dlab-media">
                                                <img src="/assets/images/about/pic4.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-one-pagination">
                                        <!-- Add Navigation -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <img class="img1 move-1" src="/assets/images/pattern/pattern6.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center m-b30">
                            <div class="content-box right">
                                <div class="section-head">
                                    <h6 class="sub-title style-1">Driving You Towards Tomorrow</h6>
                                    <h2 class="title">No Worries, Rigorous Inspection is Our Standard</h2>
                                </div>
                                <p class="m-b40">At Partsnoon, we introduce you to a future of automotive innovation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Core Features -->

            <section class="content-inner">
                <div class="container">
                    <div class="row call-to-action-bx">
                        <div class="col-xl-5 col-lg-6 me-auto">
                            <div class="section-head">
                                <h2 class="title text-white">Have any question about us?</h2>
                            </div>
                            <a href="/assets/tel:224000221133" class="btn btn-white me-3 mb-2"><i class="fas fa-phone-volume me-sm-3 me-0 shake"></i><span class="d-sm-inline-block d-none">224 000 22 11 33</span></a>
                            <a href="/assets/contact-us.html" class="btn btn-outline-white effect-1  mb-2"><span>Contact Us</span></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-box">
                                <img src="/assets/images/about/pic5.jpg" class="main-img" alt="">
                                <img src="/assets/images/pattern/pattern7.png" class="pt-img move-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
        <!-- Footer -->
        @include('user.static.footer')
        <!-- Footer End -->
        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="/assets/vendor/rangeslider/rangeslider.js"></script>
    <!-- RANGESLIDER -->
    <script src="/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <!-- MAGNIFIC POPUP JS -->
    <script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <!-- LIGHTGALLERY -->
    <script src="/assets/vendor/splitting/dist/splitting.min.js"></script>
    <!-- Splitting -->
    <script src="/assets/vendor/counter/waypoints-min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="/assets/vendor/counter/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- OWL-CAROUSEL -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <!-- AOS -->
    <script src="/assets/js/dlab.carousel.js"></script>
    <!-- OWL-CAROUSEL -->
    <script src="/assets/js/dlab.ajax.js"></script>
    <!-- AJAX -->
    <script src="/assets/js/custom.min.js"></script>

</body>

</html>
