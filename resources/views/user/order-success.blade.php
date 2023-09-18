/<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ordered Placed Successfully</title>
    <meta name="description" content />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/user/images/favicon.svg" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/user/css/A.bootstrap.min.css+LineIcons.3.0.css,Mcc.kvbj5TfNfN.css.pagespeed.cf.IUMPrtes4_.css" />
    <link rel="stylesheet" href="/assets/user/css/A.main.css.pagespeed.cf.wZnWV-GMUP.css" />
</head>

<body><noscript><meta HTTP-EQUIV="refresh" content="0;url='https://demo.graygrids.com/themes/shopgrids/mail-success.html?PageSpeed=noscript'" /><style><!--table,div,span,font,p{display:none} --></style><div style="display:block">Please click <a href="https://demo.graygrids.com/themes/shopgrids/mail-success.html?PageSpeed=noscript">here</a> if you are not redirected within a few seconds.</div></noscript>
    <!--[if lte IE 9]>
        <p class="browserupgrade">
          You are using an <strong>outdated</strong> browser. Please
          <a href="https://browsehappy.com/">upgrade your browser</a> to improve
          your experience and security.
        </p>
      <![endif]-->

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div class="maill-success">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="success-content">
                        <i class="lni lni-shopping-basket"></i>
                        <h2>Order Placed Successfully!</h2>
                        <p>Thank you for placing your order.</p>
                        <h5>Tracking Number: <span>{{ $tracking_number }}</span></h5>
                        <h5>Total Price: <span>{{ $total }}</span></h5>
                        <br>
                        <div class="button">
                            <a href="/" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/user/js/bootstrap.min.js.pagespeed.jm.R6pdwTt0pj.js"></script>
    <script>
        localStorage.removeItem('cartItems');

        window.onload = function() {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }
    </script>
</body>

</html>
