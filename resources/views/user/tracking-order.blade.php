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

<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

.card {
position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 1px solid rgba(0, 0, 0, 0.1);
border-radius: 0.10rem
}
.card-header:first-child {
border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}
.card-header {
padding: 0.75rem 1.25rem;
margin-bottom: 0;
background-color: #fff;
border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}
.track {
position: relative;
background-color: #ddd;
height: 7px;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
margin-bottom: 60px;
margin-top: 50px
}
.track .step {
-webkit-box-flex: 1;
-ms-flex-positive: 1;
flex-grow: 1;
width: 25%;
margin-top: -18px;
text-align: center;
position: relative
}
.track .step.active:before {
background: #0167f3
}
.track .step::before {
height: 7px;
position: absolute;
content: "";
width: 100%;
left: 0;
top: 18px
}
.track .step.active .icon {
background: #0167f3;
color: #fff
}
.track .icon {
display: inline-block;
width: 40px;
height: 40px;
line-height: 40px;
position: relative;
border-radius: 100%;
background: #ddd
}
.track .step.active .text {
font-weight: 400;
color: #000
}
.track .text {
display: block;
margin-top: 7px
}
.itemside {
position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
width: 100%
}
.itemside .aside {
position: relative;
-ms-flex-negative: 0;
flex-shrink: 0
}
.img-sm {
width: 80px;
height: 80px;
padding: 7px
}
ul.row,
ul.row-sm {
list-style: none;
padding: 0
}
.itemside .info {
padding-left: 15px;
padding-right: 7px
}
.itemside .title {
display: block;
margin-bottom: 5px;
color: #212529
}
p {
margin-top: 0;
margin-bottom: 1rem
}
.btn-warning {
color: #ffffff;
background-color: #0167f3;
border-color: #0167f3;
border-radius: 1px
}
.btn-warning:hover {
color: #ffffff;
background-color: #0167f3;
border-color: #0167f3;
border-radius: 1px
}
</style>

    <div class="container mt-5 mb-5">
        <article class="card">
        <header class="card-header"> My Orders / Tracking </header>
        <div class="card-body">
        <article class="card">
        <div class="card-body row">
        <div class="col"> <strong>Estimated Delivery time:</strong> <br>{{ $order->created_at }}</div>
        <div class="col"> <strong>Shipping BY:</strong> <br> Al-Mutamyzon | <i class="fa fa-phone"></i> +971 58 519 7407 </div>
        <div class="col"> <strong>Status:</strong> <br> {{ $order->status }} </div>
        <div class="col"> <strong>Tracking Number :</strong> <br> #{{ $order->tracking_number }} </div>
        </div>
        </article>
        <div class="track">
        <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
        <div class="step
            @if($order->status == "delivered" || $order->status == "shipped")
                active
            @endif
        ">
        <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
        <div class="step
            @if($order->status == "delivered")
                active
            @endif
        "> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
        </div>
        <hr>
        <ul class="row">


        @foreach ($order->products as $product)
            <li class="col-md-4">
                <figure class="itemside mb-3">
                    @php
                        $images = explode(",", $product->image);
                    @endphp
                    <div class="aside">
                        <img src="{{ asset("storage/".$images[0])}}" class="img-sm border"></div>
                    <figcaption class="info align-self-center">
                        <p class="title">{{ $product->name }} <br> Quantity: {{ $product->pivot->quantity; }} </p> <span class="text-muted"> {{ $product->price }} </span>
                    </figcaption>
                </figure>
            </li>
        @endforeach


        </ul>
        <hr>
        <a href="/" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to Home</a>
        </div>
        </article>
        </div>




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
