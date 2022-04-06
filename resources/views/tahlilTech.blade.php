@extends('layouts.app')

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card bg-analytics text-white" style="height: 600px">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-white">دموی سایت</h1>
                                <p class="m-auto w-75 mb-2">نمایش دموی سایت انالیز شده</p>
                                <img
                                    src="http://free.pagepeeker.com/v2/thumbs.php?size=l&url={{$url}}"
                                    class="img-fluid"
                                    alt="{{$url}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4 class="card-title">سلامت سئو سایت</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                    <h1 class="font-large-2 text-bold-700 mt-2 mb-0">21</h1>
                                    <small>موارد بررسی شده</small>
                                </div>
                                <div class="col-sm-10 col-12 d-flex justify-content-center">
                                    <div id="apexchartsxpd3sobmj"
                                         class="apexcharts-canvas apexchartsxpd3sobmj light"
                                         style="width: 300px; height: 290px;">
                                        <svg id="SvgjsSvg1104" width="300" height="290"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(44.5, 20)">
                                                <defs id="SvgjsDefs1105">
                                                    <clipPath id="gridRectMaskxpd3sobmj">
                                                        <rect id="SvgjsRect1107" width="215" height="237" x="-1"
                                                              y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                              stroke-width="0" stroke="none"
                                                              stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskxpd3sobmj">
                                                        <rect id="SvgjsRect1108" width="215" height="237" x="-1"
                                                              y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                              stroke-width="0" stroke="none"
                                                              stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1114" x1="0" y1="1"
                                                                    x2="1" y2="1">
                                                        <stop id="SvgjsStop1115" stop-opacity="1"
                                                              stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop1116" stop-opacity="1"
                                                              stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1117" stop-opacity="1"
                                                              stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1125" x1="0" y1="1"
                                                                    x2="1" y2="1">
                                                        <stop id="SvgjsStop1126" stop-opacity="1"
                                                              stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop1127" stop-opacity="1"
                                                              stop-color="rgba(234,84,85,1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1128" stop-opacity="1"
                                                              stop-color="rgba(234,84,85,1)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="SvgjsG1110" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1111">
                                                        <g id="SvgjsG1112" class="apexcharts-tracks">
                                                            <g id="SvgjsG1113"
                                                               class="apexcharts-radialbar-track apexcharts-track"
                                                               rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                      d="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 163.0625 215.4691238031146"
                                                                      fill="none" fill-opacity="1"
                                                                      stroke="rgba(255,255,255,0.85)"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="21.25" stroke-dasharray="0"
                                                                      class="apexcharts-radialbar-area"
                                                                      data:pathOrig="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 163.0625 215.4691238031146"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1119">
                                                            <g id="SvgjsG1124"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="CompletedxTickets" rel="1"
                                                               data:realIndex="0">
                                                                <path id="SvgjsPath1129"
                                                                      d="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="url(#SvgjsLinearGradient1125)"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="21.25" stroke-dasharray="8"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="249" data:value="83" index="0"
                                                                      j="0"
                                                                      data:pathOrig="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle1120" r="97.5" cx="106.5"
                                                                    cy="117.5" class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            <g id="SvgjsG1121" class="apexcharts-datalabels-group"
                                                               transform="translate(0, 0)" style="opacity: 1;">
                                                                <text id="SvgjsText1122"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="106.5" y="117.5" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="16px"
                                                                      font-weight="regular" fill="#ea5455"
                                                                      class="apexcharts-datalabel-label"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    درصد سلامت سایت
                                                                </text>
                                                                <text id="SvgjsText1123"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="106.5" y="163.5" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="2rem"
                                                                      font-weight="regular" fill="#99a2ac"
                                                                      class="apexcharts-datalabel-value"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    {{$totalPercent}}%
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1130" x1="0" y1="0" x2="213" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1131" x1="0" y1="0" x2="213" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 637px; height: 150px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="chart-info d-flex justify-content-between">
                                <div class="text-center">
                                    <p class="mb-50">تعداد صحیح ها</p>
                                    <span class="font-large-1">{{$correct_num}}</span>
                                </div>
                                <div class="text-center">
                                    <p class="mb-50">تعداد اخطار ها</p>
                                    <span class="font-large-1">{{$warning_num}}</span>
                                </div>
                                <div class="text-center">
                                    <p class="mb-50">تعداد خطا ها</p>
                                    <span class="font-large-1">{{$error_num}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
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
                                            data-toggle="modal" data-target="#success1">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success1" tabindex="-1"
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
                                                    منظور از طول عنوان سئو عنوانی می باشد که در title tag یک صفحه وجود
                                                    دارد.
                                                    این عنوان باید به طور مختصر و حداکثر در 65 کاراکتر محتوای صفحه شما
                                                    را توصیف کند.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail1" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    طول عنوان سئو نباید بیشتر از 65 کاراکتر و کمتر از 20 کاراکتر باشد.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    {{($description) ? $description : 'سایت شما فاقد تگ متا توضیحات می باشد :('}}
                                </p>

                                <div class="{{$descCssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataDesc}} <span style="float: left">امتیاز : {{$descNum}} از 5</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success2">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success2" tabindex="-1"
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
                                                    توضیحات اگر بیشتر از 140 کاراکتر باشد در گوگل به صورت کامل نمایش
                                                    داده نمی شود.
                                                    بهترین تعداد کاراکتر توضیحات سئو چیزی بین 70 الی 140 کاراکتر می
                                                    باشد.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail2" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    طول توضیحات سئو باید بین 70 الی 140 کاراکتر باشد.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--google preview--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>پیش نمایش گوگل</h4>
                            <a onclick="myFunction3()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Google Preview</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="google-preview">
                                    <p>{{$siteTitle}}</p>
                                    <p><span
                                            class="bold">{{substr(request()->url(), strrpos(request()->url(), 'home/' )+5)}}</span>/
                                    </p>
                                    <p>{{$description}}</p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success4">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success4" tabindex="-1"
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
                                                    یک پیش نمایش خوب و جذاب در گوگل موجب بالا رفتن نرخ مشارکت و کلیک
                                                    کاربران در نتیجه افزایش چشمگیر بازدید ها می شود.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail3" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    پیش نمایش سایت در گوگل بر روی بالا رفتن نرخ CTR بسیار موثر می باشد.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

                                    <p> {{$missingAltImage}} <span style="float: left">امتیاز : {{$altNum}} از 5</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success5">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success5" tabindex="-1"
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
                                                    توضیحات تصویر برای زماتنی می باشد که تصویر شما لود نمی شود و به جای
                                                    آن ALT تصویر نمایش داده می شود.
                                                    از آنجایی که این توضیحات و یا همان متن جایگزین تصویر برای گوگل دارای
                                                    اهمیت می باشد. پس بر روی تمامی تصاویر خود قرار دهید.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail5" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    داشتن متن جایگزین تصویر به سئو تصاویر شما کمک بسیاری می نماید.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

                                    <p><i class="feather icon-info"></i> نسبت متن به کد صفحه شما {{$getRatio}} (سایز متن
                                        صفحه: {{$textSize}} و سایز کد های صفحه: {{$ratioPageSize}}) <span
                                            style="float: left">امتیاز : {{$ratioNum}} از 5</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success6">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success6" tabindex="-1"
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
                                                    با پاک کردن کد های اضافه صفحه خود و همچنین افزایش محتوای متنی در
                                                    صفحه می توانید نسبت متن به کد صفحه را افزایش دهید.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail6" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    نسبت متن به کد هر چه بیشتر باشد صفحه دارای ارزش محتوایی بیشتری خواهد بود.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            data-toggle="modal" data-target="#success7">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success7" tabindex="-1"
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
                                                    هرچه حجم این فایل‌های استفاده شده در صفحات بیشتر باشه زمان بیشتری
                                                    صرف لود کامل سایت خواهد شد.
                                                    بنابراین باید حجم صفحات خودمون را با استفاده از gzip کاهش بدیم.
                                                    در وردپرس می توانید به سادگی و با استفاده از افزونه Enable Gzip
                                                    Compression این کار را انجام دهید.
                                                    اما اگر سایت وردپرسی ندارید و یا نمی هواهید از افزونه استفاده کنید
                                                    باید به کمک فایل htaccess.در هاست خود این کار را انجام دهید.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="detail7" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    با استفاده از GZIP می توان حجم صفحات سایت را کاهش داد.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--server signature--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>امضای سرور</h4>
                            <a onclick="myFunction9()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Server Sign</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$serverCss}} p-1">

                                    <p><i class="feather icon-info"></i> {{$serverSignature}}</p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success9">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success9" tabindex="-1"
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
                                <div id="detail9" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--url Canonicalization--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>URL وضیعت</h4>
                            <a onclick="myFunction10()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">URL Canonicalization</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_url_canonicalization}} p-1">
                                    <p><i class="feather icon-info"></i> {{$isUrlCanonicalization}}</p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success10">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success10" tabindex="-1"
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
                                <div id="detail10" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            data-toggle="modal" data-target="#success11">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success11" tabindex="-1"
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
                                            data-toggle="modal" data-target="#success12">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success12" tabindex="-1"
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
                {{--iframe--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>iFrame</h4>
                            <a onclick="myFunction13()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">iFrame</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_Iframe}} p-1">
                                    <p><i class="feather icon-info"></i> {{$isIframe}} <span style="float: left">امتیاز : {{$iframeNum}} از 4</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success13">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success13" tabindex="-1"
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
                                <div id="detail13" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--flash--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Flash فایل
                            <a onclick="myFunction14()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Flash File</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_Flash}} p-1">
                                    <p><i class="feather icon-info"></i> {{$isFlash}} <span style="float: left">امتیاز : {{$flashNum}} از 4</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success14">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success14" tabindex="-1"
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
                                <div id="detail14" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--domain length--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            طول دامنه
                            <a onclick="myFunction15()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Domain Length</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h5>{{substr(request()->url(), strrpos(request()->url(), 'home/' )+5)}}</h5>
                                <p>{{$urlLength}}</p>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success15">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success15" tabindex="-1"
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
                                <div id="detail15" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            data-toggle="modal" data-target="#success16">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success16" tabindex="-1"
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
                {{--page size--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>اندازه صفحه</h4>
                            <a onclick="myFunction18()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Page Size</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$checkPageSize}} p-1">

                                    <p><i class="feather icon-info"></i> {{$pageSize}} <span style="float: left">امتیاز : {{$pageSizeNum}} از 5</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success18">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success18" tabindex="-1"
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
                {{--load time--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>زمان بارگذاری</h4>
                            <a onclick="myFunction188()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Load Time</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_load_time}} p-1">

                                    <p><i class="feather icon-info"></i> {{$response_time}} <span style="float: left">امتیاز : {{$loadTimeNum}} از 5</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success188">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success188" tabindex="-1"
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
                                <div id="detail188" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟jhhhhhhj
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--languagee--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>زبان سایت</h4>
                            <a onclick="myFunction19()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Language</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_language}} p-1">

                                    <p><i class="feather icon-info"></i> {{$isLanguage}} <span style="float: left">امتیاز : {{$langNum}} از 3</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success19">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success19" tabindex="-1"
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
                                <div id="detail19" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            data-toggle="modal" data-target="#success20">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success20" tabindex="-1"
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
                {{--email privacy--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>امنیت ایمیل</h4>
                            <a onclick="myFunction22()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Email Privacy</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_email_security}} p-1">

                                    <p>{{$ChEmail}} <i class="feather icon-info"></i></p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success22">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success22" tabindex="-1"
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
                                <div id="detail22" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--safe browse--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>مرور ایمن</h4>
                            <a onclick="myFunction23()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Safe Browse</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_safe_browsing}} p-1">

                                    <p><i class="feather icon-info"></i> {{$isSafe}} <span style="float: left">امتیاز : {{$safeNum}} از 3</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success23">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success23" tabindex="-1"
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
                                <div id="detail23" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--nested html--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>جداول HTML تو در تو</h4>
                            <a onclick="myFunction24()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Nested Table</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_NestedTable}} p-1">

                                    <p><i class="feather icon-info"></i> {{$isNestedTable}} <span style="float: left">امتیاز : {{$nestedNum}} از 2</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success24">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success24" tabindex="-1"
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
                                <div id="detail24" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--speed tip--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>نکات سرعت</h4>
                            <a onclick="myFunction26()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Speed Tips</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_speed_tips}} p-1">

                                    <p><i class="feather icon-info"></i>{{$getCssFilesCount}}</p>
                                    <p><i class="feather icon-info"></i>{{$getJsFilesCount}} </p>
                                    <p><i class="feather icon-info"></i>{{$issetInlineCss}}  </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success26">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success26" tabindex="-1"
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
                                <div id="detail26" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            data-toggle="modal" data-target="#success27">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success27" tabindex="-1"
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
                {{--doctype--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>نوع سند</h4>
                            <a onclick="myFunction28()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">DocType</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_doctype}} p-1">

                                    <p><i class="feather icon-info"></i> {{$doctype}} <span style="float: left">امتیاز : {{$doctypeNum}} از 2</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success28">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success28" tabindex="-1"
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
                                <div id="detail28" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--encoding--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>رمزگذاری سایت</h4>
                            <a onclick="myFunction29()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Encoding</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_encoding}} p-1">

                                    <p><i class="feather icon-info"></i> {{$encoding}} <span style="float: left">امتیاز : {{$encodingNum}} از 2</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success29">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success29" tabindex="-1"
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
                                <div id="detail29" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--deprecated html--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>HTML منسوخ شده</h4>
                            <a onclick="myFunction30()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Deprecated HTML</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_dphtml}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dphtml}} <span style="float: left">امتیاز : {{$dphtmlNum}} از 2</span>
                                    </p>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success30">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success30" tabindex="-1"
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
                                <div id="detail30" style="display: none" class="alert alert-primary mb-2"
                                     role="alert">
                                    سلام خوبی؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--headers--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>عناوین</h4>
                            <a onclick="myFunction4()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Headers</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped which">
                                        <thead>
                                        <tr>
                                            @foreach ($getheading as $heading => $headings)
                                                <th>&lt;{{strtoupper($heading)}}&lt;</th>
                                            @endforeach
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($getheading as $headings)
                                                <th>{{count($headings)}}</th>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped which" id="heading">
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        ?>
                                        @foreach ($getheading as $heading => $headings)
                                            <?php
                                            if (!empty($headings)) {
                                                foreach ($headings as $h) {
                                                    $i++;
                                                    $over_max = 4;
                                                    if ($i > $over_max) {
                                                        $cls = 'class="over-max"';
                                                    } else {
                                                        $cls = '';
                                                    }
                                                    echo '<tr ' . $cls . '><td><span class="bold">&lt;' . mb_strtoupper($heading) . '&gt;</span> ' . $h . '</tr>';
                                                }
                                            }
                                            ?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <?php
                                    if ($i > $over_max) {
                                        echo '
                                            <div class="show-header">
                                                <a href="javascript:void(0)" class="show-more-header">بیشتر</a>
                                                <a href="javascript:void(0)" class="show-less-header">کمتر</a>
                                            </div>';
                                    }
                                    ?>
                                </div>
                                <div class="modal-success mr-1 mb-1 d-inline-block">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light"
                                            data-toggle="modal" data-target="#success4">
                                        راهنمای رفع خطا
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="success4" tabindex="-1"
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
                                <div id="detail4" style="display: none" class="alert alert-primary mb-2"
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
        var $primary = '#0a3d07';
        var $danger = '#d91e1f';
        var $warning = '#FF9F43';
        var $info = '#0DCCE1';
        var $primary_light = '#1f8918';
        var $warning_light = '#FFC085';
        var $danger_light = '#e56868';
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
            labels: ['Site Speed', 'PageAuthority', 'DomainAuthority'],

        }


        var productChart = new ApexCharts(
            document.querySelector("#product-order-chart"),
            productChartoptions
        );

        productChart.render();
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.show-less-header').click(function () {
                var p = $(this).parent(".show-header");

                $('#heading').find('.over-max').hide();
                $(this).hide();
                p.find('.show-more-header').show();
            });
            $('.show-more-header').click(function () {
                var p = $(this).parent(".show-header");

                $('#heading').find('.over-max').show();
                $(this).hide();
                p.find('.show-less-header').show();
            });

        });
    </script>
@endsection
