@extends('layouts.app')

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row">
            <div class="divider">
                <div class="divider-text">سئو تکنیکال</div>
            </div>
            <div class="container">
                @if($titleNum == 3 || $titleNum == 0)
                    {{--title--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">عنوان</h4>
                                <a onclick="myFunction1()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Title</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>
                                        {{$siteTitle}}
                                    </p>
                                    <div class="{{$titleCssStyle}} p-1">

                                        <p><i class="feather icon-info"></i> {{$dataTitle}} <span style="float: left">امتیاز : {{$titleNum}} از 5</span>
                                        </p>
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
                                    <div id="detail1" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($descNum == 3 || $descNum == 0)
                    {{--description--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>توضیحات</h4>
                                <a onclick="myFunction2()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Description</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>
                                        {{$description}}
                                    </p>

                                    <div class="{{$descCssStyle}} p-1">

                                        <p><i class="feather icon-info"></i> {{$dataDesc}} <span style="float: left">امتیاز : {{$descNum}} از 5</span>
                                        </p>
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
                                    <div id="detail2" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($altNum == 3 || $altNum == 0)
                    {{--alt image--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Alt تصویر</h4>
                                <a onclick="myFunction5()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Alt Picture</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$checkMissingAlt}} p-1">

                                        <p> {{$missingAltImage}} <span
                                                style="float: left">امتیاز : {{$altNum}} از 5</span>
                                        </p>
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
                                    <div id="detail5" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($ratioNum == 3 || $ratioNum == 0)
                    {{--ratio--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>نسبت متن به کد</h4>
                                <a onclick="myFunction6()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Text to Code</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$checkRatio}} p-1">

                                        <p><i class="feather icon-info"></i> نسبت متن به کد صفحه شما {{$getRatio}} (سایز
                                            متن
                                            صفحه: {{$textSize}} و سایز کد های صفحه: {{$ratioPageSize}}) <span
                                                style="float: left">امتیاز : {{$ratioNum}} از 5</span>
                                        </p>
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
                                    <div id="detail6" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($gzipNum == 0)
                    {{--gzip--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>GZIP فشرده سازی</h4>
                                <a onclick="myFunction7()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">GZIP</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="alert alert-success p-1">
                                        <p><i class="feather icon-info"></i> {{$gzip}} <span style="float: left">امتیاز : {{$gzipNum}} از 4</span>
                                        </p>
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
                                    <div id="detail7" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($robotsNum == 3 || $robotsNum == 0)
                    {{--robot--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>فایل ربات</h4>
                                <a onclick="myFunction11()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Robot File</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$check_robots_txt}} p-1">
                                        <p>{{$robots}} <span style="float: left">امتیاز : {{$robotsNum}} از 5</span>
                                        </p>
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
                                    <div id="detail11" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($sitemapNum == 3 || $sitemapNum == 0)
                    {{--sitemap--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>نقشه سایت</h4>
                                <a onclick="myFunction12()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Sitemap.xml</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$check_xml_sitemaps}} p-1">
                                        <p>{{$site_map}} <span style="float: left">امتیاز : {{$sitemapNum}} از 5</span>
                                        </p>
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
                                    <div id="detail12" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($favNum == 0)
                    {{--favicon--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                آیکون سایت
                                <a onclick="myFunction16()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Favicon</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{$favicon}}"
                                         alt="{{substr(request()->url(), strrpos(request()->url(), 'home/' )+5)}}">
                                    <p>عالی است. وب سایت شما Favicon دارد :)</p>
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
                                    <div id="detail16" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($loadTimeNum == 3 || $loadTimeNum == 0)
                    {{--load time--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>زمان بارگذاری</h4>
                                <a onclick="myFunction18()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Load Time</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$check_load_time}} p-1">

                                        <p><i class="feather icon-info"></i> {{$response_time}} <span
                                                style="float: left">امتیاز : {{$loadTimeNum}} از 5</span>
                                        </p>
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
                                    <div id="detail18" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($sslNum == 3 || $sslNum == 0)
                    {{--ssl--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> گواهی اس اس ال</h4>
                                <a onclick="myFunction20()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">HTTPS(SSL)</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$check_https}} p-1">

                                        <p><i class="feather icon-info"></i> {{$is_https}} <span style="float: left">امتیاز : {{$sslNum}} از 5</span>
                                        </p>
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
                                    <div id="detail20" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($analyticNum == 0)
                    {{--google analytic--}}
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>گوگل آنالیتیکس</h4>
                                <a onclick="myFunction27()"><i class="feather icon-info"></i></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Google Analytics</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="{{$check_analytics}} p-1">

                                        <p><i class="feather icon-info"></i> {{$analytics}} <span style="float: left">امتیاز : {{$analyticNum}} از 4</span>
                                        </p>
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
                                    <div id="detail27" style="display: none" class="alert alert-primary mb-2"
                                         role="alert">
                                        سلام خوبی؟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
