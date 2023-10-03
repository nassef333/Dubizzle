<!DOCTYPE html>
<html lang="en">

@include('user.static.head')

<body id="bg" class="theme-rounded">
    <div id="loading-area" class="loading-page-1">
        <div class="spinner">
            <div class="ball"></div>
            <p>LOADING</p>
        </div>
    </div>
    <div class="page-wraper">
        <!-- Header -->
        <header class="site-header mo-left header style-1">

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header mostion logo-dark">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Extra Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="tel:224000221133"
                                    class="btn btn-primary light phone-no shadow-none effect-1"><span><i
                                            class="fas fa-phone-volume shake"></i>224 000 22 11 33</span></a>
                            </div>
                        </div>
                        <!-- Extra Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav navbar navbar-left">
                                <li class="sub-menu-down"><a href="javascript:void(0);">HOME<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>

                                <li class="sub-menu-down"><a href="javascript:void(0);">NEW<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0);">CAR LISTING<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="car-listing.html">CAR LISTING 1</a></li>
                                                <li><a href="car-listing-2.html">CAR LISTING 2</a></li>
                                                <li><a href="car-listing-3.html">CAR LISTING 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">SEARCH CAR<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="new-car-search.html">SEARCH CAR</a></li>
                                                <li><a href="new-car-search-result-list.html">SEARCH RESULT LIST</a>
                                                </li>
                                                <li><a href="new-car-search-result-column.html">SEARCH RESULT COLUMN</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="latest-cars.html">LATEST CARS</a></li>
                                        <li><a href="popular-cars.html">POPULAR CARS</a></li>
                                        <li><a href="upcoming-cars.html">UPCOMING CARS</a></li>
                                        <li>
                                            <a href="javascript:void(0);">DEALERS & SERVICE<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="car-dealers.html">CAR DEALERS</a></li>
                                                <li><a href="car-service-center.html">SERVICE CENTER</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="on-road-price.html">ON ROAD PRICE</a></li>
                                    </ul>
                                </li>


                                <li class="sub-menu-down"><a href="javascript:void(0);">USED<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0);">IN MY CITY<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="used-car-search-result.html">New York City</a></li>
                                                <li><a href="used-car-search-result.html">Chicago</a></li>
                                                <li><a href="used-car-search-result.html">Los Angeles</a></li>
                                                <li><a href="used-car-search-result.html">Boston</a></li>
                                                <li><a href="used-car-search-result.html">San Francisco</a></li>
                                                <li><a href="used-car-search-result.html">Washington</a></li>
                                                <li><a href="used-car-search-result.html">Seattle</a></li>
                                                <li><a href="used-car-search-result.html">Philadelphia</a></li>
                                                <li><a href="used-car-search-result.html">Austin</a></li>
                                                <li><a href="used-car-search-result.html">Detroit</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">SEARCH CAR<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="used-car-search.html">SEARCH CAR</a></li>
                                                <li><a href="used-car-search-result.html">SEARCH CAR RESULT</a></li>
                                                <li><a href="used-car-details.html">USED CAR DETAIL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="used-car-details.html">USED CAR DETAIL</a></li>
                                        <li><a href="used-car-sell.html">SELL YOUR CAR</a></li>
                                        <li><a href="used-car-valuation.html">CAR VALUATION</a></li>
                                    </ul>
                                </li>


                                <li class="sub-menu-down"><a href="javascript:void(0);">COMPARE<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="compare-car.html">COMPARE CAR</a></li>
                                        <li><a href="compare-result.html">COMPARE CAR RESULT</a></li>
                                        <li><a href="write-review.html">WRITE REVIEW</a></li>
                                        <li><a href="car-review.html">CAR REVIEW</a></li>
                                    </ul>
                                </li>

                                <li class="sub-menu-down"><a href="javascript:void(0);">CAR DETAIL<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0);">CAR DETAIL<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="car-details.html">CAR DETAIL 1</a></li>
                                                <li><a href="car-details-2.html">CAR DETAIL 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="car-detail-specifications.html">CAR SPECIFICATIONS</a></li>
                                        <li><a href="car-detail-price.html">CAR PRICE</a></li>
                                        <li><a href="car-detail-compare.html">CAR COMPARE</a></li>
                                        <li><a href="car-detail-pictures.html">CAR PICTURES</a></li>
                                    </ul>
                                </li>


                                <li class="sub-menu-down"><a href="javascript:void(0);">PAGES<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">ABOUT</a></li>
                                        <li><a href="services.html">SERVICES</a></li>
                                        <li><a href="location.html">LOCATION</a></li>
                                        <li><a href="contact-us.html">CONTACT</a></li>
                                        <li>
                                            <a href="javascript:void(0);">BLOG<span class="badge">New</span><i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error-404.html">ERROR 404<span class="badge">New</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                            <div class="dlab-social-icon">
                                <ul>
                                    <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->
        </header>
        <!-- Header End -->


        <div class="page-content bg-white">
            <!-- Banner  -->
            <div class="dlab-bnr-inr style-1 overlay-black-middle"
                style="background-image: url(images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">About Mobhil</h1>
                        <div class="dlab-separator"></div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- About Us -->
            <section class="content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 me-auto">
                            <div class="section-head">
                                <h6 class="text-primary sub-title">PROCCESS</h6>
                                <h2 class="title">This is how we work</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea.</p>
                        </div>
                    </div>
                    <div class="row process-wrapper m-t40">
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-bx-wraper style-1 shadow-none rounded-0">
                                <div class="icon-md m-b40">
                                    <svg width="47" height="42" viewBox="0 0 47 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.9787 1.46102L15.2421 12.3206L2.40714 14.0677C0.105462 14.3793 -0.816966 17.0286 0.85219 18.546L10.138 26.9942L7.94171 38.9283C7.54638 41.0854 9.97984 42.7012 12.018 41.6924L23.5 36.0575L34.982 41.6924C37.0202 42.693 39.4536 41.0854 39.0583 38.9283L36.862 26.9942L46.1478 18.546C47.817 17.0286 46.8945 14.3793 44.5929 14.0677L31.7579 12.3206L26.0213 1.46102C24.9935 -0.474683 22.0153 -0.499289 20.9787 1.46102Z"
                                            fill="#0D3DE6"></path>
                                    </svg>
                                </div>
                                <div class="icon-content">
                                    <h4 class="title m-b10">FIND</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-bx-wraper style-1 shadow-none rounded-0">
                                <div class="icon-md m-b40">
                                    <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M44 26.2499V39.375C44 40.8245 42.7685 42 41.25 42H27.5C25.9815 42 24.75 40.8245 24.75 39.375V26.2499C24.75 24.8004 25.9815 23.6249 27.5 23.6249H41.25C42.7685 23.6249 44 24.8004 44 26.2499ZM11 20.9999C4.92508 20.9999 0 25.7011 0 31.4999C0 37.2988 4.92508 42 11 42C17.0749 42 22 37.2988 22 31.4999C22 25.7011 17.0749 20.9999 11 20.9999ZM41.1666 18.3749C43.3443 18.3749 44.7055 16.1871 43.6167 14.4374L35.4501 1.3123C34.3613 -0.437434 31.6388 -0.437434 30.5499 1.3123L22.3833 14.4374C21.2945 16.1871 22.6557 18.3749 24.8334 18.3749H41.1666Z"
                                            fill="#0D3DE5"></path>
                                    </svg>
                                </div>
                                <div class="icon-content">
                                    <h4 class="title m-b10">UPDATE</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-bx-wraper style-1 shadow-none rounded-0">
                                <div class="icon-md m-b40">
                                    <svg width="36" height="38" viewBox="0 0 36 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M33.7875 6.21086L19.3875 0.272785C18.9489 0.0926974 18.4786 0 18.0037 0C17.5289 0 17.0586 0.0926974 16.62 0.272785L2.22 6.21086C0.8775 6.76014 0 8.05909 0 9.49908C0 24.2329 8.5875 34.4167 16.6125 37.7272C17.4975 38.0909 18.495 38.0909 19.38 37.7272C25.8075 35.0774 36 25.9253 36 9.49908C36 8.05909 35.1225 6.76014 33.7875 6.21086ZM18.0075 33.1252L18 4.84511L31.1925 10.2859C30.945 21.5237 25.035 29.6663 18.0075 33.1252Z"
                                            fill="#0D3DE6"></path>
                                    </svg>
                                </div>
                                <div class="icon-content">
                                    <h4 class="title m-b10">SECURE</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="icon-bx-wraper style-1 shadow-none rounded-0">
                                <div class="icon-md m-b40">
                                    <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M44 26.2499V39.375C44 40.8245 42.7685 42 41.25 42H27.5C25.9815 42 24.75 40.8245 24.75 39.375V26.2499C24.75 24.8004 25.9815 23.6249 27.5 23.6249H41.25C42.7685 23.6249 44 24.8004 44 26.2499ZM11 20.9999C4.92508 20.9999 0 25.7011 0 31.4999C0 37.2988 4.92508 42 11 42C17.0749 42 22 37.2988 22 31.4999C22 25.7011 17.0749 20.9999 11 20.9999ZM41.1666 18.3749C43.3443 18.3749 44.7055 16.1871 43.6167 14.4374L35.4501 1.3123C34.3613 -0.437434 31.6388 -0.437434 30.5499 1.3123L22.3833 14.4374C21.2945 16.1871 22.6557 18.3749 24.8334 18.3749H41.1666Z"
                                            fill="#0D3DE5"></path>
                                    </svg>
                                </div>
                                <div class="icon-content">
                                    <h4 class="title m-b10">We Deliver</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us -->

            <!-- Dealer Shops -->
            <section class="content-inner-2">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Our dealer shops</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea.</p>
                    </div>
                    <div class="map-bx-wraper">
                        <img src="images/map/map1.jpg" class="map-img" alt="">
                        <div class="shop-location location1">
                            <svg width="71" height="59" viewBox="0 0 71 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M69.3341 17.2083H61.0318L58.7243 10.8167C56.3531 4.24523 50.6938 0 44.3052 0H26.6939C20.3066 0 14.646 4.24523 12.2734 10.8167L9.96586 17.2083H1.66495C0.581918 17.2083 -0.212673 18.3361 0.0508043 19.4992L0.882837 23.1867C1.06727 24.0072 1.7329 24.5833 2.49698 24.5833H5.28013C3.41776 26.3856 2.21825 29.0053 2.21825 31.9583V39.3333C2.21825 41.8101 3.07247 44.0456 4.437 45.7757V54.0833C4.437 56.7983 6.42417 59 8.87451 59H13.312C15.7623 59 17.7495 56.7983 17.7495 54.0833V49.1667H53.2496V54.0833C53.2496 56.7983 55.2367 59 57.6871 59H62.1246C64.5749 59 66.5621 56.7983 66.5621 54.0833V45.7757C67.9266 44.0472 68.7808 41.8116 68.7808 39.3333V31.9583C68.7808 29.0053 67.5813 26.3856 65.7203 24.5833H68.5035C69.2676 24.5833 69.9332 24.0072 70.1176 23.1867L70.9497 19.4992C71.2118 18.3361 70.4172 17.2083 69.3341 17.2083ZM20.5133 14.4688C21.5242 11.6694 23.9717 9.83333 26.6939 9.83333H44.3052C47.0274 9.83333 49.4749 11.6694 50.4858 14.4688L53.2496 22.125H17.7495L20.5133 14.4688ZM13.312 39.3026C10.6495 39.3026 8.87451 37.3421 8.87451 34.4013C8.87451 31.4605 10.6495 29.5 13.312 29.5C15.9745 29.5 19.9683 33.9112 19.9683 36.852C19.9683 39.7927 15.9745 39.3026 13.312 39.3026ZM57.6871 39.3026C55.0246 39.3026 51.0308 39.7927 51.0308 36.852C51.0308 33.9112 55.0246 29.5 57.6871 29.5C60.3496 29.5 62.1246 31.4605 62.1246 34.4013C62.1246 37.3421 60.3496 39.3026 57.6871 39.3026Z"
                                    fill="url(#paint0_linear)" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="17.2703" y1="-1.43331e-06"
                                        x2="63.7282" y2="75.5192" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#0D3DE6" />
                                        <stop offset="1" stop-color="#0DE6CC" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="shop-location location2 active">
                            <svg width="71" height="59" viewBox="0 0 71 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M69.3341 17.2083H61.0318L58.7243 10.8167C56.3531 4.24523 50.6938 0 44.3052 0H26.6939C20.3066 0 14.646 4.24523 12.2734 10.8167L9.96586 17.2083H1.66495C0.581918 17.2083 -0.212673 18.3361 0.0508043 19.4992L0.882837 23.1867C1.06727 24.0072 1.7329 24.5833 2.49698 24.5833H5.28013C3.41776 26.3856 2.21825 29.0053 2.21825 31.9583V39.3333C2.21825 41.8101 3.07247 44.0456 4.437 45.7757V54.0833C4.437 56.7983 6.42417 59 8.87451 59H13.312C15.7623 59 17.7495 56.7983 17.7495 54.0833V49.1667H53.2496V54.0833C53.2496 56.7983 55.2367 59 57.6871 59H62.1246C64.5749 59 66.5621 56.7983 66.5621 54.0833V45.7757C67.9266 44.0472 68.7808 41.8116 68.7808 39.3333V31.9583C68.7808 29.0053 67.5813 26.3856 65.7203 24.5833H68.5035C69.2676 24.5833 69.9332 24.0072 70.1176 23.1867L70.9497 19.4992C71.2118 18.3361 70.4172 17.2083 69.3341 17.2083ZM20.5133 14.4688C21.5242 11.6694 23.9717 9.83333 26.6939 9.83333H44.3052C47.0274 9.83333 49.4749 11.6694 50.4858 14.4688L53.2496 22.125H17.7495L20.5133 14.4688ZM13.312 39.3026C10.6495 39.3026 8.87451 37.3421 8.87451 34.4013C8.87451 31.4605 10.6495 29.5 13.312 29.5C15.9745 29.5 19.9683 33.9112 19.9683 36.852C19.9683 39.7927 15.9745 39.3026 13.312 39.3026ZM57.6871 39.3026C55.0246 39.3026 51.0308 39.7927 51.0308 36.852C51.0308 33.9112 55.0246 29.5 57.6871 29.5C60.3496 29.5 62.1246 31.4605 62.1246 34.4013C62.1246 37.3421 60.3496 39.3026 57.6871 39.3026Z"
                                    fill="url(#paint0_linear4)" />
                                <defs>
                                    <linearGradient id="paint0_linear4" x1="17.2703" y1="-1.43331e-06"
                                        x2="63.7282" y2="75.5192" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#0D3DE6" />
                                        <stop offset="1" stop-color="#0DE6CC" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="shop-location location3">
                            <svg width="71" height="59" viewBox="0 0 71 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M69.3341 17.2083H61.0318L58.7243 10.8167C56.3531 4.24523 50.6938 0 44.3052 0H26.6939C20.3066 0 14.646 4.24523 12.2734 10.8167L9.96586 17.2083H1.66495C0.581918 17.2083 -0.212673 18.3361 0.0508043 19.4992L0.882837 23.1867C1.06727 24.0072 1.7329 24.5833 2.49698 24.5833H5.28013C3.41776 26.3856 2.21825 29.0053 2.21825 31.9583V39.3333C2.21825 41.8101 3.07247 44.0456 4.437 45.7757V54.0833C4.437 56.7983 6.42417 59 8.87451 59H13.312C15.7623 59 17.7495 56.7983 17.7495 54.0833V49.1667H53.2496V54.0833C53.2496 56.7983 55.2367 59 57.6871 59H62.1246C64.5749 59 66.5621 56.7983 66.5621 54.0833V45.7757C67.9266 44.0472 68.7808 41.8116 68.7808 39.3333V31.9583C68.7808 29.0053 67.5813 26.3856 65.7203 24.5833H68.5035C69.2676 24.5833 69.9332 24.0072 70.1176 23.1867L70.9497 19.4992C71.2118 18.3361 70.4172 17.2083 69.3341 17.2083ZM20.5133 14.4688C21.5242 11.6694 23.9717 9.83333 26.6939 9.83333H44.3052C47.0274 9.83333 49.4749 11.6694 50.4858 14.4688L53.2496 22.125H17.7495L20.5133 14.4688ZM13.312 39.3026C10.6495 39.3026 8.87451 37.3421 8.87451 34.4013C8.87451 31.4605 10.6495 29.5 13.312 29.5C15.9745 29.5 19.9683 33.9112 19.9683 36.852C19.9683 39.7927 15.9745 39.3026 13.312 39.3026ZM57.6871 39.3026C55.0246 39.3026 51.0308 39.7927 51.0308 36.852C51.0308 33.9112 55.0246 29.5 57.6871 29.5C60.3496 29.5 62.1246 31.4605 62.1246 34.4013C62.1246 37.3421 60.3496 39.3026 57.6871 39.3026Z"
                                    fill="url(#paint0_linear2)" />
                                <defs>
                                    <linearGradient id="paint0_linear2" x1="17.2703" y1="-1.43331e-06"
                                        x2="63.7282" y2="75.5192" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#0D3DE6" />
                                        <stop offset="1" stop-color="#0DE6CC" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="shop-location location4">
                            <svg width="71" height="59" viewBox="0 0 71 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M69.3341 17.2083H61.0318L58.7243 10.8167C56.3531 4.24523 50.6938 0 44.3052 0H26.6939C20.3066 0 14.646 4.24523 12.2734 10.8167L9.96586 17.2083H1.66495C0.581918 17.2083 -0.212673 18.3361 0.0508043 19.4992L0.882837 23.1867C1.06727 24.0072 1.7329 24.5833 2.49698 24.5833H5.28013C3.41776 26.3856 2.21825 29.0053 2.21825 31.9583V39.3333C2.21825 41.8101 3.07247 44.0456 4.437 45.7757V54.0833C4.437 56.7983 6.42417 59 8.87451 59H13.312C15.7623 59 17.7495 56.7983 17.7495 54.0833V49.1667H53.2496V54.0833C53.2496 56.7983 55.2367 59 57.6871 59H62.1246C64.5749 59 66.5621 56.7983 66.5621 54.0833V45.7757C67.9266 44.0472 68.7808 41.8116 68.7808 39.3333V31.9583C68.7808 29.0053 67.5813 26.3856 65.7203 24.5833H68.5035C69.2676 24.5833 69.9332 24.0072 70.1176 23.1867L70.9497 19.4992C71.2118 18.3361 70.4172 17.2083 69.3341 17.2083ZM20.5133 14.4688C21.5242 11.6694 23.9717 9.83333 26.6939 9.83333H44.3052C47.0274 9.83333 49.4749 11.6694 50.4858 14.4688L53.2496 22.125H17.7495L20.5133 14.4688ZM13.312 39.3026C10.6495 39.3026 8.87451 37.3421 8.87451 34.4013C8.87451 31.4605 10.6495 29.5 13.312 29.5C15.9745 29.5 19.9683 33.9112 19.9683 36.852C19.9683 39.7927 15.9745 39.3026 13.312 39.3026ZM57.6871 39.3026C55.0246 39.3026 51.0308 39.7927 51.0308 36.852C51.0308 33.9112 55.0246 29.5 57.6871 29.5C60.3496 29.5 62.1246 31.4605 62.1246 34.4013C62.1246 37.3421 60.3496 39.3026 57.6871 39.3026Z"
                                    fill="url(#paint0_linear3)" />
                                <defs>
                                    <linearGradient id="paint0_linear3" x1="17.2703" y1="-1.43331e-06"
                                        x2="63.7282" y2="75.5192" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#0D3DE6" />
                                        <stop offset="1" stop-color="#0DE6CC" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dealer Shops -->


            <!-- Our team -->
            <section class="content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 me-auto">
                            <div class="section-head">
                                <h6 class="text-primary sub-title">TEAM</h6>
                                <h2 class="title">Our teams</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea.</p>
                        </div>
                    </div>
                    <div class="team-slider">
                        <div class="swiper-wrapper row">
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic1.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Tommy Hank</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic2.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Emilia Johnson</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic3.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Mark Steven</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic4.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Cindy Stark</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic5.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Wanda Hummels</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic6.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">David Lee</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic7.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">Franklin Mc. Good</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4">
                                <div class="dlab-team style-1 m-b40">
                                    <div class="dlab-media">
                                        <a href="javascript:void(0);"><img src="images/team/pic8.jpg"
                                                alt=""></a>
                                        <div class="overlay-bx">
                                            <div class="social-list style-2">
                                                <ul>
                                                    <li><a href="https://www.linkedin.com/"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://twitter.com/"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dlab-content">
                                        <h4 class="dlab-name">James Rodriguez</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  Our team -->


            <section class="content-inner">
                <div class="container">
                    <div class="row call-to-action-bx">
                        <div class="col-xl-5 col-lg-6 me-auto">
                            <div class="section-head">
                                <h2 class="title text-white">Have any question about us?</h2>
                            </div>
                            <a href="tel:224000221133" class="btn btn-white me-3 mb-2"><i
                                    class="fas fa-phone-volume me-sm-3 me-0 shake"></i><span
                                    class="d-sm-inline-block d-none">224 000 22 11 33</span></a>
                            <a href="contact-us.html" class="btn btn-outline-white effect-1  mb-2"><span>Contact
                                    Us</span></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-box">
                                <img src="images/about/pic5.jpg" class="main-img" alt="">
                                <img src="images/pattern/pattern7.png" class="pt-img move-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
        <!-- Footer -->
        <footer class="site-footer style-1" id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 ">
                            <div class="widget widget_about">
                                <div class="footer-logo">
                                    <img src="images/logo.png" alt="">
                                </div>
                                <h5 class="m-b20">Best car dealer in europe</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="social-list style-1">
                                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_categories p-l50">
                                <div class="widget-title">
                                    <h5 class="title">Quick Links</h5>
                                </div>
                                <ul>
                                    <li class="cat-item"><a href="about-us.html">About us</a></li>
                                    <li class="cat-item"><a href="contact-us.html">Contact us</a></li>
                                    <li class="cat-item"><a href="car-listing.html">Products</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Login</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_categories">
                                <div class="widget-title">
                                    <h5 class="title">Support</h5>
                                </div>
                                <ul>
                                    <li class="cat-item"><a href="javascript:void(0);">Affiliates</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Sitemap</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Cancelation Policy</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li class="cat-item"><a href="javascript:void(0);">Legal Disclaimer</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h5 class="title">Contact</h5>
                                </div>
                                <div class="icon-bx-wraper style-2 m-b20">
                                    <div class="icon-bx-sm radius">
                                        <span class="icon-cell">
                                            <svg width="23" height="25" viewBox="0 0 23 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.6675 23.3511H20.6854V1.97607C20.6854 1.35475 20.1578 0.851074 19.5068 0.851074H3.00684C2.35592 0.851074 1.82826 1.35475 1.82826 1.97607V23.3511H0.846122C0.520689 23.3511 0.256836 23.6029 0.256836 23.9136V24.8511H22.2568V23.9136C22.2568 23.6029 21.993 23.3511 21.6675 23.3511ZM6.54255 4.41357C6.54255 4.10293 6.8064 3.85107 7.13184 3.85107H9.09612C9.42155 3.85107 9.68541 4.10293 9.68541 4.41357V6.28857C9.68541 6.59922 9.42155 6.85107 9.09612 6.85107H7.13184C6.8064 6.85107 6.54255 6.59922 6.54255 6.28857V4.41357ZM6.54255 8.91357C6.54255 8.60293 6.8064 8.35107 7.13184 8.35107H9.09612C9.42155 8.35107 9.68541 8.60293 9.68541 8.91357V10.7886C9.68541 11.0992 9.42155 11.3511 9.09612 11.3511H7.13184C6.8064 11.3511 6.54255 11.0992 6.54255 10.7886V8.91357ZM9.09612 15.8511H7.13184C6.8064 15.8511 6.54255 15.5992 6.54255 15.2886V13.4136C6.54255 13.1029 6.8064 12.8511 7.13184 12.8511H9.09612C9.42155 12.8511 9.68541 13.1029 9.68541 13.4136V15.2886C9.68541 15.5992 9.42155 15.8511 9.09612 15.8511ZM12.8283 23.3511H9.68541V19.4136C9.68541 19.1029 9.94926 18.8511 10.2747 18.8511H12.239C12.5644 18.8511 12.8283 19.1029 12.8283 19.4136V23.3511ZM15.9711 15.2886C15.9711 15.5992 15.7073 15.8511 15.3818 15.8511H13.4176C13.0921 15.8511 12.8283 15.5992 12.8283 15.2886V13.4136C12.8283 13.1029 13.0921 12.8511 13.4176 12.8511H15.3818C15.7073 12.8511 15.9711 13.1029 15.9711 13.4136V15.2886ZM15.9711 10.7886C15.9711 11.0992 15.7073 11.3511 15.3818 11.3511H13.4176C13.0921 11.3511 12.8283 11.0992 12.8283 10.7886V8.91357C12.8283 8.60293 13.0921 8.35107 13.4176 8.35107H15.3818C15.7073 8.35107 15.9711 8.60293 15.9711 8.91357V10.7886ZM15.9711 6.28857C15.9711 6.59922 15.7073 6.85107 15.3818 6.85107H13.4176C13.0921 6.85107 12.8283 6.59922 12.8283 6.28857V4.41357C12.8283 4.10293 13.0921 3.85107 13.4176 3.85107H15.3818C15.7073 3.85107 15.9711 4.10293 15.9711 4.41357V6.28857Z"
                                                    fill="white"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <p>77 Highfield Road London N36 7SB</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper style-2">
                                    <div class="icon-bx-sm radius">
                                        <span class="icon-cell">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.3722 16.9589L16.5597 14.7089C16.3541 14.6134 16.1257 14.5932 15.9087 14.6515C15.6917 14.7099 15.4979 14.8435 15.3566 15.0324L13.2254 17.873C9.88055 16.1526 7.18876 13.2161 5.61172 9.56722L8.21562 7.24222C8.38908 7.08832 8.51185 6.87696 8.56535 6.64014C8.61884 6.40331 8.60015 6.15392 8.51211 5.92972L6.44961 0.67973C6.35298 0.438047 6.18207 0.240721 5.96636 0.121777C5.75065 0.00283366 5.50366 -0.0302721 5.26797 0.0281687L0.799219 1.15317C0.571987 1.21041 0.36925 1.34999 0.224097 1.54911C0.0789444 1.74824 -5.2345e-05 1.99516 2.60228e-08 2.24957C2.60228e-08 14.273 8.9332 23.9995 19.9375 23.9995C20.1708 23.9997 20.3972 23.9136 20.5799 23.7552C20.7625 23.5969 20.8905 23.3756 20.943 23.1277L21.9742 18.2527C22.0274 17.9943 21.9965 17.7238 21.8866 17.4877C21.7767 17.2515 21.5948 17.0646 21.3722 16.9589Z"
                                                    fill="white"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <p>412 444 1124</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center fb-inner spno">
                        <div class="col-12 text-center">
                            <span class="copyright-text">Copyright © 2022 <a href="https://dexignlab.com/"
                                    class="text-primary" target="_blank">DexignLabs</a> All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="js/jquery.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="vendor/switcher/switcher.js"></script>
    <!-- SWITCHER -->
    <script src="vendor/rangeslider/rangeslider.js"></script>
    <!-- RANGESLIDER -->
    <script src="vendor/magnific-popup/magnific-popup.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="vendor/counter/waypoints-min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="vendor/counter/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <!-- LIGHTGALLERY -->
    <script src="vendor/splitting/dist/splitting.min.js"></script>
    <!-- Splitting -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <!-- SWIPER -->
    <script src="vendor/aos/aos.js"></script>
    <!-- AOS -->
    <script src="js/dlab.carousel.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="js/dlab.ajax.js"></script>
    <!-- AJAX -->
    <script src="js/custom.min.js"></script>
    <!-- CUSTOM JS -->
</body>

</html>
