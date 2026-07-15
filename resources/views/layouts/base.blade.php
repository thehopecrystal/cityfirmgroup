<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1"
    />
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$settings->site_name}}- Your New Favorite Bank; credit cards, mortgages, commercial banking, auto loans, investing & retirement planning, checking and business banking.">
    <meta name="keywords" content="{{$settings->site_name}}">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$settings->site_name}}- Your New Favorite Bank">
    <meta name="image" property="og:image" content="{{ asset('/public/' . $settings->favicon) }}">
    <meta property="og:site_name" content="{{$settings->site_name}}- Your New Favorite Bank">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="{{$settings->site_name}}- Your New Favorite Bank; credit cards, mortgages, commercial banking, auto loans, investing & retirement planning, checking and business banking.">
    <meta name="twitter:title" content="{{$settings->site_name}}- Your New Favorite Bank">
    <meta name="twitter:description" content="{{$settings->site_name}}- Your New Favorite Bank; credit cards, mortgages, commercial banking, auto loans, investing & retirement planning, checking and business banking.">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <meta name="currency" content="$">
    <!-- Title -->
    <title>{{$settings->site_name}}- Your New Favorite Bank </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/' . $settings->favicon) }}" />
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Onest:wght@100..900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap Css -->
    <link href="temp/custom/assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <!-- SlickNav Css -->
    <link href="temp/custom/assets/css/slicknav.min.css" rel="stylesheet" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="temp/custom/assets/css/swiper-bundle.min.css" />
    <!-- Font Awesome Icon Css-->
    <link href="temp/custom/assets/css/all.css" rel="stylesheet" media="screen" />
    <!-- Animated Css -->
    <link href="temp/custom/assets/css/animate.css" rel="stylesheet" />
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="temp/custom/assets/css/magnific-popup.css" />
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="temp/custom/assets/css/mousecursor.css" />
    <!-- Main Custom Css -->
    <link href="temp/custom/assets/css/custom.css" rel="stylesheet" media="screen" />
  </head>  <body>


    <!-- Preloader Start -->
    <div class="preloader">
      <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="temp/custom/assets/images/loader.svg" alt="" /></div>
      </div>
    </div>
    <!-- Preloader End --><!-- Topbar Section Start -->
<div class="topbar">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
        <!-- Topbar Information Content Start -->
        <div class="topbar-info-content">
            <p>
                <img src="temp/custom/assets/images/icon-topbar-info.svg" alt="" />
                World class service from your true international community bank
            </p>
        </div>
        <!-- Topbar Information Content End -->
        </div>
    </div>
    </div>
</div>
<!-- Topbar Section End --><!-- Header Start -->
    <header class="main-header">
      <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <!-- Logo Start -->
            <a class="navbar-brand" href="/">
              <img src="{{ asset('/public/' . $settings->logo) }}" width="140px" alt="Logo" />
            </a>
            <!-- Logo End -->

            <!-- Main Menu Start -->
            <div class="collapse navbar-collapse main-menu">
              <div class="nav-menu-wrapper">
                <ul class="navbar-nav mr-auto" id="menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="private">Personal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cooperate">Cooperate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="insurance">Insurance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mortgages">Mortgages</a>
                  </li>
                  <li class="nav-item submenu">
                    <a class="nav-link" href="#">Sefton Savings</a>
                    <ul>
                      <li class="nav-item">
                        <a class="nav-link" href="savings">Savings</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="loans">Business Loans</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cards">Credit-Cards</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="privacy">Privacy-Policy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="terms">Terms Of Use</a>
                      </li>

                    </ul>
                  </li>
                </ul>
              </div>
              <!-- Header Btn Start -->
              <div class="header-btn d-inline-flex">
                <a href="login" class="btn-login">login</a>
                <a href="register" class="btn-default btn-signup">Open An Account</a>
              </div>
              <!-- Header Btn End -->
            </div>
            <!-- Main Menu End -->
            <div class="navbar-toggle"></div>
          </div>
        </nav>
        <div class="responsive-menu"></div>
      </div>
    </header>
    <!-- Header End -->
     @yield('content')

  <!-- Footer Start -->
    <footer class="main-footer bg-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- About Footer Start -->
            <div class="about-footer">
              <!-- Footer Logo Start -->
              <div class="footer-logo">
                <img src="{{ asset('/public/' . $settings->logo) }}" width="200px" alt="" />
                <p class="text-white mt-2 p-2">
                  Our objective is to be a primary contributing member of the diverse communities of Uptown, Chinatown, Des Plaines, Port Jervis (NY), Stone Park, Wilmette and their neighboring communities. Our goal is to serve their consumer, commercial and retail needs while serving all ethnic backgrounds. By offering a varied staff of officers and employees we strive to provide services in related languages in a friendly, efficient and personal manner. Soundness, service and integrity are paramount.
                </p>
              </div>
              <!-- Footer Logo End -->
            </div>
            <!-- About Footer End -->
          </div>



          <div class="col-lg-2 col-md-3 col-6">
            <!-- Footer Links Start -->
            <div class="footer-links">
              <h3>solutions</h3>
              <ul>
                <li><a href="register">Quick Account Opening</a></li>
                <li><a href="contact">Contact Us</a></li>
                <!--<li><a href="faqs">Frequently Asked Questions  </a></li>-->
                <li><a href="terms">Terms of Service</a></li>
              </ul>
            </div>
            <!-- Footer Links End -->
          </div>

          <div class="col-lg-2 col-md-3 col-6">
            <!-- Footer Links Start -->
            <div class="footer-links">
              <h3>Loans & Insurance</h3>
              <ul>
                <li><a href="loans">Business Loan</a></li>
                <li><a href="loans">Automobile Refinancing</a></li>
                <li><a href="maortgage">Mortgage Plans</a></li>
                <li><a href="insurance">Core Insurance Program</a></li>
              </ul>
            </div>
            <!-- Footer Links End -->
          </div>

          <div class="col-lg-2 col-md-3 col-6">
            <!-- Footer Links Start -->
            <div class="footer-links">
              <h3>Contact Us</h3>
              <ul>
                <li>
                  <p class="text-white">
                    <a href="#" class="mx-2"><i class="fa fa-map-marker"></i></a>
                  {{ $settings->address }}               </p>
                </li>
                <li>
                  <p class="text-white">
                    <a href="#" class="mx-2"><i class="fa fa-envelope"></i></a>
                    <a href="#"><span >{{$settings->contact_email}}</span></a>
                  </p>
                </li>


              </ul>
            </div>
            <!-- Footer Links End -->
          </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <!-- Footer Copyright Start -->
              <div class="footer-copyright-text">
                <p>Copyright © 2025 All Rights Reserved.</p>
              </div>
              <!-- Footer Copyright End -->
            </div>

            <div class="col-lg-6 col-md-6">
              <!-- Footer Social Link Start -->
              <div class="footer-social-links">
                <ul>
                  <li>
                    <a href="#">  </i></a>
                  </li>
                  <li>
                    <a href="#">  </i></a>
                  </li>
                  <li>
                    <a href="#">  </i></a>
                  </li>
                </ul>
              </div>
              <!-- Footer Social Link End -->
            </div>
          </div>
        </div>
        <!-- Footer Copyright Section End -->
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>7
    <script src="temp/custom/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="temp/custom/assets/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="temp/custom/assets/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="temp/custom/assets/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="temp/custom/assets/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="temp/custom/assets/js/jquery.waypoints.min.js"></script>
    <script src="temp/custom/assets/js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
    <script src="temp/custom/assets/js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="temp/custom/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="temp/custom/assets/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="temp/custom/assets/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="temp/custom/assets/js/gsap.min.js"></script>
    <script src="temp/custom/assets/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="temp/custom/assets/js/SplitText.js"></script>
    <script src="temp/custom/assets/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="temp/custom/assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="temp/custom/assets/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="temp/custom/assets/js/function.js"></script>
    <script src="temp/custom/assets/js/theme-panel.js"></script>


@include('layouts.livechat')
@if($settings->tido)
    <script src="//code.tidio.co/{{$settings->tido}}" async></script>
    @endif


    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","alt_flags":{"en":"usa"}}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

  </body>



</html>
