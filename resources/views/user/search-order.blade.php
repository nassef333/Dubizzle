<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('user.static.head')
<body>

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




    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Track Your Order</h2>
                        <p>Powerful and efficient computers designed to optimize your productivity with advanced features and lightning-fast performance.</p>
                    </div>
                </div>
                <div class="col-12">
                    <form class="m-5" action="{{ route('tracking.order', ['id' => '__tracking_number__']) }}" method="POST" class="text-center">
                        @csrf
                        <div class="main-menu-search">
                            <div class="navbar-search search-style-5">
                                <div class="search-input mx-auto" style="display: flex; justify-content: center; align-items: center;">
                                    <input name="tracking_number" class="form-control text-center text-center-input" type="text" placeholder="Enter Tracking Number." value="{{ request()->input('tracking_number') }}" style="width: 70%;">
                                    <button style="background: #0167f3; color:white; padding:7px; border:none; margin-left: 10px;" type="submit"><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    @if(isset($error))
                        <div class="alert alert-danger text-center">{{ $error }}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>






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


</body>

</html>
