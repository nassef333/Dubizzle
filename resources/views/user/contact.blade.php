<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us - ShopGrids Bootstrap 5 eCommerce HTML Template.</title>
    <meta name="description" content />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/user//images/favicon.svg" />

    <link rel="stylesheet" href="/assets/user//css/A.bootstrap.min.css+LineIcons.3.0.css+tiny-slider.css+glightbox.min.css,Mcc.OzR7N5fb_Y.css.pagespeed.cf.svKjl5Nf5n.css" />
    <link rel="stylesheet" href="/assets/user//css/A.main.css.pagespeed.cf.wZnWV-GMUP.css" />
    <script data-pagespeed-no-defer>
        (function() {
            function f(a, b, d) {
                if (a.addEventListener) a.addEventListener(b, d, !1);
                else if (a.attachEvent) a.attachEvent("on" + b, d);
                else {
                    var c = a["on" + b];
                    a["on" + b] = function() {
                        d.call(this);
                        c && c.call(this)
                    }
                }
            };
            window.pagespeed = window.pagespeed || {};
            var g = window.pagespeed;

            function k(a) {
                this.g = [];
                this.f = 0;
                this.h = !1;
                this.j = a;
                this.i = null;
                this.l = 0;
                this.b = !1;
                this.a = 0
            }

            function l(a, b) {
                var d = b.getAttribute("data-pagespeed-lazy-position");
                if (d) return parseInt(d, 0);
                var d = b.offsetTop,
                    c = b.offsetParent;
                c && (d += l(a, c));
                d = Math.max(d, 0);
                b.setAttribute("data-pagespeed-lazy-position", d);
                return d
            }

            function m(a, b) {
                var d, c, e;
                if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
                a: if (b.currentStyle) c = b.currentStyle.position;
                    else {
                        if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView.getComputedStyle(b, null))) {
                            c = c.getPropertyValue("position");
                            break a
                        }
                        c = b.style && b.style.position ? b.style.position : ""
                    }
                if ("relative" == c) return !0;
                e = 0;
                "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body.scrollTop ? e = document.body.scrollTop : document.documentElement &&
                    document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
                d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                c = e;
                e += d;
                var h = b.getBoundingClientRect();
                h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
                return e <= a.f && 0 <= c + a.f
            }
            k.prototype.m = function(a) {
                p(a);
                var b = this;
                window.setTimeout(function() {
                    var d = a.getAttribute("data-pagespeed-lazy-src");
                    if (d)
                        if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                            var c = a.parentNode,
                                e = a.nextSibling;
                            c && c.removeChild(a);
                            a.c && (a.getAttribute = a.c);
                            a.removeAttribute("onload");
                            a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function() {
                                g.CriticalImages.checkImageForCriticality(this);
                                b.b && (b.a--, b.a || g.CriticalImages.checkCriticalImages())
                            });
                            a.removeAttribute("data-pagespeed-lazy-src");
                            a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                            c && c.insertBefore(a, e);
                            if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a.removeAttribute("data-pagespeed-lazy-srcset");
                            a.src = d
                        } else b.g.push(a)
                }, 0)
            };
            k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
            k.prototype.s = function() {
                this.h = !0;
                q(this)
            };
            k.prototype.loadAllImages = k.prototype.s;

            function q(a) {
                var b = a.g,
                    d = b.length;
                a.g = [];
                for (var c = 0; c < d; ++c) a.m(b[c])
            }

            function t(a, b) {
                return a.a ? null != a.a(b) : null != a.getAttribute(b)
            }
            k.prototype.u = function() {
                for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d, "data-pagespeed-lazy-src") && p(d)
            };
            k.prototype.overrideAttributeFunctions = k.prototype.u;

            function p(a) {
                t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function(a) {
                    "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a = "data-pagespeed-lazy-src");
                    return this.c(a)
                }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
            }
            g.o = function(a, b) {
                function d() {
                    if (!(c.b && a || c.i)) {
                        var b = 200;
                        200 < (new Date).getTime() - c.l && (b = 0);
                        c.i = window.setTimeout(function() {
                            c.l = (new Date).getTime();
                            q(c);
                            c.i = null
                        }, b)
                    }
                }
                var c = new k(b);
                g.lazyLoadImages = c;
                f(window, "load", function() {
                    c.b = !0;
                    c.h = a;
                    c.f = 200;
                    if (g.CriticalImages) {
                        for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) - 1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
                        c.a = b;
                        c.a || g.CriticalImages.checkCriticalImages()
                    }
                    q(c)
                });
                b.indexOf("data") && ((new Image).src = b);
                f(window,
                    "scroll", d);
                f(window, "resize", d)
            };
            g.lazyLoadInit = g.o;
        })();

        pagespeed.lazyLoadInit(true, "/pagespeed_static/1.JiBnMqyl6S.gif");
    </script>
</head>

<body><noscript><meta HTTP-EQUIV="refresh" content="0;url='https://demo.graygrids.com/themes/shopgrids/contact.html?PageSpeed=noscript'" /><style><!--table,div,span,font,p{display:none} --></style><div style="display:block">Please click <a href="https://demo.graygrids.com/themes/shopgrids/contact.html?PageSpeed=noscript">here</a> if you are not redirected within a few seconds.</div></noscript>
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


    <header class="header navbar-area">

        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
<option value="0" selected>$ USD</option>
<option value="1">€ EURO</option>
<option value="2">$ CAD</option>
<option value="3">₹ INR</option>
<option value="4">¥ CNY</option>
<option value="5">৳ BDT</option>
</select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
<option value="0" selected>English</option>
<option value="1">Español</option>
<option value="2">Filipino</option>
<option value="3">Français</option>
<option value="4">العربية</option>
<option value="5">हिन्दी</option>
<option value="6">বাংলা</option>
</select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i> Hello
                            </div>
                            <ul class="user-login">
                                <li>
                                    <a href="login.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">

                        <a class="navbar-brand" href="index.html">
                            <script data-pagespeed-no-defer>
                                (function() {
                                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                            if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                            b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                        }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                        var m = k[l];
                                        m in h || (h[m] = {});
                                        h = h[m]
                                    }
                                    var n = k[k.length - 1],
                                        p = h[n],
                                        q = p ? p : function(b) {
                                            var c;
                                            if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                            c = this + "";
                                            if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                            b |= 0;
                                            for (var a = ""; b;)
                                                if (b & 1 && (a += c), b >>>= 1) c += c;
                                            return a
                                        };
                                    q != p && null != q && g(h, n, {
                                        configurable: !0,
                                        writable: !0,
                                        value: q
                                    });
                                    var t = this;

                                    function u(b, c) {
                                        var a = b.split("."),
                                            d = t;
                                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                    };

                                    function v(b) {
                                        var c = b.length;
                                        if (0 < c) {
                                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                            return a
                                        }
                                        return []
                                    };

                                    function w(b) {
                                        var c = window;
                                        if (c.addEventListener) c.addEventListener("load", b, !1);
                                        else if (c.attachEvent) c.attachEvent("onload", b);
                                        else {
                                            var a = c.onload;
                                            c.onload = function() {
                                                b.call(this);
                                                a && a.call(this)
                                            }
                                        }
                                    };
                                    var x;

                                    function y(b, c, a, d, e) {
                                        this.h = b;
                                        this.j = c;
                                        this.l = a;
                                        this.f = e;
                                        this.g = {
                                            height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                        };
                                        this.i = d;
                                        this.b = {};
                                        this.a = [];
                                        this.c = {}
                                    }

                                    function z(b, c) {
                                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                        if (a = e && !(e in b.c))
                                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                            else {
                                                d = c.getBoundingClientRect();
                                                var f = document.body;
                                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                                f = a.toString() + "," + d;
                                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                            }
                                        a && (b.a.push(e), b.c[e] = !0)
                                    }
                                    y.prototype.checkImageForCriticality = function(b) {
                                        b.getBoundingClientRect && z(this, b)
                                    };
                                    u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                        x.checkImageForCriticality(b)
                                    });
                                    u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                        A(x)
                                    });

                                    function A(b) {
                                        b.b = {};
                                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                        if (a.length && a[0].getBoundingClientRect) {
                                            for (d = 0; c = a[d]; ++d) z(b, c);
                                            a = "oh=" + b.l;
                                            b.f && (a += "&n=" + b.f);
                                            if (c = !!b.a.length)
                                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                    131072 >= a.length + e.length && (a += e)
                                                }
                                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                            C = a;
                                            if (c) {
                                                d = b.h;
                                                b = b.j;
                                                var f;
                                                if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                                else if (window.ActiveXObject) try {
                                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                                } catch (r) {
                                                    try {
                                                        f = new ActiveXObject("Microsoft.XMLHTTP")
                                                    } catch (D) {}
                                                }
                                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                            }
                                        }
                                    }

                                    function B() {
                                        var b = {},
                                            c;
                                        c = document.getElementsByTagName("IMG");
                                        if (!c.length) return {};
                                        var a = c[0];
                                        if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                        for (var d = 0; a = c[d]; ++d) {
                                            var e = a.getAttribute("data-pagespeed-url-hash");
                                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                                rw: a.width,
                                                rh: a.height,
                                                ow: a.naturalWidth,
                                                oh: a.naturalHeight
                                            })
                                        }
                                        return b
                                    }
                                    var C = "";
                                    u("pagespeed.CriticalImages.getBeaconData", function() {
                                        return C
                                    });
                                    u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                        var r = new y(b, c, a, e, f);
                                        x = r;
                                        d && w(function() {
                                            window.setTimeout(function() {
                                                A(r)
                                            }, 0)
                                        })
                                    });
                                })();
                                pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon', 'https://demo.graygrids.com/themes/shopgrids/contact.html', 'vgO0_CsSLD', false, false, 'iryAqvH7yAg');
                            </script><img src="/assets/user//images/logo/logo.svg" alt="Logo" data-pagespeed-url-hash="3224337811" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>

                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">

                        <div class="main-menu-search">

                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
<option selected>All</option>
<option value="1">option 01</option>
<option value="2">option 02</option>
<option value="3">option 03</option>
<option value="4">option 04</option>
<option value="5">option 05</option>
</select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Hotline:
                                    <span>(+100) 123 456 7890</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)">
<i class="lni lni-heart"></i>
<span class="total-items">0</span>
</a>
                                </div>
                                <div class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
<i class="lni lni-cart"></i>
<span class="total-items">2</span>
</a>

                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span>2 Items</span>
                                            <a href="cart.html">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html">
                                                        <script data-pagespeed-no-defer>
                                                            window['pagespeed'] = window['pagespeed'] || {};
                                                            var pagespeed = window['pagespeed'];
                                                            pagespeed.switchToHighResAndMaybeBeacon = function(elem) {
                                                                setTimeout(function() {
                                                                    elem.onload = null;
                                                                    var srcset = elem.getAttribute('data-pagespeed-high-res-srcset');
                                                                    if (srcset) {
                                                                        elem.srcset = srcset;
                                                                    }
                                                                    elem.src = elem.getAttribute('data-pagespeed-high-res-src');
                                                                    if (pagespeed.CriticalImages) {
                                                                        elem.onload = pagespeed.CriticalImages.checkImageForCriticality(elem);
                                                                    }
                                                                }, 0);
                                                            };
                                                        </script><img data-pagespeed-high-res-src="/assets/user//images/header/cart-items/xitem1.jpg.pagespeed.ic.1E0B4DtDEx.webp" alt="#" data-pagespeed-url-hash="1206967761" src="data:image/webp;base64,UklGRqQFAABXRUJQVlA4IJgFAACwQACdASpoAWgBP3G40mS0r7+pIDVZk/AuCWlu4XJ+QBnZ1yPvWYwDNLeObYem7ZINMPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7TPaZ7S64Ppr/zTHlWbewBb8y/mX8y/iMKTKhvHj4F9TnM+1Isv5l/MvmyxWtPnXFreTQgoOC9wXt+kU4bTIFHD0SRsi1wkiaWaEbLC64RndYDsMMyqULL+Zfy/H5Sy1qMaSIAf6bcsfqUnw86YgXt3a0kAXuCt3ReYr29eKe1tc26jbjg7iDKpp4Yz5H52dxj0M2hpcuRbdhL65oNaaHtFu4VYiM1KRW26FHF5wA0YgHoaPlb61oCFwyiN7r6m9l5nkPIX505gkoFhgZ1cqMjLQPUdGPSN5l/Mv8W+20IIoizYg7qP9hs9pago8NP6gG34qNYD0M2e0O+ZGEWhfuUBcj0Vc2mhCKjGefk79+QkOcWX8yxzfRq8jXC2D7FBqZhXB/mqk0RE1/C60EaZrvOe0z2mbAHllRWWkJavN2a1MA9Im0zrrUQRNRWdu5aw/QthOjnFl/MvmMnBkiDqqcRefqpG2HtM9pdQSDsKn7CMLN7XyNAL3Be4L3BeSs7KF5BCsqY/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/Mv5l/MrwAP7k1gAAALupH0ZUCEbpMUWuSJG7qDc/VpwP9XYHhnlTOkqgRCs3FSxCMMzkeLWeVNHU2fTSKVZ/FWkorl+THp3pkguUzKuYpw4y7BRUQPcUB1aPI0lc229G9KbeWW8Cm+/K929dDBhvhAI+0+GCeBeofjdAIbf0NbwgSa+ZqG+9zcJn8MlwghJP7sl3AZEQLlZWYJY69dx0ZunEusHlahdQbI6SjNBLEvDtnp75T+GYvnTZ+riXki7HErEKerBkLtNaBjFWaRCFFhqZXN8Ltl/2ANRKI5DyLdd048m1zEN7xAyZu0oyUqaZ6B0ZTxQ4ViJOxOD4Ub9W7frP97MsczAbftmBpkIfJIHZVeHm64tcsqtws25FrqcQBAc3ZvzO32masfPd6OyQ9CU7k1kO7w6AY9ICVYDGy5l2w8g1qXdOxUTkMlZJMmdcM0hEoqYR0H4KFEiQ9Yaj68/tPuU5/fXPJUh+C5/BWgCWFGeCDjpqdnBvtDTn8yZ1sEPBEwNH6lvvnc3m63lnuQjERTX1W82q/Oc9FBD5TMnPEHWP2LoJcNUMW7R9tXwjJ885e6ISdqnV/mxJWpMVCJR7WP8GxjTpukwzKtELPnilvT3LEtNiGuWqqaSf6azlYDdcRVBebMZLbCpUyII9dpA28VApDICzEbrfH3vzNZZGxZ87XzW3dyQB2OTFkkjHAKDBXTCHmuvsfoVA7zv+rzmWf5dbX4B97qTPv+rbYE1v/KbXGWHlSXerIGsD04fHacMM6Wj8q1RjvmxIigXh/I+UOyKaCEnZESPS2ugjiFt4mWt8mpQnJZR07uIRHBZoC/ZCmk4dMWwNhy5/C8HjpvB94XjyVwqGN94wP8dwZ3orYlGbv9n+5Apsrjiy+1KmaUnKAqyICQ4JYeKynx9EdIdqKK7otPXbVVxGh+z13j8k2nLE0S1MS7rzagAH2RgBPWjCA9Qff22JiN8OCouLV0+5Zo1RStwUmiGSatY7cf04MLdWCF5w8F2na3XWXb2b0tXL7egQGzPvGrJyUdxiEbm4xAVV423KnM1q0CFJ3tahADJWHwnKAZLeQpESx7OaBuokihUyA+IqjjyTrhEqN+liZjQeppUpx8l70Fq/JOw0p6RpitsiPgeDYAB+JZ8YoHzHeC/yZ6wtAmAhjXdxIwgXUyzKfs4Oz9XmXu5oIy8s7kOpcPAscwAAAAAAAAAA"
                                                            onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="product-details.html">
Apple Watch Series 6</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img data-pagespeed-high-res-src="/assets/user//images/header/cart-items/xitem2.jpg.pagespeed.ic.Ve3-9m9drO.webp" alt="#" data-pagespeed-url-hash="1501467682" src="data:image/webp;base64,UklGRvQEAABXRUJQVlA4IOgEAABQQwCdASpoAWgBP3G41mM0rzgxIZK5owAuCWlu4W5xG8oLkRiOre7Dog/X5YovyxRflii/LFF+WKL8sUX5YovyxRflii/LFF+WKL8sUX5YovyxRflii/LFF8wLewtNS7UednjK/xpYovyxRaJQBBLRJXMSwGf0oVpzWBXgwovyxRfLKwTwyjQ0A6cHUkMYf2JgMj2paSTx97zJndx3+NLFF+VuBNEKpMVe2cN9JmAwof9lV7ej4HDwLo54DlIGGM6BLFUIkfa25J2UevzPgwovnftKFS2TCggsBv0g5bMsm5YwWWHqc/4tyVibDXlA4ByqbDXXRrx5nNMtkxFoy+Ug2XGySYI4dwaq4RVfypaTcRZSETSwhRflcRq/xBhvnfm2RiwwxiqXZdK/2/RkfF6LdRz+NLFF+VxJAE2UeutBo/GENDmZSkVKWkcxajbeAWiZqvzPgwovo6ujgnjIXpxi9KzygoDXUxT9b92q4B3Nrx5nwYQAsJV60JFEhjWgzz1S2ZkoUDrPKovyxRawBDQZj2XTTeKi3yP+IfDffkb5YnA1L+NLFF+VxZuujXjvWiKPhjICBQMLS7kMNddGvF4tZlmhQSyl5Wfhp2C9vN8fBhRflbo3HQSp3BSELZDMyxIoQqZtC1SdKv/c+qr8b5IPUcc6tLFF+WKL8sUX5YovyxRflii/LFF+WKL8sUX5YovyxRflii/LFF+WKL8sUX5YovlAAP77lhAwzDVxMzF1wAAkFgJ/4vp7x38bVbH4dkt/6LQiBn8ODLdMnTvoTdiGMUKa9DHOGehDfPbU0ZsE0sSOzwjXTsstFFcDyDJQ94RaiaIb+wzGnTEcn3cAdn6pixFwEpWHVAr93oQaUlC77dIqkctTAeNTL3sXswmmMUbC36cQnJ2SDKhW5EExk5JGOSugOMBDnYcivqr/IZQax6g4fAcMIRDr5JA9uQX6l2KXPBquO1OgNiVJkPqeUFl+rYTbS8OBQ05cuLU+lGLWN7HUdxodL+ntT6hm6Daztb7JXA3oqLLVX6SjhS61lzH66AOrdPL89AGjE0nizRj/IBTOcGFkCu7MZ7IL3Ce6IA4X0fidXETP9C928WpgxJv/ae995oQB2L2xT6sFPA7jFcMnzS0NUYH/0ELJUlndakvQiB06kWxH+cHgDDeSviTyaHutKLUVMjzUszW+NAirpKsmXp7wvIrl4Sm0dJOu+flf3mPVV/R1HZswJhB/gawBDzbHOxMeXmhWgGrL+oXYEYA22i+GJg4n4q7jHA2joZ1oJv+v+BibjPZuN8Sh3jdOQV+Cnpf/dO9DFy2DYSJKoaICIqMDW0+XU6TIbeQc0m5iarxwAK3AaMQZRUbX4EOrNsyEEeHeH7Om3JzehpF04bM9d2HjRqtZHgC6aHNsAG5PgA9a5jQDWKj6I30DuWIZG9PzXdbhqYwugmtBnm+8Xp1df6wzHpIDYLyUKnBjagBraVEaX4e4qoYaN1dlKmhtkdHQr952J50IrZ1ubPwiE4cBwwBNST+HfKxkyOHOZnlIdB+0lYmw4SDCZ4lh6APjxbpA+ekT3cMjN10cU4WUyAM5HSvElN6sItS4kXWHq+tbj3U6Lqye/vDYLnqXzWgXKzRGY3ZN5oJ9a9EYL6IK1hqOHCj4k0Mr5PkBkOYbZWsmYAAAAAAAAA==" onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">$134.00</span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.html" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">

                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                            <ul class="sub-category">
                                <li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
                                    <ul class="inner-sub-category">
                                        <li><a href="product-grids.html">Digital Cameras</a></li>
                                        <li><a href="product-grids.html">Camcorders</a></li>
                                        <li><a href="product-grids.html">Camera Drones</a></li>
                                        <li><a href="product-grids.html">Smart Watches</a></li>
                                        <li><a href="product-grids.html">Headphones</a></li>
                                        <li><a href="product-grids.html">MP3 Players</a></li>
                                        <li><a href="product-grids.html">Microphones</a></li>
                                        <li><a href="product-grids.html">Chargers</a></li>
                                        <li><a href="product-grids.html">Batteries</a></li>
                                        <li><a href="product-grids.html">Cables & Adapters</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-grids.html">accessories</a></li>
                                <li><a href="product-grids.html">Televisions</a></li>
                                <li><a href="product-grids.html">best selling</a></li>
                                <li><a href="product-grids.html">top 100 offer</a></li>
                                <li><a href="product-grids.html">sunglass</a></li>
                                <li><a href="product-grids.html">watch</a></li>
                                <li><a href="product-grids.html">man’s product</a></li>
                                <li><a href="product-grids.html">Home Audio & Theater</a></li>
                                <li><a href="product-grids.html">Computers & Tablets </a></li>
                                <li><a href="product-grids.html">Video Games </a></li>
                                <li><a href="product-grids.html">Home Appliances </a></li>
                            </ul>
                        </div>


                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.html" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                            <li class="nav-item"><a href="faq.html">Faq</a></li>
                                            <li class="nav-item"><a href="login.html">Login</a></li>
                                            <li class="nav-item"><a href="register.html">Register</a></li>
                                            <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
                                            <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                                            <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                                            <li class="nav-item"><a href="cart.html">Cart</a></li>
                                            <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                            <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
Sibebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="active" aria-label="Toggle navigation">Contact
Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="nav-social">
                        <h5 class="title">Follow Us:</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </header>


    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-info-head">

                                <div class="single-info">
                                    <i class="lni lni-map"></i>
                                    <h3>Address</h3>
                                    <ul>
                                        <li>44 Shirley Ave. West Chicago,<br> IL 60185, USA.</li>
                                    </ul>
                                </div>


                                <div class="single-info">
                                    <i class="lni lni-phone"></i>
                                    <h3>Call us on</h3>
                                    <ul>
                                        <li><a href="tel:+18005554400">+1 800 555 44 00 (Toll free)</a></li>
                                        <li><a href="tel:+321556667890">+321 55 666 7890</a></li>
                                    </ul>
                                </div>


                                <div class="single-info">
                                    <i class="lni lni-envelope"></i>
                                    <h3>Mail at</h3>
                                    <ul>
                                        <li><a href="/cdn-cgi/l/email-protection#7b080e0b0b14090f3b0813140b1c09121f0855181416"><span class="__cf_email__" data-cfemail="14676164647b666054677c7b6473667d70673a777b79">[email&#160;protected]</span></a>
                                        </li>
                                        <li><a href="/cdn-cgi/l/email-protection#412220332424330132292e3126332825326f222e2c"><span class="__cf_email__" data-cfemail="5a393b283f3f281a2932352a3d28333e2974393537">[email&#160;protected]</span></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="contact-form-head">
                                <div class="form-main">
                                    <form class="form" method="post" action="/assets/user//mail/mail.php">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="name" type="text" placeholder="Your Name" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="subject" type="text" placeholder="Your Subject" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="email" type="email" placeholder="Your Email" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="phone" type="text" placeholder="Your Phone" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group message">
                                                    <textarea name="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">Submit Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html">
<img data-pagespeed-lazy-src="/assets/user//images/logo/white-logo.svg" alt="#" data-pagespeed-url-hash="664057475" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Subscribe to our Newsletter
                                    <span>Get all the latest information, Sales and Offers.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: +1 (900) 33 169 7720</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="/cdn-cgi/l/email-protection#74070104041b060034071c1b0413061d10075a171b19"><span class="__cf_email__" data-cfemail="4f3c3a3f3f203d3b0f3c27203f283d262b3c612c2022">[email&#160;protected]</span></a>
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-footer our-app">
                                <h3>Our Mobile App</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
<i class="lni lni-apple"></i>
<span class="small-title">Download on the</span>
<span class="big-title">App Store</span>
</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
<i class="lni lni-play-store"></i>
<span class="small-title">Download on the</span>
<span class="big-title">Google Play</span>
</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-footer f-link">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    <li><a href="javascript:void(0)">FAQs Page</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-footer f-link">
                                <h3>Shop Departments</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                    <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                    <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                    <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                    <li><a href="javascript:void(0)">Headphones</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img data-pagespeed-lazy-src="/assets/user//images/footer/xcredit-cards-footer.png.pagespeed.ic.RVF6lxHMmv.webp" alt="#" data-pagespeed-url-hash="2482565258" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" data-pagespeed-no-defer>
        pagespeed.lazyLoadImages.overrideAttributeFunctions();
    </script>
    <script src="/assets/user//js/bootstrap.min.js.pagespeed.jm.R6pdwTt0pj.js"></script>
    <script src="/assets/user//js/tiny-slider.js+glightbox.min.js+main.js.pagespeed.jc.MCgBCVbLAV.js"></script>
    <script>
        eval(mod_pagespeed_Zp_OOsHKoc);
    </script>
    <script>
        eval(mod_pagespeed_5TvwT_lz9K);
    </script>
    <script>
        eval(mod_pagespeed_uoja0BW_wo);
    </script>
</body>

</html>