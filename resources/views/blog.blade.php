<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Management Services Nepal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('frontassets/css/fontawesome-all.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('frontassets/css/bootstrap.min.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('frontassets/images/fav.png')}}" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{asset('frontassets/css/swiper.min.css')}}">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="{{asset('frontassets/css/lightcase.css')}}">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{asset('frontassets/css/odometer.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('frontassets/css/icomoon.css')}}">
    <!-- line-awesome-icon css -->
   <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('frontassets/css/animate.css')}}">
    <!-- aos.css -->
    <link rel="stylesheet" href="{{asset('frontassets/css/aos.css')}}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{asset('frontassets/css/nice-select.css')}}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('frontassets/css/style.css')}}">
    <style type="text/css">
        .header {
            background-color: #6c6cf1;
            width: 100%;
            z-index: 99;
            -webkit-transition: all ease 1s;
            transition: all ease 1s;
        }
        .footer-section {
            background-color: #6c6cf1;
        }
        .preloader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }
        .loading-dot{
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }

        .loading-dot {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>
<body>



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="preloader">
    <div class="drawing" id="loading">
        <div class="loading-dot"></div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<div class="cursor"></div>
<div class="cursor-follower"></div>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section three">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="index.html"><img src="{{asset('frontassets/images/bms.logo.png')}}" alt="site-logo"></a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu">
                                <li class="menu_has_children">
                                    <a href="#0">Home <i class="las la-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-two.html">Home Two</a></li>
                                        <li><a href="index-three.html">Home Three</a></li>
                                        <li><a href="index-four.html">Home Four</a></li>
                                        <li><a href="index-five.html">Home Five</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu_has_children">
                                    <a href="#0">Services <i class="las la-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Service One</a></li>
                                        <li><a href="service-two.html">Service Two</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="service-details-two.html">Service Details Two</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li class="menu_has_children">
                                    <a href="#0">Pages <i class="las la-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="project.html">Project</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="plan.html">Pricing Plan</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="menu_has_children">
                                    <a href="#0">Blog <i class="las la-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <div class="header-right">
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="contactus" class="btn--base">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section two inner">
    <div class="banner-element-four two">
        <img src="{{asset('frontassets/images/element/element-5.png')}}" alt="element">
    </div>
    <div class="banner-element-five two">
        <img src="{{asset('frontassets/images/element/element-7.png')}}" alt="element">
    </div>
    <div class="banner-element-nineteen two">
        <img src="{{asset('frontassets/images/element/element-6.png')}}" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
        <img src="{{asset('frontassets/images/element/element-69.png')}}" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
        <img src="{{asset('frontassets/images/element/element-70.png')}}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                    <div class="banner-content-header">
                        <h2 class="title">Blog</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="blog-section ptb-120">
    <div class="container">
        <div class="row justify-content-center mb-60-none">
            <div class="col-xl-8 col-lg-8 mb-60">
                <div class="row justify-content-center mb-60-none">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-4.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Many important brands have
                                        given us their trust</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-5.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Guest Profile: Will Thornton, Author of Are We There Yet?</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-6.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">The 13 Real Traffic Safety Questions We Should Be Asking</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-7.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">How to Safely Road-Trip During a Pandemic</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-8.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Seeking Your Input: Thoughts on Driver-Assistance Technology</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-9.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Guest Profile: Nate Wagner of This App Saves Lives (TASL)</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-10.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Why Distracted Driving Campaigns Often Don’t Work</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{asset('frontassets/images/blog/blog-11.png')}}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">By : Smith Roy</span>
                                    <span class="date">24th March, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Helping You Be Seen, Safely: Introducing the SafetySock®</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mb-60">
                <div class="sidebar">
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Search</h4>
                        <div class="search-widget-box">
                            <form class="search-form">
                                <input type="text" name="search" class="form--control" placeholder="Search">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Recent Posts</h4>
                        <div class="popular-widget-box">
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="{{asset('frontassets/images/blog/blog-1.png')}}" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">24th March, 2022</span>
                                    <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="{{asset('frontassets/images/blog/blog-5.png')}}" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">24th March, 2022</span>
                                    <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="{{asset('frontassets/images/blog/blog-7.png')}}" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">24th March, 2022</span>
                                    <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="{{asset('frontassets/images/blog/blog-4.png')}}" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">24th March, 2022</span>
                                    <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Categories</h4>
                        <div class="category-widget-box">
                            <ul class="category-list">
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Strategy <span>5</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Stock Investment <span>1</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-box">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tag-widget-box">
                            <ul class="tag-list">
                                <li><a href="#0">infobpn</a></li>
                                <li><a href="#0">driver</a></li>
                                <li><a href="#0">newdriver</a></li>
                                <li><a href="#0">Gallery</a></li>
                                <li><a href="#0">manual</a></li>
                                <li><a href="#0">Office</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item prev">
                    <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">01</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link" href="#">04</a></li>
                <li class="page-item"><a class="page-link" href="#">05</a></li>
                <li class="page-item next">
                    <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section pt-120">
    <div class="footer-element-one">
        <img src="{{asset('frontassets/images/element/element-48.png')}}" alt="element">
    </div>
    <div class="footer-element-two">
        <img src="{{asset('frontassets/images/element/element-39.png')}}" alt="element">
    </div>
    <div class="footer-element-three">
        <img src="{{asset('frontassets/images/element/element-40.png')}}" alt="element">
    </div>
    <div class="footer-element-four">
        <img src="{{asset('frontassets/images/element/element-7.png')}}" alt="element">
    </div>
    <div class="footer-element-five">
        <img src="{{asset('frontassets/images/element/element-41.png')}}" alt="element">
    </div>
    <div class="footer-element-six">
        <img src="{{asset('frontassets/images/element/element-42.png')}}" alt="element">
    </div>
    <div class="footer-element-seven">
        <img src="{{asset('frontassets/images/element/element-39.png')}}" alt="element">
    </div>
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a class="site-logo site-title" href="index.html"><img src="assets/images/bms.logo.png" alt="site-logo"></a>
                    </div>
                    <p></p>
                    <ul class="footer-social">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h5 class="title">About us</h5>
                    <ul class="footer-list">
                        <li><a href="#0">About Us</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Rewards</a></li>
                        <li><a href="#0">Work with Us</a></li>
                        <li><a href="#0">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">Quick Links</h4>
                    <ul class="footer-list">
                        <li><a href="#0">About us</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>Copyright © 2022 <a href="welcome">Bms</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




<!-- jquery -->
<script src="{{asset('frontassets/js/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontassets/js/bootstrap.min.js')}}"></script>
<!-- swipper js -->
<script src="{{asset('frontassets/js/swiper.min.js')}}"></script>
<!-- lightcase js-->
<script src="{{asset('frontassets/js/lightcase.js')}}"></script>
<!-- odometer js -->
<script src="{{asset('frontassets/js/odometer.min.js')}}"></script>
<!-- viewport js -->
<script src="{{asset('frontassets/js/viewport.jquery.js')}}"></script>
<!-- aos js file -->
<script src="{{asset('frontassets/js/aos.js')}}"></script>
<!-- nice select js -->
<script src="{{asset('frontassets/js/jquery.nice-select.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('frontassets/js/isotope.pkgd.min.js')}}"></script>
<!-- tweenMax js -->
<script src="{{asset('frontassets/js/TweenMax.min.js')}}"></script>
<!-- main -->
<script src="{{asset('frontassets/js/main.js')}}"></script>


</body>
</html>
