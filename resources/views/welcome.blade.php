<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="وان سئو سایت">
    <meta name="author" content="وان سئو سایت">
    <meta name="description" content="وان سئو سایت آنالیز هوشمند سئو سایت و ارائه برنامه سئو با هوش مصنوعی">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#233D63">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#233D63">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
    <title>1seo وان سئو سایت</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="/front-end/images/favicon.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="/front-end/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/front-end/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/front-end/css/app.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
    <script src="/front-end/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="/front-end/vendor/html5shiv.js"></script>
    <script src="/front-end/vendor/respond.js"></script>
    <![endif]-->
</head>

<body class="no-scroll-y home-portfo">
<div class="partical-bg">
    <div id="particles"></div>
</div>
<div class="main-page-wrapper">

<!--
    =============================================
     header
    ==============================================
    -->
    <div class="theme-main-menu theme-menu-three">
        <div class="shrt-menu shrt-menu-three dark-bg text-light">
            <div class="d-flex justify-content-between align-items-center main-header">
                <div class="logo order-2"><a href="/"><img src="/front-end/images/logo200.png"
                                                                    alt="وان سئو سایت"></a></div>
                <nav id="mega-menu-holder" class="navbar navbar-expand-lg order-1">
                    <div class="nav-container">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent33" aria-controls="navbarSupportedContent33"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="flaticon-setup"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent33">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown position-relative">
                                    <a href="#" class="nav-link dropdown-toggle"
                                       data-toggle="dropdown">خانه</a>

                                </li>
                                <li class="nav-item dropdown position-relative">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">پایگاه
                                        دانش</a>

                                </li>
                                <li class="nav-item dropdown position-relative">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">درباره
                                        ما</a>

                                </li>
                                <li class="nav-item dropdown position-relative">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">تماس با
                                        ما</a>

                                </li>
                            </ul>
                        </div>
                    </div> <!-- /.container -->
                </nav> <!-- /#mega-menu-holder -->

                <!-- Search/cart Option/Social icon -->
                <div class="widget-container order-3">
                    <ul class="d-flex align-items-center">{{--
                        <li><a href="contact-us-standard.html" class="contact-us white-shdw-button">ورود به پنل<i
                                    class="icon flaticon-back"></i></a></li>--}}
                        @if (Route::has('login'))
                            @auth
                                <?php $url = auth()->user()->url ?>
                                <li><a href="{{route('home',['url' => $url] )}}" class="contact-us white-shdw-button">داشبورد<i
                                            class="icon flaticon-back"></i></a></li>
                            @else
                                <li><a href="{{route('login')}}" class="contact-us white-shdw-button">ورود به پنل<i
                                            class="icon flaticon-back"></i></a></li>

                              {{--  @if (Route::has('register'))
                                    <li><a href="{{route('register')}}" class="contact-us white-shdw-button">ثبت نام<i
                                                class="icon flaticon-back"></i></a></li>

                                @endif--}}
                            @endauth
                        @endif
                    </ul>
                </div> <!-- /.widget-container -->
            </div>
        </div> <!-- /.shrt-menu -->
    </div>

    <!--
    =============================================
       section 1
    ==============================================
    -->
    <div id="theme-banner-one">
        <div class="illustration wow zoomIn animated" data-wow-delay="1s" data-wow-duration="2s">
            <img src="/front-end/images/shape/banner-shape1.png" alt="وان سئو سایت">
            <!--  <img src="/front-end/images/logo300.png" style="z-index: -1" alt="وان سئو سایت" class="shape-one wow fadeInDown animated"
                   data-wow-delay="1.8s">-->
            <img src="/front-end/images/shape/banner-shape3.svg" alt="وان سئو سایت"
                 class="shape-two wow fadeInUp animated"
                 data-wow-delay="2.7s">
        </div>
        <img src="/front-end/images/shape/1-shapes.png" alt="وان سئو سایت"
             class="oval-one shape-six shape-ten shape-eleven">
        <img src="/front-end/images/shape/2-shapes.png" alt="وان سئو سایت" class="shape-three shape-seven">
        <img src="/front-end/images/shape/3-shapes.png" alt="وان سئو سایت" class="shape-four shape-eight">
        <img src="/front-end/images/shape/4-shapes.png" alt="وان سئو سایت" class="shape-five shape-nine">
        <div class="container">
            <div class="main-wrapper">

                <h1 class="main-title wow fadeInUp animated" style="color: white" data-wow-delay="0.4s">وان سئو
                    سایت </h1>
                <h1 class="main-title wow fadeInUp animated" style="color: white" data-wow-delay="0.4s">اولین و تنها
                    اپلیکیشن جامع همیار سئو در ایران</h1>
                <p class="sub-title wow fadeInUp animated pt-2" data-wow-delay="0.9s">
                    <srtong class="strong-text">ارائه برنامه سئو با هوش مصنوعی</srtong>
                </p>
                <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">
                    آنالیز کامل سایت و کلمات کلیدی و بررسی با رقبا
                </p>
                <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">
                    ارائه هوشمند و خودکار برنامه سئو به صورت روزانه
                </p>
                <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">
                    شما فقط کافیست در سایت و یا اپلیکیشن وان سئو ثبت نام کرده </br>و اطلاعات سایت خود را وارد نمایید.
                </p>
                <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">
                    هوش مصنوعی وان سئو به شما بهترین استراتژی سئو را ارائه خواهد نمود.
                </p>
                <ul class="button-group lightgallery">
                    <li><a href="{{route('register')}}" class="more-button solid-button-one wow fadeInRight animated"
                           data-wow-delay="1.5s">هم اکنون شروع کنید<i class="fa fa-angle-left icon-right"
                                                                      aria-hidden="true"></i></a></li>
                </ul>
            </div> <!-- /.main-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /#theme-banner-one -->


    <!--
    =============================================
       section 2
    ==============================================
    -->
    <div id="theme-banner-three">
        <div class="container">
            <div class="main-wrapper">
                <h1 class="main-title wow fadeInUp animated" data-wow-delay="0.2s">
							<span class="cd-headline clip">
							<span>ارائه هوشمند استراتژی </br></span>
			                  <span class="cd-words-wrapper greencolor">
			                    <b class="is-visible">سئو تکنیکال</b>
			                    <b>سئو داخلی</b>
			                    <b>سئو خارجی</b>
			                  </span>
			                </span>
                </h1>
                <p class="sub-title wow fadeInUp animated ppading" data-wow-delay="0.9s">
                    ارائه فعالیت های روزانه که برای سئو نیاز به انجام می باشد. ( همراه با راهنمایی کامل )
                </p>
            </div> <!-- /.main-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /#theme-banner-one -->

    <!--
                    =============================================
                        Our Project
                    ==============================================
                    -->
    <div class="our-project project-minimal-style">
        <div class="inner-wrapper">
            <div class="project-minimal-slider">
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/36.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">تصویر بخش آنالیز</a></h4>
                                <p>تصویر نمونه ای از محیط برنامه قسمت آنالیز نرم افزار وان سئو سایت</p>
                                <a href="images/gallery/36.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/37.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">لورم <span>اپیسوم</span></a>
                                </h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <a href="images/gallery/37.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/38.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">لورم <span>اپیسوم</span></a>
                                </h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <a href="images/gallery/38.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/39.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">لورم <span>اپیسوم</span></a>
                                </h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <a href="images/gallery/39.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/40.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">لورم <span>اپیسوم</span></a>
                                </h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <a href="images/gallery/40.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
                <div class="item">
                    <div class="project-item">
                        <div class="img-box"><img src="/front-end/images/gallery/41.jpg" alt="وان سئو سایت"></div>
                        <div class="hover-valina">
                            <div>
                                <h4 class="title"><a href="project-details-creative.html">لورم <span>اپیسوم</span></a>
                                </h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <a href="images/gallery/41.jpg" class="zoom fancybox" data-fancybox="gallery"><img
                                        src="/front-end/images/icon/zoom-in.svg" alt="وان سئو سایت" class="svg"></a>
                            </div>
                        </div> <!-- /.hover-valina -->
                    </div> <!-- /.project-item -->
                </div> <!-- /.item -->
            </div> <!-- /.project-minimal-slider -->
        </div> <!-- /.inner-wrapper -->
    </div> <!-- /.our-project -->


    <div class="apps-testimonial">
        <div class="trusted-partner">
            <div class="container">
                <div class="partner-slider">
                    <div class="item"><a href="#"><img src="/front-end/images/logo/envato.svg" alt="وان سئو سایت"></a>
                    </div>
                    <div class="item"><a href="#"><img src="/front-end/images/logo/envato.svg" alt="وان سئو سایت"></a>
                    </div>
                    <div class="item"><a href="#"><img src="/front-end/images/logo/envato.svg" alt="وان سئو سایت"></a>
                    </div>
                    <div class="item"><a href="#"><img src="/front-end/images/logo/envato.svg" alt="وان سئو سایت"></a>
                    </div>
                    <div class="item"><a href="#"><img src="/front-end/images/logo/envato.svg" alt="وان سئو سایت"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
                =====================================================
                    Our Pricing
                =====================================================
                -->
    <div class="agn-our-pricing pt-150 pb-200">
        <img src="/front-end/images/shape/1-shapes.png" alt="وان سئو سایت" class="shape-one shape-five">
        <img src="/front-end/images/shape/2-shapes.png" alt="وان سئو سایت" class="shape-two">
        <img src="/front-end/images/shape/3-shapes.png" alt="وان سئو سایت" class="shape-three">
        <img src="/front-end/images/shape/4-shapes.png" alt="وان سئو سایت" class="shape-four">
        <div class="container">
            <div class="theme-title-one text-center">
                <div class="upper-title">پلن قیمت ها</div>
                <h2 class="main-title">با کمترین هزینه بهترین نتیجه را دریافت کنید.</h2>
            </div> <!-- /.theme-title-one -->
        </div> <!-- /.container -->

        <div class="pricing-tab-menu mt-70">
            <div class="nav-wrapper">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#month">ماهانه</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#annual">سالیانه</a></li>
                </ul>
            </div>
            <p>20 درصد تخیف در قیمت های سالیانه</p>
        </div> <!-- /.pricing-tab-menu -->

        <div class="tab-content">
            <!-- ^^^^^^^^^^^^^^^^^^^^^ Monthly ^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
            <div id="month" class="tab-pane fade show active">
                <div class="table-wrapper">
                    <div class="inner-table clearfix">
                        <ul class="pr-list-text">
                            <li>بخش آنالیز</li>
                            <li>سئو تکنیکال</li>
                            <li>سئو داخلی</li>
                            <li>سئو خارجی</li>
                            <li>تعداد سایت</li>
                        </ul> <!-- /.pr-list-text -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price">0 تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه رایگان</h4>
                                <div class="package">آنالیز و بررسی</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلی</div>
                                    <i class="icon flaticon-cancel none"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-cancel none"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>1 سایت </i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="{{route('register')}}" class="choose-button line-button-two">ثبت نام</a>
                            </div>
                        </div> <!-- /.pr-column -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price">180 هزار تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه شخصی</h4>
                                <div class="package">تمامی امکانات</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>1 سایت</i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="#" class="choose-button line-button-two">ثبت سفارش</a>
                            </div>
                        </div> <!-- /.pr-column -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price">350 هزار تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه سازمانی</h4>
                                <div class="package">تمامی امکانات</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلیr</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>3 سایت</i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="#" class="choose-button line-button-two">ثبت سفارش</a>
                            </div>
                        </div> <!-- /.pr-column -->
                    </div> <!-- /.inner-table -->
                </div> <!-- /.table-wrapper -->
            </div> <!-- /#month -->

            <!-- ^^^^^^^^^^^^^^^^^^^^^ Yearly ^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
            <div id="annual" class="tab-pane fade">
                <div class="table-wrapper">
                    <div class="inner-table clearfix">
                        <ul class="pr-list-text">
                            <li>بخش آنالیز</li>
                            <li>سئو تکنیکال</li>
                            <li>سئو داخلی</li>
                            <li>سئو خارجی</li>
                            <li>تعداد سایت</li>
                        </ul> <!-- /.pr-list-text -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price">0 تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه رایگان</h4>
                                <div class="package">آنالیز و بررسی</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلی</div>
                                    <i class="icon flaticon-cancel none"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-cancel none"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>1 سایت </i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="#" class="choose-button line-button-two">ثبت نام</a>
                            </div>
                        </div> <!-- /.pr-column -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price"> 1.700.000 تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه شخصی</h4>
                                <div class="package">تمامی امکانات</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>1 سایت</i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="#" class="choose-button line-button-two">ثبت سفارش</a>
                            </div>
                        </div> <!-- /.pr-column -->
                        <div class="pr-column">
                            <div class="pr-header">
                                <div class="price">3.300.000 تومان<span>/ماهیانه</span></div>
                                <h4 class="title">نسخه سازمانی</h4>
                                <div class="package">تمامی امکانات</div>
                            </div> <!-- /.pr-header -->
                            <ul class="pr-body">
                                <li>
                                    <div class="pr-text">بخش آنالیز</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو تکنیکال</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو داخلیr</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">سئو خارجی</div>
                                    <i class="icon flaticon-tick available"></i>
                                </li>
                                <li>
                                    <div class="pr-text">تعداد سایت</div>
                                    <i>3 سایت</i>
                                </li>
                            </ul>
                            <div class="pr-footer">
                                <a href="#" class="choose-button line-button-two">ثبت سفارش</a>
                            </div>
                        </div> <!-- /.pr-column -->
                    </div> <!-- /.inner-table -->
                </div> <!-- /.table-wrapper -->
            </div> <!-- /#annual -->
        </div>

    </div> <!-- /.agn-our-pricing -->


    <!--
        =====================================================
            Testimonial
        =====================================================
        -->
    <div class="agn-testimonial">
        <div class="shape-box">
            <img src="/front-end/images/shape/4.png" alt="وان سئو سایت">
            <img src="/front-end/images/home/2.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/home/3.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/home/4.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/home/5.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/home/6.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/home/7.jpg" alt="وان سئو سایت" class="people">
            <img src="/front-end/images/shape/shape-6.svg" alt="وان سئو سایت" class="shape-one">
        </div>
        <img src="/front-end/images/shape/shape-66.svg" alt="وان سئو سایت" class="shape-two" data-aos="fade-right">
        <div class="container clearfix">
            <div class="main-content">
                <div class="theme-title-one">
                    <div class="upper-title">نظرات کاربران</div>
                    <h2 class="main-title">کاربران وان سئو چه می گویند؟</h2>
                </div> <!-- /.theme-title-one -->

                <div class="agn-testimonial-slider">
                    <div class="item">
                        <p>هر چقدر هم تو سئو قوی باشی نمی تونی به اندازه این هوش مصنوعی دقیق فعالیت های روزانه سئو رو
                            انجام بدی واقعا فوق العاده هست. ممنون از سازنده هاش.</p>
                        <div class="author-info clearfix">
                            <img src="/front-end/images/home/2.jpg" alt="وان سئو سایت" class="author-img">
                            <div class="name-info">
                                <h6 class="name">رضا عبدی</h6>
                                <span>سئو کار</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p>همیشه مشکل با سئو سایت خودم داشتم به شرکت های و اشخاص مختلفی هم سپرده بودم اما متاسفانه نتیجه
                            دلخواه رو نمی گرفتم الان با کمک این برنامه با اینکه اطلاعات زیادی از سئو نداشتم تونستم نتایج
                            خوبی از سایتم بگیرم.</p>
                        <div class="author-info clearfix">
                            <img src="/front-end/images/home/3.jpg" alt="وان سئو سایت" class="author-img">
                            <div class="name-info">
                                <h6 class="name">حمید کردی</h6>
                                <span>تابلوساز</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.agn-testimonial-slider -->
            </div> <!-- /.main-content -->
        </div> <!-- /.container -->
    </div> <!-- /.agn-testimonial -->


    <!--Faq & Question-->
    <div class="element-section mb-150">
        <div class="container">
            <div class="element-tile-two">سوالات متداول</div>
            <div class="row justify-content-md-center">
                <div class="col-lg-7 col-md-9">
                    <div class="faq-tab-wrapper">
                        <div class="faq-panel">
                            <div class="panel-group theme-accordion" id="accordion">
                                <div class="panel">
                                    <div class="panel-heading active-panel">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                برای کار با وان سئو باید مهارت های سئو هم داشت؟</a>
                                        </h6>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <p>هیچ گونه مهارت در زمینه سئو سایت نیاز نیست خود برنامه به صورت هوشمند به
                                                شما می گوید چه کارهایی را باید انجام دهید و برای تمامی بخش ها نیسز فایل
                                                راهنمای کامل وجود دارد.</p>
                                            <p>همچنین مشاورین ما در وان سئو همیشه در خدمت شما خواهند بود. </p>
                                        </div>
                                    </div>
                                </div> <!-- /panel 1 -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                چطور این برنامه می تونه تشخیص بده سایت به چه چیزهایی نیاز داره برای
                                                سئو؟</a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>اپ وان سئو در ابتدا ایرادات کلی سایت شما رو آنالیز می کنه و میگه و بعد به
                                                شما میگه چطور این ایرادات رو برطرف کنید. اما بخش مهمش فعالیت های سئو بنا
                                                بر استراتژی ها سئویی که ما از قبل به هوش مصنوعی وان سئو دادیم به شما
                                                برنامه های دقیقی ارائه میکنه </p>
                                            <p>از اونجایی که این هوش مصنوعی دائم در حال یاد گرفتنه پس میتونه خیلی بهتر
                                                از یک شخص عمل کنه</p>
                                        </div>
                                    </div>
                                </div> <!-- /panel 2 -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                برنامه های سئو شامل لینک سازی هم میشه؟</a>
                                        </h6>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>بله ! یکی از مهمترین بخش های سامانه هوشمند وان سئو لینک سازی هم داخلی
                                                سایت و هم خارجی سایته که با بهترین و بروزترین استراتژی ها به شما دقیقا
                                                میگه چطوری لینک سازی کنین. </p>
                                            <p>An utinam consulatu eos, est facilis suscipiantur te, vim te iudico
                                                delenit voluptatibus. </p>
                                        </div>
                                    </div>
                                </div> <!-- /panel 3 -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                چه تضمینی برای دریافت رتبه کلمات در گوگل هست؟</a>
                                        </h6>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>ما نمی تونیم تضمین برای کسب رتبه خوب برای کلمات کلیدی سایت شما تو گوگل
                                                بدیم اما به شما می تونیم اطمینان بدیم که اگه طبق برنامه ارائه شده و
                                                هوشمند عمل کنید بدون شک رتبه کلمات شما جایگاه بسیار خوبی پیدا خواهد
                                                نمود.</p>
                                            <p>An utinam consulatu eos, est facilis suscipiantur te, vim te iudico
                                                delenit voluptatibus. </p>
                                        </div>
                                    </div>
                                </div> <!-- /panel 4 -->
                            </div> <!-- end #accordion -->
                        </div> <!-- End of .faq-panel -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Footer-->
    <footer class="theme-footer-four">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 col-12 gallery-widget aos-init aos-animate" data-aos="fade-up">
                        <a href="#" class="logo"><img src="/front-end/images/logo300.png"
                                                               alt="وان سئو سایت"></a>
                        <ul class="clearfix">
                            <li><a href="#"><img src="/front-end/images/home/14.jpg" alt="وان سئو سایت"></a></li>
                            <li><a href="#"><img src="/front-end/images/home/15.jpg" alt="وان سئو سایت"></a></li>
                            <li><a href="#"><img src="/front-end/images/home/16.jpg" alt="وان سئو سایت"></a></li>
                        </ul>

                    </div> <!-- /.gallery-widget -->
                    <div class="col-lg-2 col-sm-6 col-12 footer-list aos-init aos-animate" data-aos="fade-up">
                        <h5 class="title">سایر خدمات</h5>
                        <ul>
                            <li><a href="https://dmfx.ir/web-design/">طراحی سایت</a></li>
                            <li><a href="https://dmfx.ir/seo/">سئو سایت</a></li>
                            <li><a href="https://panel.dmfx.ir/index.php?rp=/store/khdmt-rpwrtj-aghy">رپورتاژ و لینک</a>
                            </li>
                            <li><a href="https://panel.dmfx.ir/store/srwys-hst-yrn">هاست و دامنه</a></li>
                            <li><a href="http://smsfx.ir/">پنل پیامکی</a></li>
                        </ul>
                    </div> <!-- /.footer-recent-post -->
                    <div class="col-lg-2 col-sm-6 col-12 footer-list aos-init aos-animate" data-aos="fade-up">
                        <h5 class="title">لینک های مفید</h5>
                        <ul>
                            <li><a href="https://www.1seo.site/about-us">درباره ما</a></li>
                            <li><a href="https://www.1seo.site/contact-us">تماس با ما</a></li>
                            <li><a href="https://www.1seo.site/blog">پایگاه دانش</a></li>
                            <li><a href="https://imag.blog/">مجله اینترنتی</a></li>
                            <li><a href="https://panel.dmfx.ir/index.php?rp=/store/sfrsh-twlyd-mhtw">تولید محتوا</a>
                            </li>
                        </ul>
                    </div> <!-- /.footer-list -->
                    <div class="col-lg-3 col-sm-6 col-12 footer-information aos-init aos-animate" data-aos="fade-up">
                        <h5 class="title">اطلاعات تماس</h5>
                        <p><a href="#" class="email">info@1seo.site</a></p>
                        <p><a href="#" class="phone">02166095138</a></p>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/dmfx.ir"><i class="fa fa-facebook"
                                                                              aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/dmfxir"><i class="fa fa-twitter"
                                                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/faragostar-agency-a65111213"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://instagram.com/dmfx.ir"><i class="fa fa-instagram"
                                                                           aria-hidden="true"></i></a></li>
                        </ul>
                        <ul class="social-icon pading-social">
                            <li><a href="http:wa.me/989058572561"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://t.me/dmfxir"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/dmfxir/"><i class="fa fa-pinterest"
                                                                               aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCygDyqJblrs2PGjWIlJ97TQ"><i
                                        class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-footer -->

        <div class="container ">
            <div class="bottom-footer">
                <div class="clearfix footer-index">
                    <p> کلیه حقوق این سایت متعلق به آژانس دیجیتال مارکتینگ فراگستر می باشد. هرگونه کپی برداری پیگرد
                        قانونی دارد. </p>
                </div>
            </div> <!-- /.bottom-footer -->
        </div>
    </footer>


    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>


    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="/front-end/vendor/jquery.2.2.3.min.js"></script>
    <!-- Popper js -->
    <script src="/front-end/vendor/popper.js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/front-end/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Partical js -->
    <script src="/front-end/vendor/particles.min.js"></script>
    <!-- menu  -->
    <script src="/front-end/vendor/mega-menu/assets/js/custom.js"></script>
    <!-- AOS js -->
    <script src="/front-end/vendor/aos-next/dist/aos.js"></script>
    <!-- WOW js -->
    <script src="/front-end/vendor/WOW-master/dist/wow.min.js"></script>
    <!-- owl.carousel -->
    <script src="/front-end/vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- js count to -->
    <script src="/front-end/vendor/jquery.appear.js"></script>
    <script src="/front-end/vendor/jquery.countTo.js"></script>
    <!-- Fancybox -->
    <script src="/front-end/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <!-- Animated Headline -->
    <script src="/front-end/vendor/animated-headline-master/main.js"></script>
    <!-- isotop -->
    <script src="/front-end/vendor/isotope.pkgd.min.js"></script>

    <!-- Language js -->
    <script src="/front-end/https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Theme js -->
    <script src="/front-end/js/lang.js"></script>
    <script src="/front-end/js/theme.js"></script>

    <script src="{{asset('js/app.js')}}"></script>
</div> <!-- /.main-page-wrapper -->
<!---start GOFTINO code--->
</body>
</html>
