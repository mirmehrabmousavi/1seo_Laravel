@extends('layouts.app')

@section('content')
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none">
                                        <h3 class="user-name text-bold-600">{{auth()->user()->url}}</h3>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item p-1" href="#">Tippler.ir</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item p-1" href="#"> افزودن سایت</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="جستجو" tabindex="-1"
                                       data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                               data-toggle="dropdown"><i
                                    class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">1</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">1 پیام جدید</h3><span
                                            class="notification-title">اعلان ها</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">درخواست جدیدی دارید!</h6><small
                                                    class="notification-text"> امشب میری بیرون؟</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 ساعت پیش
                                                </time>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                                                    href="javascript:void(0)">نمایش تمام اعلان ها</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">مهراب موسوی</span><span
                                        class="user-status">در دسترس</span></div>
                                <span><img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg"
                                           alt="avatar"
                                           height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="feather icon-user"></i>ویرایش پروفایل</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="feather icon-power"></i> خروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span>
                </div>
            </a></li>
    </ul>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">آنالیز</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>بتا ورژن</span>
                </li>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-layout"></i><span class="menu-title"
                                                                                                  data-i18n="Content">سایت ها</span></a>
                    <ul class="menu-content" style="">
                        <li class="active"><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                                data-i18n="Grid">{{auth()->user()->url}}</span></a>
                        </li>
                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                          data-i18n="Grid">tippler.ir</span></a>
                        </li>
                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                          data-i18n="Typography">available.ir</span></a>
                        </li>
                        <li class=""><a href="#"><i class="feather icon-plus"></i><span class="menu-item"
                                                                                        data-i18n="Helper Classes">افزودن سایت</span></a>
                        </li>
                    </ul>
                </li>
                <li class="active nav-item"><a href="#"><i class="feather icon-database"></i><span class="menu-title"
                                                                                                   data-i18n="Email">آنالیز</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card bg-analytics text-white" style="height: 600px">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="/app-assets/images/elements/decore-left.png" class="img-left"
                                             alt="card-img-left">
                                        <img src="/app-assets/images/elements/decore-right.png" class="img-right"
                                             alt="card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">دموی سایت</h1>
                                            <p class="m-auto w-75 mb-2">نمایش دموی سایت انالیز شده</p>
                                            <img
                                                src="http://free.pagepeeker.com/v2/thumbs.php?size=l&url={{auth()->user()->url}}"
                                                class="img-fluid" alt="{{auth()->user()->url}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card" style="height: 583.562px;">
                                <div class="card-header">
                                    <h4 class="card-title">Activity Timeline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Client Meeting</p>
                                                    <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                                                </div>
                                                <small class="text-muted">25 mins ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Email Newsletter</p>
                                                    <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                                                </div>
                                                <small class="text-muted">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Plan Webinar</p>
                                                    <span
                                                        class="font-small-3">Candy ice cream cake. Halvah gummi bears</span>
                                                </div>
                                                <small class="text-muted">20 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Launch Website</p>
                                                    <span class="font-small-3">Candy ice cream cake. </span>
                                                </div>
                                                <small class="text-muted">25 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Marketing</p>
                                                    <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi bears.</span>
                                                </div>
                                                <small class="text-muted">28 days ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title text-center">سلامت سئو سایت</h4>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">My Text</div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                                <small>Tickets</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">New Tickets</p>
                                                <span class="font-large-1">29</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Open Tickets</p>
                                                <span class="font-large-1">63</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Response Time</p>
                                                <span class="font-large-1">1d</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">نمایش کل خطا ها</h4>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">My Text</div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0" style="position: relative;">
                                        <div id="customer-chart" style="min-height: 287.805px;">
                                            <div id="apexchartsjm2r4xvr"
                                                 class="apexcharts-canvas apexchartsjm2r4xvr light"
                                                 style="width: 459px; height: 287.805px;">
                                                <svg id="SvgjsSvg1866" width="459" height="287.8048780487805"
                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                     style="background: transparent;">
                                                    <g id="SvgjsG1868" class="apexcharts-inner apexcharts-graphical"
                                                       transform="translate(94, 0)">
                                                        <defs id="SvgjsDefs1867">
                                                            <clipPath id="gridRectMaskjm2r4xvr">
                                                                <rect id="SvgjsRect1869" width="278" height="300"
                                                                      x="-2.5"
                                                                      y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                      stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskjm2r4xvr">
                                                                <rect id="SvgjsRect1870" width="275" height="297" x="-1"
                                                                      y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                      stroke-width="0" stroke="none"
                                                                      stroke-dasharray="0"></rect>
                                                            </clipPath>
                                                            <radialGradient id="SvgjsRadialGradient1876"
                                                                            gradientUnits="userSpaceOnUse" cx="136.5"
                                                                            cy="147.5" r="133.90243902439025">
                                                                <stop id="SvgjsStop1877" stop-opacity="1"
                                                                      stop-color="rgba(115,103,240,1)"
                                                                      offset="0"></stop>
                                                                <stop id="SvgjsStop1878" stop-opacity="1"
                                                                      stop-color="rgba(169,162,246,1)"
                                                                      offset="1"></stop>
                                                                <stop id="SvgjsStop1879" stop-opacity="1"
                                                                      stop-color="rgba(169,162,246,1)"
                                                                      offset="1"></stop>
                                                            </radialGradient>
                                                            <radialGradient id="SvgjsRadialGradient1882"
                                                                            gradientUnits="userSpaceOnUse" cx="136.5"
                                                                            cy="147.5" r="133.90243902439025">
                                                                <stop id="SvgjsStop1883" stop-opacity="1"
                                                                      stop-color="rgba(255,159,67,1)" offset="0"></stop>
                                                                <stop id="SvgjsStop1884" stop-opacity="1"
                                                                      stop-color="rgba(255,192,133,1)"
                                                                      offset="1"></stop>
                                                                <stop id="SvgjsStop1885" stop-opacity="1"
                                                                      stop-color="rgba(255,192,133,1)"
                                                                      offset="1"></stop>
                                                            </radialGradient>
                                                            <radialGradient id="SvgjsRadialGradient1888"
                                                                            gradientUnits="userSpaceOnUse" cx="136.5"
                                                                            cy="147.5" r="133.90243902439025">
                                                                <stop id="SvgjsStop1889" stop-opacity="1"
                                                                      stop-color="rgba(234,84,85,1)" offset="0"></stop>
                                                                <stop id="SvgjsStop1890" stop-opacity="1"
                                                                      stop-color="rgba(242,146,146,1)"
                                                                      offset="1"></stop>
                                                                <stop id="SvgjsStop1891" stop-opacity="1"
                                                                      stop-color="rgba(242,146,146,1)"
                                                                      offset="1"></stop>
                                                            </radialGradient>
                                                        </defs>
                                                        <g id="SvgjsG1872" class="apexcharts-pie"
                                                           data:innerTranslateX="0"
                                                           data:innerTranslateY="-25">
                                                            <g id="SvgjsG1873" transform="translate(0, -5) scale(1)">
                                                                <g id="SvgjsG1874" class="apexcharts-slices">
                                                                    <g id="SvgjsG1875"
                                                                       class="apexcharts-series apexcharts-pie-series"
                                                                       seriesName="New" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1880"
                                                                              d="M 136.5 13.597560975609753 A 133.90243902439025 133.90243902439025 0 1 1 39.47404931191406 239.78124440943384 L 136.5 147.5 L 136.5 13.597560975609753"
                                                                              fill="url(#SvgjsRadialGradient1876)"
                                                                              fill-opacity="1" stroke="#ffffff"
                                                                              stroke-opacity="1" stroke-linecap="butt"
                                                                              stroke-width="5" stroke-dasharray="0"
                                                                              class="apexcharts-pie-area apexcharts-pie-slice-0"
                                                                              index="0" j="0"
                                                                              data:angle="226.43573381950776"
                                                                              data:startAngle="0" data:strokeWidth="5"
                                                                              data:value="690"
                                                                              data:pathOrig="M 136.5 13.597560975609753 A 133.90243902439025 133.90243902439025 0 1 1 39.47404931191406 239.78124440943384 L 136.5 147.5 L 136.5 13.597560975609753"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1881"
                                                                       class="apexcharts-series apexcharts-pie-series"
                                                                       seriesName="Returning" rel="2"
                                                                       data:realIndex="1">
                                                                        <path id="SvgjsPath1886"
                                                                              d="M 39.47404931191406 239.78124440943384 A 133.90243902439025 133.90243902439025 0 0 1 35.600645488235514 59.4705535869399 L 136.5 147.5 L 39.47404931191406 239.78124440943384"
                                                                              fill="url(#SvgjsRadialGradient1882)"
                                                                              fill-opacity="1" stroke="#ffffff"
                                                                              stroke-opacity="1" stroke-linecap="butt"
                                                                              stroke-width="5" stroke-dasharray="0"
                                                                              class="apexcharts-pie-area apexcharts-pie-slice-1"
                                                                              index="0" j="1"
                                                                              data:angle="84.6672743846855"
                                                                              data:startAngle="226.43573381950776"
                                                                              data:strokeWidth="5" data:value="258"
                                                                              data:pathOrig="M 39.47404931191406 239.78124440943384 A 133.90243902439025 133.90243902439025 0 0 1 35.600645488235514 59.4705535869399 L 136.5 147.5 L 39.47404931191406 239.78124440943384"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1887"
                                                                       class="apexcharts-series apexcharts-pie-series"
                                                                       seriesName="Referrals" rel="3"
                                                                       data:realIndex="2">
                                                                        <path id="SvgjsPath1892"
                                                                              d="M 35.600645488235514 59.4705535869399 A 133.90243902439025 133.90243902439025 0 0 1 136.47662961574437 13.597563015060501 L 136.5 147.5 L 35.600645488235514 59.4705535869399"
                                                                              fill="url(#SvgjsRadialGradient1888)"
                                                                              fill-opacity="1" stroke="#ffffff"
                                                                              stroke-opacity="1" stroke-linecap="butt"
                                                                              stroke-width="5" stroke-dasharray="0"
                                                                              class="apexcharts-pie-area apexcharts-pie-slice-2"
                                                                              index="0" j="2"
                                                                              data:angle="48.89699179580674"
                                                                              data:startAngle="311.10300820419326"
                                                                              data:strokeWidth="5" data:value="149"
                                                                              data:pathOrig="M 35.600645488235514 59.4705535869399 A 133.90243902439025 133.90243902439025 0 0 1 136.47662961574437 13.597563015060501 L 136.5 147.5 L 35.600645488235514 59.4705535869399"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1893" x1="0" y1="0" x2="273" y2="0"
                                                              stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                              class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1894" x1="0" y1="0" x2="273" y2="0"
                                                              stroke-dasharray="0" stroke-width="0"
                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip dark">
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(115, 103, 240);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 159, 67);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(234, 84, 85);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 502px; height: 289px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush customer-info">
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600">New</span>
                                            </div>
                                            <div class="product-result">
                                                <span>890</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600">Returning</span>
                                            </div>
                                            <div class="product-result">
                                                <span>258</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                                <span class="text-bold-600">Referrals</span>
                                            </div>
                                            <div class="product-result">
                                                <span>149</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>MOZ</h4>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">My Text</div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="product-order-chart" class="mb-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">اطلاعات MOZ</div>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">My Text</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="font-weight-bold">تعداد بک لینک ها</td>
                                            <td>
                                                <div class="badge badge-primary badge-md">{{$externalLinks}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">پیج اتوریتی</td>
                                            <td>
                                                <div class="badge badge-primary badge-md">{{$pageAuthority}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">دامین اتوریتی</td>
                                            <td>
                                                <div class="badge badge-primary badge-md">{{$domainAuthority}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">سرعت سایت</td>
                                            <td>
                                                <div class="badge badge-primary badge-md">{{$speed}}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">اطلاعات کلی</div>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">Basic Info</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="font-weight-bold"> رتبه Alexa</td>
                                            <td>
                                                <div
                                                    class="badge badge-primary badge-md mr-1 mb-1">{{$alexa_rank}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">رتبه صفحه گوگل</td>
                                            <td>
                                                <div class="badge badge-primary badge-md mr-1 mb-1">NO DATA</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">سن دامنه</td>
                                            <td>
                                                <div class="badge badge-primary badge-md mr-1 mb-1">{{$domainAge}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">بررسی انلاین بودن سرور</td>
                                            <td>
                                                <div
                                                    class="badge badge-primary badge-md mr-1 mb-1">{!! $online !!}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">عنوان</h4>
                                        <a onclick="myFunction1()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4>
                                                {{$siteTitle}}
                                            </h4>
                                            <div class="{{$cssStyle}} p-1">

                                                <p><i class="feather icon-info"></i>  {{$dataTitle}}</p>
                                            </div>
                                            <div class="modal-primary mr-1 mb-1 d-inline-block">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                        class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light"
                                                        data-toggle="modal" data-target="#primary">
                                                    درخواست رفع خطا
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="primary" tabindex="-1"
                                                     role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title" id="myModalLabel160">درخواست رفع
                                                                    خطا</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                درخواست درخواست
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="{{route('request')}}"
                                                                        class="btn btn-primary waves-effect waves-light"
                                                                        data-dismiss="modal">تایید
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-success mr-1 mb-1 d-inline-block">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                        class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                                        data-toggle="modal" data-target="#success">
                                                    راهنمای رفع خطا
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success" tabindex="-1"
                                                     role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-success white">
                                                                <h5 class="modal-title" id="myModalLabel110">راهنمای رفع
                                                                    خطا</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                درخواست درخواست
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="detail1" style="display: none" class="alert alert-success mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        توصیحات
                                        <a onclick="myFunction2()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail2" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        پیش نمایش گوگل
                                        <a onclick="myFunction3()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail3" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        عناوین
                                        <a onclick="myFunction4()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail4" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Alt تصویر
                                        <a onclick="myFunction5()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail5" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        نسبت متن به کد
                                        <a onclick="myFunction6()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail6" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        GZIP فشرده سازی
                                        <a onclick="myFunction7()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail7" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        IP Canonicalization
                                        <a onclick="myFunction8()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail8" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        امضای سروز
                                        <a onclick="myFunction9()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail9" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        URL وضیعت
                                        <a onclick="myFunction10()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail10" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        قایل ربات
                                        <a onclick="myFunction11()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail11" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        نقشه سایت
                                        <a onclick="myFunction12()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail12" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        iFrame
                                        <a onclick="myFunction13()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail13" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Flash فایل
                                        <a onclick="myFunction14()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail14" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        طول دامنه
                                        <a onclick="myFunction15()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail15" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        آیکون سایت
                                        <a onclick="myFunction16()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail16" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        حجم صفحه
                                        <a onclick="myFunction17()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail17" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        زمان بارگذاری
                                        <a onclick="myFunction18()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail18" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        زبان سایت
                                        <a onclick="myFunction19()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail19" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        گواهی اس اس ال
                                        <a onclick="myFunction20()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail20" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        قابلیت چاپ
                                        <a onclick="myFunction21()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail21" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        امنیت ایمیل
                                        <a onclick="myFunction22()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail22" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        مرور ایمن
                                        <a onclick="myFunction23()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail23" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        جداول HTML تو در تو
                                        <a onclick="myFunction24()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail24" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        آدرس سرور
                                        <a onclick="myFunction25()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail25" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        نکات سرعت
                                        <a onclick="myFunction26()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail26" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        گوگل آنالیتیکس
                                        <a onclick="myFunction27()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail27" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        نوع سند
                                        <a onclick="myFunction28()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail28" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        رمزگذاری سایت
                                        <a onclick="myFunction29()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail29" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        HTML منسوخ شئه
                                        <a onclick="myFunction30()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail30" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        حجم ترافیک
                                        <a onclick="myFunction31()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail31" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        داده های اجتماعی
                                        <a onclick="myFunction32()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail32" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        نمایش موبایل
                                        <a onclick="myFunction33()"><i class="feather icon-info"></i></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">My Text</div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>
                                                اژانس دیجیتال مارکتینگ فراگستر
                                            </p>
                                            <div id="detail33" style="display: none" class="alert alert-primary mb-2"
                                                 role="alert">
                                                سلام خوبی؟
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-right d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a
                    class="text-bold-800 grey darken-2" href="https://dmfx.ir" target="_blank">DMFX.iR</a>, All rights Reserved</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i>
            </button>
        </p>
    </footer>
    <!-- END: Footer-->
@endsection

@section('script')
    <script>
        var $primary = '#7367F0';
        var $danger = '#EA5455';
        var $warning = '#FF9F43';
        var $info = '#0DCCE1';
        var $primary_light = '#8F80F9';
        var $warning_light = '#FFC085';
        var $danger_light = '#f29292';
        var $info_light = '#1edec5';
        var $strok_color = '#b9c3cd';
        var $label_color = '#e7eef7';
        var $white = '#fff';


        var speedORG = {{$speed}};
        var speed = 0;

        if (speedORG <= 1) {
            speed = 95
        } else if (speedORG <= 1.5) {
            speed = 90
        } else if (speedORG <= 2) {
            speed = 80
        } else if (speedORG <= 2.5) {
            speed = 70
        } else if (speedORG <= 3) {
            speed = 60
        } else if (speedORG <= 3.5) {
            speed = 50
        } else if (speedORG <= 4) {
            speed = 40
        } else if (speedORG <= 5) {
            speed = 30
        } else if (speedORG <= 6) {
            speed = 20
        } else if (speedORG >= 7) {
            speed = 10
        }

        var productChartoptions = {
            chart: {
                height: 325,
                type: 'radialBar',
            },
            colors: [$primary, $warning, $danger],
            fill: {
                type: 'gradient',
                gradient: {
                    // enabled: true,
                    shade: 'dark',
                    type: 'vertical',
                    shadeIntensity: 0.5,
                    gradientToColors: [$primary_light, $warning_light, $danger_light],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                },
            },
            stroke: {
                lineCap: 'round'
            },
            plotOptions: {
                radialBar: {
                    size: 165,
                    hollow: {
                        size: '20%'
                    },
                    track: {
                        strokeWidth: '100%',
                        margin: 15,
                    },
                    dataLabels: {
                        name: {
                            fontSize: '18px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: '{{$url}}',

                            formatter: function (w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return ''
                            }
                        }
                    }
                }
            },
            series: [speed, {{$pageAuthority}}, {{$domainAuthority}}],
            labels: ['Site Speed', 'DomainAuthority', 'PageAuthority'],

        }


        var productChart = new ApexCharts(
            document.querySelector("#product-order-chart"),
            productChartoptions
        );

        productChart.render();
    </script>
@endsection
