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
                            <h5>1. What types of computers do you offer?</h5>
                            <div class="answer">
                              <p>We offer a wide range of computers, including desktops, laptops, gaming PCs, workstations, and all-in-one computers. Our selection includes various brands, models, and configurations to cater to different needs and budgets.</p>
                            </div>

                            <h5>2. Can I customize the specifications of my computer?</h5>
                            <div class="answer">
                              <p>Yes, we provide the option to customize the specifications of your computer. You can choose the processor, memory, storage, graphics card, and other components based on your requirements. Our knowledgeable staff can assist you in selecting the right components to build your ideal computer.</p>
                            </div>

                            <!-- Repeat the above structure for the remaining FAQs -->

                            <h5>3. Do you offer warranty on your computers?</h5>
                            <div class="answer">
                              <p>Yes, we provide warranties on our computers. The warranty duration and coverage may vary depending on the brand and model. Our staff can provide you with detailed information about the warranty terms for the specific computer you are interested in.</p>
                            </div>

                            <h5>4. Do you offer computer repair services?</h5>
                            <div class="answer">
                              <p>Yes, we offer computer repair services for both hardware and software issues. Our experienced technicians can diagnose and resolve various problems, including hardware replacements, software troubleshooting, virus removal, and data recovery. Feel free to bring your computer to our store for an assessment.</p>
                            </div>

                            <h5>5. Can I trade in my old computer for a new one?</h5>
                            <div class="answer">
                              <p>Yes, we offer trade-in programs for old computers. Bring your old computer to our store, and our team will evaluate its condition and specifications. Based on the assessment, we will provide you with a trade-in value that can be applied towards the purchase of a new computer from our shop.</p>
                            </div>

                            <h5>6. Do you offer financing options for computer purchases?</h5>
                            <div class="answer">
                              <p>Yes, we offer financing options for computer purchases. We understand that buying a computer can be a significant investment, and we provide flexible financing plans to suit your budget. Our staff can provide you with more details about the available financing options.</p>
                            </div>

                            <h5>7. Can I order computer accessories and peripherals from your shop?</h5>
                            <div class="answer">
                              <p>Absolutely! In addition to computers, we offer a wide range of computer accessories and peripherals such as monitors, keyboards, mice, printers, speakers, and more. You can find various brands and models to enhance your computing experience.</p>
                            </div>

                            <h5>8. Do you provide technical support for the computers purchased from your shop?</h5>
                            <div class="answer">
                              <p>Yes, we offer technical support for the computers purchased from our shop. If you encounter any issues or have questions regarding your computer, our knowledgeable staff is available to assist you. You can reach out to us via phone, email, or by visiting our store.</p>
                            </div>

                            <h5>9. What payment methods do you accept?</h5>
                            <div class="answer">
                              <p>We accept various payment methods, including credit cards, debit cards, cash, and in some cases, mobile payment options. Please note that accepted payment methods may vary, and our staff can provide you with specific information based on your location and the type of transaction.</p>
                            </div>

                            <h5>10. Do you offer shipping services for online purchases?</h5>
                            <div class="answer">
                              <p>Yes, we offer shipping services for online purchases. If you prefer to have your computer or accessories delivered to your doorstep, we can arrange for secure and timely shipping. Shipping options, costs, and estimated delivery times can be provided during the online checkout process.</p>
                            </div>
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
