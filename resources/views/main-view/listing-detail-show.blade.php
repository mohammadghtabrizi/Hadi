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
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main-view/css/owl.theme.default.min.css')}}">
    <!-- Slick Caousel CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('main-view/css/slick-theme.css')}}">
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/nouislider.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('main-view/css/magnific-popup.css')}}">
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
                                    <li><a href="#">بلاگ</a></li>
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
        <!-- Listing Banner Area Start Here -->
        <section class="single-listing-carousel-wrap">
            <div class="slick-carousel slick-navigation-layout2" data-slick='{
                "slidesToShow": 3,
                "slidesToShowTab": 3,
                "slidesToShowMobile": 2,
                "slidesToScroll": 1,
                "speed": 600,
                "autoplaySpeed": 2000,
                "dots": false,
                "arrows": true,
                "infinite": true,
                "lazyLoad": "progressive",
                "pauseOnHover": true,
                "autoplay": false,
                "centerMode": true,
                "adaptiveHeight": false,
                "rtl": false,
                "prevArrow": "<span class=\"slick-prev slick-navigation\"><i class=\"flaticon-back\"></i></span>",
                "nextArrow": "<span class=\"slick-next slick-navigation\"><i class=\"flaticon-right-arrow\"></i></span>"
            }'>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-22.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-23.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-24.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-22.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-23.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{asset('main-view/img/listing/listing-24.jpg')}}" alt="Listing" class="img-fluid"></div>
            </div>
        </section>
        <!-- Listing Banner Area End Here -->
        <!-- Single Listing Area Start Here -->
        <section class="single-listing-wrap-layout2 padding-bottom-7 bg--accent">
            <div class="single-listing-summary-wrap2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6">
                            <div class="single-listing-summary2">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="media">
                                            <figure><img src="{{asset('main-view/img/listing/logo7.png')}}" alt="Listing"></figure>
                                            <div class="media-body space-md">
                                                <h2 class="item-title">{{$listing->jobtitle}}</h2>
                                                <p>{{$listing->post_content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-12">
                                        <div class="entry-meta-date"><i class="far fa-calendar-alt"></i>اردیبهشت 1398</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                        <div class="entry-meta-location"><i class="fas fa-map-marker-alt"></i>مسافرت و عشق</div>
                                    </div>
                                    <div class="col-xl-3 col-lg-12 col-md-4 col-sm-12 col-12">
                                        <ul class="entry-meta-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><span>8.4<span> / 10</span></span> </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-2 d-none d-xl-block">
                                        <div class="item-status">
                                            <div class="status-save">صرفه جویی 15٪</div>
                                            <div class="status-open">باز</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-listing-share2">
                                <div class="row gutters-15">
                                    <div class="col-4">
                                        <a href="#" class="item-btn"><i class="fas fa-flag"></i>گزارش</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="item-btn"><i class="fas fa-share-alt"></i>اشتراک</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="item-btn"><i class="fas fa-heart"></i>مورد علاقه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-listing-box-layout2">
                            <div class="listygo-text-box listing-details-info">
                                <h2 class="tab-content-title">{{$listing->post_title}}</h2>
                                <p>{{$listing->jobdescription}}</p>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2">
                                            <img src="{{asset('main-view/img/listing/listing-11.jpg')}}" alt="listing" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2">
                                            <img src="{{asset('main-view/img/listing/listing-12.jpg')}}" alt="listing" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2">
                                            <img src="{{asset('main-view/img/listing/listing-13.jpg')}}" alt="listing" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2 zoom-gallery">
                                            <img src="{{asset('main-view/img/listing/listing-14.jpg')}}" alt="listing" class="img-fluid">
                                            <a href="{{asset('main-view/img/listing/listing-15.jpg')}}" class="popup-zoom">15<i class="fa fa-plus"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{asset('main-view/img/listing/listing-16.jpg')}}" class="popup-zoom d-none"></a>
                                            <a href="{{asset('main-view/img/listing/listing-17.jpg')}}" class="popup-zoom d-none"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listygo-text-box listing-details-menu">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#one" data-toggle="tab" aria-expanded="false" class="active">منوی صبحانه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#two" data-toggle="tab" aria-expanded="false">منوی نهار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#three" data-toggle="tab" aria-expanded="false">منوی شام</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show" id="one">
                                        <ul class="menu-wrap">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu1.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">نان ترد</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">15.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu2.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">پاستا</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">18.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu3.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کیک وانیلی</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">17.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu4.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کاپوچینو</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">08.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="two">
                                        <ul class="menu-wrap">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu3.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کیک وانیلی</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">17.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu1.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">نان ترد</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">15.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu2.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">پاستا</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">18.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu4.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کاپوچینو</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">08.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="three">
                                        <ul class="menu-wrap">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu2.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">پاستا</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">18.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu3.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کیک وانیلی</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">17.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu1.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">نان ترد</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">15.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img src="{{asset('main-view/img/listing/menu4.jpg')}}" alt="Menu"></a>
                                                    <div class="media-body space-md">
                                                        <h4 class="item-title"><a href="#">کاپوچینو</a></h4>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <div class="item-price">08.00 تومان</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="listygo-text-box listing-details-review">
                                <h3 class="inner-item-heading">نظرات</h3>
                                <div class="total-review"><span>(05)</span> امتیاز</div>
                                <ul class="review-items">
                                    <li class="post-no-one">
                                        <div class="media">
                                            <figure><img src="{{asset('main-view/img/blog/review1.jpg')}}" alt="Review"></figure>
                                            <div class="media-body">
                                                <span class="review-title">تجربه تور بسیار معروف !!!</span>
                                                <h4 class="reviewer-name">طاهر خان<span class="review-date">اردیبهشت 1398</span></h4>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <ul class="entry-meta">
                                                    <li><a href="#"><i class="fas fa-thumbs-up"></i><span>25</span>
                                                            پسندیده</a></li>
                                                    <li><a href="#"><i class="fas fa-reply"></i><span>19</span> اشتراک</a></li>
                                                </ul>
                                                <ul class="item-rating">
                                                    <li class="star-one"><i class="fas fa-star"></i></li>
                                                    <li class="star-two"><i class="fas fa-star"></i></li>
                                                    <li class="star-three"><i class="fas fa-star"></i></li>
                                                    <li class="star-four"><i class="fas fa-star"></i></li>
                                                    <li class="star-five"><i class="fas fa-star"></i></li>
                                                    <li><span>( عالی! )</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post-no-two">
                                        <div class="media">
                                            <figure><img src="{{asset('main-view/img/blog/review2.jpg')}}" alt="Review"></figure>
                                            <div class="media-body">
                                                <span class="review-title">تجربه تور بسیار معروف !!!</span>
                                                <h4 class="reviewer-name">مجتبی خان<span class="review-date">اردیبهشت 1398</span></h4>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <ul class="entry-meta">
                                                    <li><a href="#"><i class="fas fa-thumbs-up"></i><span>25</span>
                                                            پسندیده</a></li>
                                                    <li><a href="#"><i class="fas fa-reply"></i><span>19</span> اشتراک</a></li>
                                                </ul>
                                                <ul class="item-rating">
                                                    <li class="star-one"><i class="fas fa-star"></i></li>
                                                    <li class="star-two"><i class="fas fa-star"></i></li>
                                                    <li class="star-three"><i class="fas fa-star"></i></li>
                                                    <li class="star-four"><i class="fas fa-star"></i></li>
                                                    <li class="star-five"><i class="fas fa-star"></i></li>
                                                    <li><span>( خوب )</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post-no-three">
                                        <div class="media">
                                            <figure><img src="{{asset('main-view/img/blog/review1.jpg')}}" alt="Review"></figure>
                                            <div class="media-body">
                                                <span class="review-title">تجربه تور بسیار معروف !!!</span>
                                                <h4 class="reviewer-name">طاهر خان<span class="review-date">اردیبهشت 1398</span></h4>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <ul class="entry-meta">
                                                    <li><a href="#"><i class="fas fa-thumbs-up"></i><span>25</span>
                                                            پسندیده</a></li>
                                                    <li><a href="#"><i class="fas fa-reply"></i><span>19</span> اشتراک</a></li>
                                                </ul>
                                                <ul class="item-rating">
                                                    <li class="star-one"><i class="fas fa-star"></i></li>
                                                    <li class="star-two"><i class="fas fa-star"></i></li>
                                                    <li class="star-three"><i class="fas fa-star"></i></li>
                                                    <li class="star-four"><i class="fas fa-star"></i></li>
                                                    <li class="star-five"><i class="fas fa-star"></i></li>
                                                    <li><span>( عالی! )</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post-no-four">
                                        <div class="media">
                                            <figure><img src="{{asset('main-view/img/blog/review2.jpg')}}" alt="Review"></figure>
                                            <div class="media-body">
                                                <span class="review-title">تجربه تور بسیار معروف !!!</span>
                                                <h4 class="reviewer-name">مجتبی خان<span class="review-date">اردیبهشت 1398</span></h4>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <ul class="entry-meta">
                                                    <li><a href="#"><i class="fas fa-thumbs-up"></i><span>25</span>
                                                            پسندیده</a></li>
                                                    <li><a href="#"><i class="fas fa-reply"></i><span>19</span> اشتراک</a></li>
                                                </ul>
                                                <ul class="item-rating">
                                                    <li class="star-one"><i class="fas fa-star"></i></li>
                                                    <li class="star-two"><i class="fas fa-star"></i></li>
                                                    <li class="star-three"><i class="fas fa-star"></i></li>
                                                    <li class="star-four"><i class="fas fa-star"></i></li>
                                                    <li class="star-five"><i class="fas fa-star"></i></li>
                                                    <li><span>( خوب )</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listygo-text-box listing-details-leave-review">
                                <h3 class="inner-item-heading">نظر خود را ارسال کنید </h3>
                                <div class="rate-wrapper">
                                    <div class="rate-label">امتیاز شما در این آگهی</div>
                                    <div class="rate">
                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                <form class="contact-form-box" id="contact-form2">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label>عنوان نظر شما</label>
                                            <input type="text" placeholder="" class="form-control" name="title"
                                                data-error="این فیلد ضروری است" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>نظر خود را بنویسبد</label>
                                            <textarea placeholder="" class="textarea form-control" name="message" rows="7"
                                                cols="20" data-error="این فیلد ضروری است" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>نام*</label>
                                            <input type="text" placeholder="" class="form-control" name="name"
                                                data-error="این فیلد ضروری است" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>ایمیل*</label>
                                            <input type="email" placeholder="" class="form-control" name="email"
                                                data-error="این فیلد ضروری است" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button type="submit" class="item-btn">ارسال نظر</button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                            <div class="related-listing">
                                <h2 class="related-title">شاید شما هم دوست داشته باشید</h2>
                                <div id="owl-nav1" class="nav-control-layout3">
                                    <span class="rt-prev">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="rt-next">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="rc-carousel listing-box-grid" data-custom-nav="#owl-nav1" data-loop="true"
                                data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000"
                                data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false"
                                data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="false"
                                data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                                data-r-small="1" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2"
                                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="2" data-r-large-nav="false"
                                data-r-large-dots="false" data-r-extra-large="2" data-r-extra-large-nav="false"
                                data-r-extra-large-dots="false">
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
                                                    <li class="tooltip-item ctg-icon" data-tips="رستوران"><a href="#"><i
                                                                class="flaticon-chef"></i></a></li>
                                                    <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                class="fas fa-heart"></i></a></li>
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                                    <li class="tooltip-item ctg-icon" data-tips="فروشگاه"><a href="#"><i
                                                                class="flaticon-supermarket"></i></a></li>
                                                    <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                class="fas fa-heart"></i></a></li>
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                            <li class="ctg-name"><a href="#"><i class="flaticon-musical-note"></i>کلوپ</a></li>
                                            <li class="entry-meta">
                                                <ul>
                                                    <li class="tooltip-item ctg-icon" data-tips="کلوپ"><a href="#"><i
                                                                class="flaticon-musical-note"></i></a></li>
                                                    <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                class="fas fa-heart"></i></a></li>
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                                    <li class="tooltip-item ctg-icon" data-tips="هتل"><a href="#"><i
                                                                class="flaticon-bed"></i></a></li>
                                                    <li class="tooltip-item" data-tips="مورد علاقه من"><a href="#"><i
                                                                class="fas fa-heart"></i></a></li>
                                                    <li class="tooltip-item" data-tips="گالری"><a href="#"><i class="far fa-image"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget widget-follow-us2 widget-box-padding">
                            <figure class="item-thumb"><img src="{{asset('main-view/img/blog/follow.jpg')}}" alt="Figure"></figure>
                            <h4 class="item-title">جعفر صیدر</h4>
                            <div class="item-info">
                                <ul class="block-list">
                                    <li><i class="flaticon-user"></i>ادمین</li>
                                    <li><i class="flaticon-phone-call"></i>+ 132 899 6330</li>
                                </ul>
                            </div>
                            <div class="social-info">
                                <ul class="block-list">
                                    <li>
                                        <div class="count-number counter" data-num="1290">1,290</div>
                                        <div class="count-title">دنبال کننده</div>
                                    </li>
                                    <li>
                                        <div class="count-number counter" data-num="20">20</div>
                                        <div class="count-title">دنبال میکند</div>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="item-btn"><i class="fas fa-rss"></i>دنبالش کنید</a>
                        </div>
                        <div class="widget widget-information widget-box-padding">
                            <h3 class="widget-title">اطلاعات تکمیلی</h3>
                            <ul class="block-list">
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>
                                    @if(! empty($listing->postaladdress))
                                        {{$listing->postaladdress}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>
                                    @if(! empty($listing->postaladdress2))
                                        {{$listing->postaladdress2}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>
                                    @if(! empty($listing->factoryaddress))
                                        {{$listing->factoryaddress}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-phone"></i>
                                    @if(! empty($listing->phonenumber))
                                        {{$listing->phonenumber}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-phone"></i>
                                    @if(! empty($listing->tellfactory))
                                        {{$listing->tellfactory}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-phone"></i>
                                    @if(! empty($listing->managephone))
                                        {{$listing->managephone}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-fax"></i>
                                    @if(! empty($listing->faxnumber))
                                        {{$listing->faxnumber}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-mobile"></i>
                                    @if(! empty($listing->mobile))
                                        {{$listing->mobile}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-mobile"></i>
                                    @if(! empty($listing->mobile2))
                                        {{$listing->mobile2}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="far fa-clock"></i><span>شنبه - چهار شنبه:</span> قبل ظهر 10 - بعد ظهر 2</li>
                                <li class="block-list-item"><i class="fas fa-globe"></i>
                                    @if(! empty($listing->jobemail))
                                        {{$listing->jobemail}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-globe"></i>
                                    @if(! empty($listing->website))
                                        {{$listing->website}}
                                    @else
                                        {{$isnull}}
                                    @endif
                                </li>
                                <li class="block-list-item"><i class="fas fa-share-alt"></i>
                                    <ul class="inline-list">
                                        <li class="inline-list-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="inline-list-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="inline-list-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="inline-list-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li class="inline-list-item"><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li class="inline-list-item"><a href="#"><i class="fas fa-rss"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-price-range widget-box-padding">
                            <h3 class="widget-title">حدود قیمت</h3>
                            <div id="price-range-wrapper" class="price-range-wrapper">
                                <div id="price-range-filter"></div>
                                <div class="price-filter-wrap">
                                    <div class="price-range-select">
                                        <div class="price-range">قیمت:</div>
                                        <div class="price-range" id="price-range-min"></div>
                                        <div class="price-range">-</div>
                                        <div class="price-range" id="price-range-max"></div>
                                    </div>
                                    <div class="filter-button">
                                        <button class="item-btn btn-ghost size-xs radius-4 text-capitalize" type="submit"
                                            value="Login">فیلتر</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-contact-form widget-box-padding">
                            <h3 class="widget-title">تماس با من</h3>
                            <form class="contact-form-box" id="contact-form">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>نام شما*</label>
                                        <input type="text" placeholder="" class="form-control" name="name" data-error="این فیلد ضروری است"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>ایمیل*</label>
                                        <input type="email" placeholder="" class="form-control" name="email" data-error="این فیلد ضروری است"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>موضوع</label>
                                        <input type="text" placeholder="" class="form-control" name="subject"
                                            data-error="این فیلد ضروری است" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>پیام شما</label>
                                        <textarea placeholder="" class="textarea form-control" name="message" rows="7"
                                            cols="20" data-error="این فیلد ضروری است" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button type="submit" class="item-btn">ارسال پیام</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                        <div class="widget widget-get-direction widget-box-padding">
                            <div class="google-map-wrap-layout3">
                                <iframe src="https://maps.google.com/maps?q=-37.81618%2C%20144.95692&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                            </div>
                            <div class="item-text">چین هیل شهر</div>
                            <div class="item-text"><a href="#"><i class="fab fa-telegram-plane"></i>دریافت محل</a></div>
                        </div>
                        <div class="widget widget-claim-box widget-box-padding">
                            <h4 class="item-title">آیا این به شما مربوط است؟</h4>
                            <p>آگهی های ما بهترین راه برای مدیریت و محافظت از کسب و کار شماست.</p>
                            <a href="#" class="item-btn">دریافتش کنید</a>
                        </div>
                        <div class="widget widget-poster widget-box-padding">
                            <div class="item-img">
                                <img src="{{asset('main-view/img/figure/sidebar-figure.jpg')}}" alt="Poster" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Listing Area End Here -->
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
    <!-- Counterup Js -->
    <script src="{{asset('main-view/js/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('main-view/js/waypoints.min.js')}}"></script>
    <!-- Nouislider Js -->
    <script src="{{asset('main-view/js/nouislider.min.js')}}"></script>
    <!-- wNumb Js -->
    <script src="{{asset('main-view/js/wNumb.js')}}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{asset('main-view/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Imagesloaded Js -->
    <script src="{{asset('main-view/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Smoothscroll Js -->
    <script src="{{asset('main-view/js/smoothscroll.min.js')}}"></script>
    <!-- Silk Cauosel JS -->
    <script src="{{asset('main-view/js/slick.min.js')}}"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Validator js -->
    <script src="{{asset('main-view/js/validator.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('main-view/js/main.js')}}"></script>
</body>


</html>