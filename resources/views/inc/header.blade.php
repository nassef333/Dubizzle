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

                         <li class="sub-menu-down"><a href="{{ route('cars.advanced-search-parts') }}">CAR PARTS</a>
                         </li>

                         <li class="sub-menu-down"><a href="{{ route('about') }}">ABOUT US</a>
                         </li>
                         @if (Auth::check())
                             <li class="sub-menu-down"><a href="{{ route('profile.edit') }}">PROFILE</a>
                             </li>
                         @endif

                         {{-- <li class="sub-menu-down"><a href="{{ route('contact') }}">CONTACT</a>
                         </li> --}}

                         <li class="sub-menu-down">
                             <div class="extra-cell">
                                 @if (Auth::check())
                                     <form action="/logout" method="POST">
                                         @csrf
                                         <button type="submit" class="btn btn-dark" style="margin-left: 5px;"
                                             name="" id="">LOGOUT <i
                                                 class="fa-solid fa-right-from-bracket" style="margin-left: 10px"></i>
                                     </form>
                                 @else
                                     <div>
                                         <a href="/login" class="btn btn-primary light shadow-none effect-1"><span
                                                 class="m-2">Login</span><span><i
                                                     class="fa-solid fa-arrow-right-to-bracket"></i></span>
                                         </a>
                                     </div>
                                 @endif
                             </div>
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
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to the navbar, backdrop, and the dropdown icon
        var navbar = document.getElementById('navbarNavDropdown');
        var backdrop = document.getElementById('navbarBackdrop');
        var dropdownIcon = document.querySelector('.navbar-toggler');


        // Close the navbar when clicking away (except the button)
        document.addEventListener('click', function(event) {
            if (navbar.classList.contains('show')) {
                bootstrap.Collapse.getInstance(navbar).hide();
            }
        });
    });
</script>
