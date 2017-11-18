<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/colors/blue.css')}}" id="colors">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

@include('includes.header')

@include('includes.topnav')

@include('includes.navbar')

@yield('content')

<div id="backtotop"><a href="#"></a></div>


<div id="footer">

    <!-- Container -->
    <div class="container">

        <div class="col-md-12">
            <div class="col-md-3">
                <img src="{{asset('images/logoXL.png')}}" alt="" class="margin-top-10 footer-logo"/>
                <p class="margin-top-15">Nulla facilisis feugiat magna, ut molestie metus hendrerit vitae. Vivamus tristique lectus at varius rutrum. Integer lobortis mauris non consectetur eleifend.</p>
            </div>

            <div class="col-md-3">

                <!-- Headline -->
                <h3 class="headline footer">Customer Service</h3>
                <span class="line"></span>
                <div class="clearfix"></div>

                <ul class="footer-links">
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Delivery & Returns</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>

            </div>

            <div class="col-md-3">

                <!-- Headline -->
                <h3 class="headline footer">My Account</h3>
                <span class="line"></span>
                <div class="clearfix"></div>

                <ul class="footer-links">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                </ul>

            </div>

            <div class="col-md-3">

                <!-- Headline -->
                <h3 class="headline footer">Newsletter</h3>
                <span class="line"></span>
                <div class="clearfix"></div>
                <p>Sign up to receive email updates on new product announcements, gift ideas, special promotions, sales and more.</p>

                <form action="#" method="get">
                    <button class="newsletter-btn" type="submit">Join</button>
                    <input class="newsletter" type="text" placeholder="mail@example.com" value=""/>
                </form>
            </div>
        </div>

    </div>
    <!-- Container / End -->

</div>

<div id="footer-bottom">

    <!-- Container -->
    <div class="container">

        <div class="eight columns">© Copyright 2017 by <a href="#">lost in space</a>. All Rights Reserved.</div>
        <div class="eight columns">
            <ul class="payment-icons">
                <li><img src="images/visa.png" alt="" /></li>
                <li><img src="images/mastercard.png" alt="" /></li>
                <li><img src="images/skrill.png" alt="" /></li>
                <li><img src="images/moneybookers.png" alt="" /></li>
                <li><img src="images/paypal.png" alt="" /></li>
            </ul>
        </div>

    </div>
    <!-- Container / End -->

</div>

<!-- Java Script
================================================== -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{asset('scripts/jquery.jpanelmenu.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.showbizpro.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.9/js/superfish.min.js"></script>
<script src="{{asset('scripts/jquery.pureparallax.js')}}"></script>
<script src="{{asset('scripts/jquery.pricefilter.js')}}"></script>
<script src="{{asset('scripts/jquery.selectric.min.js')}}"></script>
<script src="{{asset('scripts/jquery.royalslider.min.js')}}"></script>
<script src="{{asset('scripts/SelectBox.js')}}"></script>
<script src="{{asset('scripts/modernizr.custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
<script src="{{asset('scripts/jquery.tooltips.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
<script src="{{asset('scripts/puregrid.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stacktable.js/1.0.3/stacktable.min.js"></script>
<script src="{{asset('scripts/custom.js')}}"></script>