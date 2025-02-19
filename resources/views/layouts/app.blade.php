<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tour</title>
    <meta name="author" content="Heart Land Safaris">
    <meta name="description" content="Heart Land Safaris - Travel & Tour Booking Agency HTML Template">
    <meta name="keywords" content="Heart Land Safaris, Travel, Tour, Booking, Agency">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png"> --}}
    {{-- <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png"> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png"> --}}
    {{-- <meta name="theme-color" content="#ffffff"> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- toast css --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert/sweetalert.min.js') }}">
</head>

<body>

    <div class="magic-cursor relative z-10">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="color-scheme-wrap active"><button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-wrap-title"><i class="far fa-palette"></i>STYLE SWITCHER</h4>
        <div class="color-switch-btns"><button data-color="#684DF4"><i class="fa-solid fa-droplet"></i></button> <button
                data-color="#086ad8"><i class="fa-solid fa-droplet"></i></button> <button data-color="#FC3737"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#8a2be2"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#104CBA"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#ffbf4f"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#323F7C"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#0e2bc5"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#F79C53"><i
                    class="fa-solid fa-droplet"></i></button> <button data-color="#6957af"><i
                    class="fa-solid fa-droplet"></i></button></div>
    </div>
    <div id="preloader" class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        {{-- <div class="preloader-inner"><img src="assets/img/logo.svg" alt=""></div> --}}
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading"><span preloader-text="Heart" class="characters">Heart </span><span
                        preloader-text="Land" class="characters">Land </span><span preloader-text="Safaris"
                        class="characters">Safaris </span><span preloader-text="ltd" class="characters">ltd </span><span
                        preloader-text="KE" class="characters">KE</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sidemenu-wrapper sidemenu-info">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="/"><img src="assets/img/logo.svg"
                                alt="Heart Land Safaris"></a>
                    </div>
                    <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model.
                        Appropriately create interactive infrastructures</p>
                    <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                            href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                            href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                            href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="/blog-details"><img src="assets/img/blog/recent-post-1-1.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="/blog"><i class="far fa-calendar"></i>24 Jun ,
                                    2024</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="/blog-details">Where Vision Meets
                                    Concrete Reality</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="/blog-details"><img src="assets/img/blog/recent-post-1-2.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="/blog"><i class="far fa-calendar"></i>22 Jun ,
                                    2024</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="/blog-details">Raising the Bar in
                                    Construction.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="tel:+254757657268" class="info-box_link">+254 757 657268</a></p>
                            <p><a href="tel:+254757657268" class="info-box_link">+254 757 657268</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="mailto:mailinfo00@Heart Land Safaris.com"
                                    class="info-box_link">mailinfo00@Heart Land Safaris.com</a>
                            </p>
                            <p><a href="mailto:support24@Heart Land Safaris.com" class="info-box_link">support24@Heart
                                    Land Safaris.com</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                        <div class="details">
                            <p>789 Inner Lane, Holy park, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button
                type="submit"><i class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="/"><img src="assets/img/logo.svg" alt="Heart Land Safaris"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children mega-menu-wrap">
                        <a class="active" href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Destination</a>
                        <ul class="sub-menu">
                            <li><a href="/destination">Domestic</a></li>
                            <li><a href="/destination-details">International</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Safari Packages</a>
                        <ul class="sub-menu">
                            <li><a href="/services">Services</a></li>
                            <li><a href="/services-details">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Executive</a>
                        <ul class="sub-menu">
                            <li><a href="/activities">activities</a></li>
                            <li><a href="/activities-details">activities Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Thematic Vacations</a>
                        <ul class="sub-menu">
                            <li><a href="#">activities</a></li>
                            <li><a href="#">activities Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('giftshop.index') }}">Gift Shops</a></li>
                    <li class="menu-item-has-children"><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/blog-details">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact-us">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-xl-inline-block"><i
                                        class="fa-sharp fa-regular fa-location-dot"></i>
                                    <span>45 Embakasi Road, Nairobi</span>
                                </li>
                                <li class="d-none d-xl-inline-block"><i class="fa-regular fa-clock"></i>
                                    <span>Sun to
                                        Friday: 8.00 am - 7.00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="currency-menu"><select class="form-select nice-select">
                                    <option selected="">language</option>
                                    <option>CNY</option>
                                    <option>EUR</option>
                                    <option>AUD</option>
                                </select></div>
                            <div class="header-links">
                                <ul>
                                    <li class="d-none d-md-inline-block"><a href="faq.html">FAQ</a></li>
                                    <li class="d-none d-md-inline-block"><a href="/contact-us">Support</a></li>
                                    @if (!Auth::check())
                                        <li>
                                            <a href="#login-form" class="popup-content">
                                                Sign In / Register
                                                <i class="fa-regular fa-user"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="/"><img src="assets/img/logo.svg"
                                        alt="Heart Land Safaris"></a></div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li><a class="active" href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Destination</a>
                                        <ul class="sub-menu">
                                            <li><a href="/destination">Domestic</a></li>
                                            <li><a href="/destination-details">International</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Safari Packages</a>
                                        <ul class="sub-menu">
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/services-details">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Executive</a>
                                        <ul class="sub-menu">
                                            <li><a href="/activities">activities</a></li>
                                            <li><a href="/activities-details">activities Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Thematic Vacations</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">activities</a></li>
                                            <li><a href="#">activities Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('giftshop.index') }}">Gift Shops</a></li>
                                    {{-- <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="tour.html">Our Tour</a></li>
                                            <li><a href="tour-details.html">Tour Details</a></li>
                                            <li><a href="resort.html">Resort page</a></li>
                                            <li><a href="resort-details.html">Resort Details</a></li>
                                            <li><a href="tour-details.html">Tour Details</a></li>
                                            <li><a href="tour-guide.html">Tour Guider</a></li>
                                            <li><a href="tour-guider-details.html">Tour Guider Details</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="price.html">Price Package</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/blog-details">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact-us">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="/contact-us" class="th-btn style3 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg" data-mask-src="assets/img/logo_bg_mask.png"></div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-capitalize mb-0">get updated the latest newsletter
                                </h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form"><input class="form-control" type="email"
                                        placeholder="Enter Email" required="">
                                    <button type="submit" class="th-btn style3">Subscribe Now <img
                                            src="assets/img/icon/plane.svg" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="/"><img src="assets/img/logo.svg"
                                            alt="Heart Land Safaris"></a></div>
                                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital
                                    model. Appropriately create interactive infrastructures</p>
                                <div class="th-social"><a href="https://www.facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                            class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i
                                            class="fab fa-whatsapp"></i></a> <a href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About us</a></li>
                                    <li><a href="/services">Our Service</a></li>
                                    <li><a href="/contact-us">Terms of Service</a></li>
                                    <li><a href="/contact-us">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Address</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+254 75765 7268</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+254 75765 7268</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo00@Heart Land Safaris.com"
                                                class="info-box_link">info@Heart Land Safaris.com</a></p>
                                        <p><a href="mailto:support24@Heart Land Safaris.com"
                                                class="info-box_link">support@Heart Land Safaris.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p>45 Embakasi Road, Nairobi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Instagram Post</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_1.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_2.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_3.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_4.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_5.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_6.jpg"
                                        alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                        class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap" data-bg-src="assets/img/bg/copyright_bg_1.jpg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2024 <a href="/">Heart Land Safaris</a>. All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card"><span class="title">We Accept</span> <img
                                src="assets/img/shape/cards.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%"
            viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>

    <!-- Your content goes here -->
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                    aria-controls="pills-home" aria-selected="false">Login</button></li>
            <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                    aria-controls="pills-profile" aria-selected="true">Register</button></li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="{{ route('signin') }}" method="POST" class="login-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label>email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-btn mb-20 col-12">
                                <button type="submit" class="th-btn btn-fw th-radius2">Sign In</button>
                            </div>
                        </div>
                        <div id="forgot_url">
                            <a href="#">Forgot password?</a>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>


            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="{{ route('register') }}" method="POST" id="registerForm" class="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="name" id="username" required>
                        </div>
                        <div class="form-group col-12">
                            <label>First name*</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required>
                        </div>
                        <div class="form-group col-12">
                            <label>Last name*</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="email">Your email*</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        {{-- <div class="form-group col-12">
                        <label for="password_confirmation">Confirm Password*</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                    </div> --}}
                        <div class="form-btn mt-20 col-12">
                            <button id="register" class="th-btn btn-fw th-radius2">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>

        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/matter.min.js"></script>
    <script src="assets/js/matterjs-custom.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('assets/libs/sweetalert/sweetalert.min.js') }}"></script>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert"
            style="display: none;">
            <span id="alertMessage"></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}')
            @endforeach
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = sessionStorage.getItem('success');
            if (successMessage) {
                // Show the alert
                const alertElement = document.getElementById('successAlert');
                const messageElement = document.getElementById('alertMessage');
                messageElement.textContent = successMessage;
                alertElement.style.display = 'block';

                // Remove the message from storage
                sessionStorage.removeItem('success');

                // Auto hide after 5 seconds
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alertElement);
                    bsAlert.close();
                }, 5000);
            }
        });

        // Function to set success message (use this in your JavaScript code)
        function showSuccessMessage(message) {
            sessionStorage.setItem('success', message);
            location.reload();
        }

        function generateOpeningHours(startDay, endDay, openTime, closeTime) {
            return `${startDay} to ${endDay}: ${formatTime(openTime)} - ${formatTime(closeTime)}`;
        }

        function formatTime(time) {
            let [hour, minute] = time.split(":").map(Number);
            let period = hour >= 12 ? "pm" : "am";
            hour = hour % 12 || 12;
            return `${hour}.${minute.toString().padStart(2, "0")} ${period}`;
        }

        const openingHours = generateOpeningHours("Sun", "Friday", "08:00", "19:00");
    </script>
    @stack('script')

</body>

</html>
