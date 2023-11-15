<!DOCTYPE html>
<html lang="en">

@include('inc.head');

<body id="bg">
    {{-- <div id="loading-area" class="loading-page-1">
        <div class="spinner">
            <div class="ball"></div>
        </div>
    </div> --}}
    @include('inc.header')

    <div class="page-wraper">
        {{ $slot }}
        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- Footer -->
    @include('inc.footer')
    <!-- Footer End -->
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
    {{-- <script src="/assets/js/custom.min.js"></script> --}}

</body>

</html>
