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
    /* Add your custom CSS styling here */

    .question {
      font-weight: bold;
      margin-top: 20px;
    }

    .answer {
      margin-bottom: 30px;
    }
  </style>
        <!-- Similar Products -->
        <section class="trending-product section" style="margin-top: 12px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>FAQ</h2>
                            <p>Al-Mutamyzon Computers is a trusted computer shop located in Dubai. We specialize in providing a wide range of high-quality computers, laptops, gaming PCs, and accessories to meet the diverse needs of our customers.</p>

                            <p>At Al-Mutamyzon Computers, we understand the importance of customization. That's why we offer the option to customize the specifications of your computer to ensure it perfectly suits your requirements. Our knowledgeable staff is always ready to assist you in selecting the right components to build your dream computer.</p>

                            <p>We take pride in our excellent customer service. Our friendly and experienced team is available to answer your questions, provide technical support, and guide you through the entire purchasing process. You can reach us at <a href="tel:+971585197407">+971 58 519 7407</a> or email us at <a href="mailto:al-mutamyzon@gmail.com">al-mutamyzon@gmail.com</a>.</p>

                            <p>We value your convenience, which is why we have flexible store hours. From Monday to Thursday, our store is open from 9:00 AM to 12:00 PM. On Fridays, we are open from 2:00 PM to 12:00 AM. And on Saturdays, you can visit us from 9:00 AM to 12:00 AM. Please note that Sundays are our weekly day off.</p>

                            <p>We strive to deliver a seamless shopping experience, both in-store and online. Our website provides detailed product information, easy navigation, and secure online transactions. For online orders, we offer shipping services to ensure your purchase reaches your doorstep safely and on time.</p>

                            <p>At Al-Mutamyzon Computers, we are passionate about technology and committed to providing reliable products and exceptional service. Visit us today or explore our website to discover the perfect computer and accessories that will enhance your computing experience.</p>

                            <p>Thank you for choosing Al-Mutamyzon Computers!</p>

                            <p>Please Note: Sunday is the weekly day off for our store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Similar Productss -->


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
