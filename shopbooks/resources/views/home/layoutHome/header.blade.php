<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Woman Store is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, h tml5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Hưng Randy</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('book-shop/dummy-img/favicon.ico')}}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{asset('vendor/css/bundle.min.css')}}">
    <!-- Plugin Css -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('single/assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{ asset('single/assets/css/tooplate-main.css')}}">
 <link rel="stylesheet" href="{{ asset('single/assets/css/owl.css')}}"> 
<link rel="stylesheet" href="{{ asset('single/assets/css/flex-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/wow.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/LineIcons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('book-shop/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('book-shop/css/range-slider.css')}}">
    <!-- Slider Setting Css  -->
    <link rel="stylesheet" href="{{ asset('book-shop/css/settings.css')}}">
    <!-- Mega Menu  -->
    <link rel="stylesheet" href="{{ asset('book-shop/css/megamenu.css')}}">
    <!-- StyleSheet  -->
    <link rel="stylesheet" href="{{ asset('book-shop/css/style.css') }}">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="{{ asset('book-shop/css/custom.css') }}">
</head>
<body>

<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!-- START HEADER NAVIGATION -->
<div class="header-area">
    <div class="container">
        <div class="row upper-nav">
            <div class=" text-left nav-logo">
                <a href="index-book-shop.html" class="navbar-brand"><img src="{{ asset('anh/quochung.png')}}" alt="img"></a>
            </div>
            <div class="ml-auto nav-mega d-flex justify-content-end align-items-center">
                <header class="site-header" id="header">
                    <nav class="navbar navbar-expand-md  static-nav">
                        <div class="container position-relative megamenu-custom">
                            <a class="navbar-brand center-brand" href="index-book-shop.html">
                                <img src="book-shop/img/logo.png" alt="logo" class="logo-scrolled">
                            </a>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home.index')}}">Trang chủ</a>
                                    </li>
                                    <li class="nav-item dropdown static">
                                        <a class="nav-link dropdown-toggle active" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> sách </a>
                                        <ul class="dropdown-menu megamenu flexable-megamenu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                            <h5 class="dropdown-title">  Cuộc Sống </h5>
                                                            <ul>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',1)}}">sách giao tiếp</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',2)}}">sách thám hiểm</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',3)}}">sách tâm đắc</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',4)}}">sách nghĩ lớn</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',5)}}">sách thương  yêu</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',6)}}">sách con người và động vật</a></li>
                                                            </ul>
                                                            <h5 class="dropdown-title">  Cổ Điển </h5>
                                                            <ul>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',7)}}">sách tình cảm</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',8)}}">sách văn học</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',9)}}">sách về người nổi tiếng</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',10)}}">thế giới mới</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                            <h5 class="dropdown-title"> Tiểu Thuyết </h5>
                                                            <ul>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',11)}}">lãng mạn</a></li>
                                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="{{route('home.booksListing',12)}}">tưởng tượng</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <h5 class="dropdown-title text-left">cuốn sách quý giá </h5>
                                                            <div class="carousel-menu mt-4">
                                                                <div class="featured-megamenu-carousel owl-carousel owl-theme">
                                                                    <div class="item ">
                                                                        <img style="width: 450px; height:200px; background-color:black;" src="data:image/jpeg;base64,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" alt="shop-image">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="https://m.mucwomen.com/wp-content/uploads/2021/02/hoc-tieng-trung-moi-ngay-10-tu-vung-sach-chuyen-phap-luan-p2-700x366.jpg" alt="shop-image">
                                                                    </div>
                                                                </div>
                                                                <i class="lni-chevron-left ini-customPrevBtn"></i>
                                                                <i class="lni-chevron-right ini-customNextBtn"></i>
                                                            </div>
                                                            <p class="mt-4 megamenu-slider-para">mỗi nghĩ bạn nằm xuống là lúc bạn cảm thấy cuộc sống thật đơn giản nhưng chỉ cần bạn bước vào và khám phá một cuốn sách bạn sẽ thấy thế giới rộng mở như thế nào</p>
                                                            <a href="book-shop/product-listing.html" class="btn black-border-color-yellow-gradient-btn slider-btn text-left">Mua ngay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home.login')}}">đăng nhập</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.facebook.com/hung.HungRandy">liên lạc</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- side menu -->
                    <div class="side-menu opacity-0 gradient-bg hidden">
                        <div class="inner-wrapper">
                            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
                            <nav class="side-nav w-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                                           Sách <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div id="sideNavPages1" class="collapse sideNavPages">
                                            <ul class="navbar-nav mt-2">
                                                <li class="nav-item"><a class="nav-link" href="{{route('home.booksListing',1)}}"> Sách Cuộc Sống</a></li>
                                                <li class="nav-item"><a class="nav-link"href="{{route('home.booksListing',7)}}">Sách Cổ Điển</a></li>
                                                <li class="nav-item"><a class="nav-link"  href="{{route('home.booksListing',11)}}">Sách Tiểu Thuyết</a></li>
                                            </ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.facebook.com/hung.HungRandy">liên lạc</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="side-footer w-100">
                                <ul class="social-icons-simple white top40">
                                    <li><a class="facebook-bg-hvr" href="https://www.facebook.com/hung.HungRandy"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="https://www.facebook.com/hung.HungRandy"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="https://www.facebook.com/hung.HungRandy"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                                <p class="whitecolor">&copy; <span id="year"></span> đừng để tuổi quá lớn khi chưa đọc cuốn sách nào</p>
                            </div>
                        </div>
                    </div>
                    <div id="close_side_menu" class="tooltip"></div>
                    <!-- End side menu -->
                </header>
                <div class="nav-utility">
                    <div class="manage-icons d-inline-block">
                        <ul class="d-flex justify-content-center align-items-center">
                            <li class="d-inline-block">
                                <a id="add_search_box">
                                    <i class="lni lni-search search-sidebar-hover"></i>
                                </a>
                            </li>
                            <li class="d-inline-block mini-menu-card">
                                <a class="nav-link"  id="add_cart_box" href="javascript:void(0)">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn d-block" id="sidemenu_toggle">
                                <i class="lni lni-menu"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END HEADER NAVIGATION -->

<!--BANNER START-->
<div class="homer-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-center text-lg-left">
                <div class="banner-description">
                    <span class="small-heading animated fadeInRight delay-1s">PHÙ HỢP NHẤT</span>
                    <h1 class="w-sm-100 w-md-100 w-lg-25 animated fadeInLeft delay-1s">SÁCH <span>THU THẬP</span></h1>
                    <a href="{{ asset('book-shop/product-listing.html') }}" class="btn animated">MUA SẮM NGAY  <i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--BANNER END-->
<!--START OUR SERVICES-->
<div class="our-services">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-truck mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">miễn phi tiền ship</h5>
                                <span>khi Đặt hàng trên 3 quyển</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-undo mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">hoàn tiền lại khi không hài lòng</h5>
                                <span>Hoàn tiền 100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-piggy-bank mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Thanh toán khi giao hàng</h5>
                                <span>Lorem ipsum dolor amet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-hands-helping mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">giúp đỡ khi cần thiết</h5>
                                <span>gọi chúng tôi:0972722398</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END OUR SERVICES-->

<!-- START PORTOLIO SECTION -->
@yield('headerHome')