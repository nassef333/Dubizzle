 <!-- Header -->
 <header class="site-header mo-left header style-1">

     <!-- Main Header -->
     <div class="sticky-header main-bar-wraper navbar-expand-lg">
         <div class="main-bar clearfix ">
             <div class="container clearfix">
                 <!-- Website Logo -->
                 <div class="logo-header mostion logo-dark">
                     <a href="{{ route('home') }}"><img src="/assets/images/logo-2.png" alt=""></a>
                 </div>
                 <!-- Nav Toggle Button -->
                 <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                     data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
                 <!-- Extra Nav -->
                 <div class="extra-nav">
                     <div class="extra-cell">
                         <a href="/assets/tel:224000221133"
                             class="btn btn-primary light phone-no shadow-none effect-1"><span><i
                                     class="fas fa-phone-volume shake"></i>224 000 22 11 33</span></a>
                     </div>
                 </div>
                 <!-- Extra Nav -->
                 <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                     <div class="logo-header">
                         <a href="/assets/index.html"><img src="/assets/images/logo-2.png" alt=""></a>
                     </div>
                     <ul class="nav navbar-nav navbar navbar-left">
                         <li class="sub-menu-down"><a href="/">HOME</a>
                         </li>

                         <li class="sub-menu-down"><a href="{{ route('cars.advanced-search') }}">CARS</a>
                         </li>

                         <li class="sub-menu-down"><a href="/latest-cars">CAR PARTS</a>
                         </li>

                         <li class="sub-menu-down"><a href="{{ route('about') }}">ABOUT US</a>
                         </li>

                         <li class="sub-menu-down"><a href="{{ route('contact') }}">CONTACT</a>
                         </li>
                     </ul>
                     <div class="dlab-social-icon">
                         <ul>
                             <li><a class="fab fa-facebook-f" href="/assets/javascript:void(0);"></a></li>
                             <li><a class="fab fa-twitter" href="/assets/javascript:void(0);"></a></li>
                             <li><a class="fab fa-linkedin-in" href="/assets/javascript:void(0);"></a></li>
                             <li><a class="fab fa-instagram" href="/assets/javascript:void(0);"></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Main Header End -->
 </header>
 <!-- Header End -->
