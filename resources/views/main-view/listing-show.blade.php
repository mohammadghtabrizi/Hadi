<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>به وب سایت ما خوش آمدید</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('main-view/img/favicon.png')}}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{asset('main-view/css/normalize.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('main-view/css/main.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('main-view/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('main-view/fonts/flaticon.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/select2.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main-view/css/owl.theme.default.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('main-view/style.css')}}">    
    <!-- Modernizr Js -->
    <script src="{{asset('main-view/js/modernizr-3.6.0.min.js')}}"></script>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <header id="site-header" class="header-one">
            <div class="header-main header-sticky bg--dark">
                <div class="container-fluid">
                    <div class="mob-menu-open toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <div class="site-logo">
                                <a href="#" class="main-logo"><img src="{{asset('main-view/img/logo.png')}}" alt="Site Logo"></a>
                                <a href="#" class="sticky-logo"><img src="{{asset('main-view/img/sticky-logo.png')}}" alt="Site Logo">
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 possition-static">
                            <nav class="site-nav">
                                <ul class="site-menu">
                                    <li><a href="#">صفحه اصلی</a></li>
                                    <li><a href="about-us.html">درباره</a></li>
                                    <li><a href="{{route('listing_show')}}">آگهی</a></li>
                                    <li><a href="#">بلاگ</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="blog-grid.html">بلاگ شبکه ای</a></li>
                                            <li><a href="blog-list.html">بلاگی لیستی</a></li>
                                            <li><a href="single-blog.html">جزئیات بلاگ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">تماس</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-end">
                            <div class="nav-action-elements">
                                <ul>
                                    <li>
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="flaticon-profile"></i>ورود
                                        </button>
                                    </li>
                                    <li>
                                        <a href="add-listing.html" class="ghost-btn"><i class="fas fa-plus"></i>افزودن آگهی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
        <!-- Listing Area Start Here -->
        <section class="inner-page-top-margin padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-2">
                        <div class="item-sorting-wrap">
                            <div class="row">
                                <div class="col-sm-6 col-12 d-flex align-items-center">
                                    <div class="item-sorting-title">
                                        نمایش 0 - 8 از 62
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 d-flex align-items-center justify-content-sm-end">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li><a class="product-view-trigger" href="#" data-type="listing-box-grid"><i
                                                        class="fa fa-th-large"></i></a></li>
                                            <li class="active"><a href="#" data-type="listing-box-list" class="product-view-trigger"><i
                                                        class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="listing-view" class="listing-box-list">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-1-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-1-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo1.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-chef"></i>رستوران</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Restaurant"><a
                                                                href="#"><i class="flaticon-chef"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-2-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-2-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo2.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-coffee-cup"></i>کافه</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Bar &amp; Cafe"><a
                                                                href="#"><i class="flaticon-coffee-cup"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save active">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-3-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-3-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo3.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-spa"></i>زیبایی</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Beauty &amp; Spa"><a
                                                                href="#"><i class="flaticon-spa"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-4-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-4-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo4.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-supermarket"></i>فروشگاه</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Shopping"><a href="#"><i
                                                                    class="flaticon-supermarket"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save active">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-5-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-5-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo5.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-musical-note"></i>کلوپ شبانه</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Nightlife"><a href="#"><i
                                                                    class="flaticon-musical-note"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-6-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-6-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo6.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-bed"></i>هتل</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Hotel"><a href="#"><i
                                                                    class="flaticon-bed"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-2-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-2-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo2.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-coffee-cup"></i>کافه</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Bar &amp; Cafe"><a
                                                                href="#"><i class="flaticon-coffee-cup"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div class="item-status status-open active">باز</div>
                                            <div class="item-status status-save active">صرفه جویی 15٪</div>
                                            <img src="{{asset('main-view/img/listing/listing-3-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                            <img src="{{asset('main-view/img/listing/listing-3-2.jpg')}}" alt="Listing" class="img-fluid list-view-img">
                                            <ul class="item-rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>8.4<span> / 10</span></span> </li>
                                            </ul>
                                            <div class="item-logo"><img src="{{asset('main-view/img/listing/logo3.png')}}" alt="Logo"></div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">رستوران وستفیلد</a></h3>
                                            <p class="item-paragraph">لورم ایپسوم متن ساختگی با تولید سادگی ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>ایران، تهران، تهران، ساختمان تبانی</li>
                                                <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                                <li><i class="fas fa-globe"></i>www.restauant.com</li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill">جزئیات</a></li>
                                                <li class="ctg-name"><a href="#"><i class="flaticon-spa"></i>زیبایی</a></li>
                                                <li class="entry-meta">
                                                    <ul>
                                                        <li class="tooltip-item ctg-icon" data-tips="Beauty &amp; Spa"><a
                                                                href="#"><i class="flaticon-spa"></i></a></li>
                                                        <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                    class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="گالری"><a href="#"><i
                                                                    class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination-layout1">
                                <li>
                                    <a href="#"><i class="flaticon-back"></i></a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">6</a>
                                </li>
                                <li>
                                    <a href="#">7</a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 sidebar-widget-area sidebar-break-md ">
                        <div class="widget widget-box-padding widget-filter">
                            <h3 class="widget-title">فیلتر آگهی ها</h3>
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="دنبال چی میگردی؟ ..." class="form-control" name="website"
                                    id="form-website" data-error="متن جستجو مورد نیاز است" required>
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="محل ها" class="form-control" name="email" id="form-email"
                                    data-error="نام رده مورد نیاز است" required>
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-placeholder"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group">
                                <select class="select2" name="filter-by">
                                     <option value="0">مرتب سازی بر اساس</option>
                                     <option value="1">جدید ترین</option>
                                     <option value="2">فروش بالا</option>
                                     <option value="3">امتیاز بالا</option>
                                     <option value="4">قیمت بالا</option>
                                     <option value="5">قیمت پایین</option>
                                 </select>
                            </div>
                            <div class="input-group">
                                <select class="select2" name="filter-by">
                                    <option value="0">حدود قیمت</option>
                                    <option value="1">500</option>
                                    <option value="2">1000</option>
                                    <option value="3">20000</option>
                                    <option value="4">50000</option>
                                    <option value="5">100000</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="select2" name="filter-by">
                                    <option value="0">فیلتر بر اساس برچسب</option>
                                    <option value="1">مرکز خریدl</option>
                                    <option value="2">کافه</option>
                                    <option value="3">هتل</option>
                                    <option value="4">زیبایی</option>
                                </select>
                            </div>
                            <div class="inline-box">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">هم اکنون باز است</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">امتیاز بالا</label>
                                </div>
                            </div>
                            <a href="#" class="item-btn">ارسال</a>
                        </div>
                        <div class="widget widget-poster widget-box-padding">
                            <div class="item-img">
                                <img src="{{asset('main-view/img/figure/sidebar-figure.jpg')}}" alt="Poster" class="img-fluid">
                            </div>
                        </div>
                        <div class="widget widget-box-padding widget-new-rated">
                            <h3 class="widget-title">لیست جدید آگهی ها</h3>
                            <ul class="block-list">
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="{{asset('main-view/img/blog/post1.jpg')}}" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">هتل تهران</a></h4>
                                        <div class="item-place">شهر تهران</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="{{asset('main-view/img/blog/post2.jpg')}}" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">هتل تهران</a></h4>
                                        <div class="item-place">شهر تهران</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="{{asset('main-view/img/blog/post3.jpg')}}" alt="Post"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">هتل تهران</a></h4>
                                        <div class="item-place">شهر تهران</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-box-padding widget-latest-article">
                            <h3 class="widget-title">آخرین مقالات</h3>
                            <ul class="block-list">
                                <li class="single-item">
                                    <h4 class="item-title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h4>
                                    <div class="post-date">اردیبهشت 1398</div>
                                </li>
                                <li class="single-item">
                                    <h4 class="item-title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h4>
                                    <div class="post-date">اردیبهشت 1398</div>
                                </li>
                                <li class="single-item">
                                    <h4 class="item-title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h4>
                                    <div class="post-date">اردیبهشت 1398</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Listing Area End Here -->
        <!-- Brand Area Start Here -->
        <section class="brand-wrap-layout1 bg--light padding-top-9p6 padding-bottom-7">
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="6" data-margin="60" data-autoplay="true"
                    data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false"
                    data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false"
                    data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="3"
                    data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false"
                    data-r-medium-dots="false" data-r-large="5" data-r-large-nav="false" data-r-large-dots="false"
                    data-r-extra-large="5" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand1.png')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand2.png')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand3.png')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand4.png')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand5.png')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="brand-box-layout1">
                        <img src="{{asset('main-view/img/brand/brand1.png')}}" alt="Brand" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <section class="footer-top-wrap">
                <div class="container">
                    <div class="row">
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{asset('main-view/img/footer-logo.png')}}" class="img-fluid" alt="footer-logo"></a>
                                </div>
                                <div class="footer-about">
                                    <p>قالب حرفه ای ثبت آگهی و دایرکتوری. قالب لیستی گو یک قالب فوق حرفه ای است که برای انواع آگهی ها مورد نیاز است.</p>
                                </div>
                                <div class="footer-contact-info">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>ارومیه، خیابان حافظ، پلاک 5</li>
                                        <li><i class="fas fa-phone"></i>+123 6669 000</li>
                                        <li><i class="far fa-envelope"></i>info@listygo.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>صفحات انتقالی</h3>
                                </div>
                                <div class="widget_nav_menu">
                                    <ul>
                                        <li><a href="#">هتل</a></li>
                                        <li><a href="#">رستوران</a></li>
                                        <li><a href="#">آپارتمان</a></li>
                                        <li><a href="#">مراکز زیبایی</a></li>
                                        <li><a href="#">اتوماسیون</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>پشتیبانی</h3>
                                </div>
                                <div class="widget_nav_menu">
                                    <ul>
                                        <li><a href="about-us.html">چت آنلاین</a></li>
                                        <li><a href="about-us.html">درباره ما</a></li>
                                        <li><a href="faq.html">گفت و گو</a></li>
                                        <li><a href="contact.html">تماس با ما</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>ما را دنبال کنید</h3>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    </ul>
                                </div>
                                <ul class="folow-us">
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('main-view/img/figure/follow1.jpg')}}" alt="follow">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('main-view/img/figure/follow2.jpg')}}" alt="follow">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom-wrap">
                <div class="container">
                    <div class="copyright">1398 راست چین و فارسی سازی © TN_Plguin</div>
                </div>
            </section>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">ورود</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <input class="main-input-box" type="text" placeholder="نام کاربری" />
                        <input class="main-input-box" type="password" placeholder="رمز عبور" />
                        <div class="inline-box mb-5 mt-4">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">مرا به خاطر داشته باش</label>
                            </div>
                            <label class="lost-password"><a href="#">فراموشی رمز عبور؟</a></label>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">ورود</button>
                            <a href="#" class="btn-register"><i class="fas fa-user"></i>ثبت نام</a>
                        </div>
                    </form>
                    <label>با شبکه اجتماعی خود ارتباط برقرار کنید</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Jquery Js -->
    <script src="{{asset('main-view/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('main-view/js/popper.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('main-view/js/bootstrap.min.js')}}"></script>
    <!-- Plugins Js -->
    <script src="{{asset('main-view/js/plugins.js')}}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{asset('main-view/js/owl.carousel.min.js')}}"></script>
    <!-- Select 2 Js -->
    <script src="{{asset('main-view/js/select2.full.min.js')}}"></script>
    <!-- Smoothscroll Js -->
    <script src="{{asset('main-view/js/smoothscroll.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('main-view/js/main.js')}}"></script>
</body>


</html>