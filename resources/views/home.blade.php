@extends('layouts.app')

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row">
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
            <div class="col-lg-6 col-12">
                <div class="card" style="height: 583.562px;">
                    <div class="card-header">
                        <h4 class="card-title">تایم لاین</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="activity-timeline timeline-left list-unstyled">
                                @if($initseo->isEmpty() && $offseo->isEmpty())
                                    @if($titleNum == 3 || $titleNum == 0)
                                        {{--title--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">عنوان</p>
                                                <span class="font-small-3">{{$siteTitle}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$titleNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($descNum == 3 || $descNum == 0)
                                        {{--description--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">توضیحات</p>
                                                <span class="font-small-3">{{$description}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$descNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($altNum == 3 || $altNum == 0)
                                        {{--alt image--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">تصویر alt</p>
                                                <span class="font-small-3">{{$missingAltImage}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$altNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($ratioNum == 3 || $ratioNum == 0)
                                        {{--ratio--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">نسبت متن به کد</p>
                                                <span class="font-small-3">{{$getRatio}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$ratioNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($gzipNum == 0)
                                        {{--gzip--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">GZIP</p>
                                                <span class="font-small-3">{{$gzip}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$gzipNum}} از 4</small>
                                        </li>
                                    @endif
                                    @if($robotsNum == 3 || $robotsNum == 0)
                                        {{--robot--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">فایل Robot</p>
                                                <span class="font-small-3">{{$robots}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$robotsNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($sitemapNum == 3 || $sitemapNum == 0)
                                        {{--sitemap--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">عنوان</p>
                                                <span class="font-small-3">{{$sitemap}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$sitemapNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($favNum == 0)
                                        {{--favicon--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">ایکون سایت</p>
                                                <span class="font-small-3">{{$favicon}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$favNum}} از 4</small>
                                        </li>
                                    @endif
                                    @if($loadTimeNum == 3 || $loadTimeNum == 0)
                                        {{--load time--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">زمان بارگذاری</p>
                                                <span class="font-small-3">{{$response_time}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$loadTimeNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($sslNum == 3 || $sslNum == 0)
                                        {{--ssl--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">Https(SSL)</p>
                                                <span class="font-small-3">{{$is_https}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$sslNum}} از 5</small>
                                        </li>
                                    @endif
                                    @if($analyticNum == 0)
                                        {{--google analytic--}}
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">Google Analytic</p>
                                                <span class="font-small-3">{{$analytics}}</span>
                                            </div>
                                            <small class="text-muted">امتیاز : {{$analyticNum}} از 4</small>
                                        </li>
                                    @endif
                                @else
                                    @foreach($initseo as $init)
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">سئو داخلی</p>
                                                <span class="font-small-3">{!! $init->action !!}</span>
                                            </div>
                                            <small class="text-muted">{{$init->baseurl}}</small>
                                        </li>
                                    @endforeach
                                    @foreach($offseo as $off)
                                        <li>
                                            <div class="timeline-icon bg-primary">
                                                <i class="feather icon-plus font-medium-2 align-middle"></i>
                                            </div>
                                            <div class="timeline-info">
                                                <p class="font-weight-bold mb-0">سئو خارجی</p>
                                                <span class="font-small-3">{!! $off->action !!}</span>
                                            </div>
                                            <small class="text-muted">{{$off->baseurl}}</small>
                                        </li>
                                    @endforeach
                                @endif
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
                        <div class="divider-text">Seo Health</div>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                    <h1 class="font-large-2 text-bold-700 mt-2 mb-0">41</h1>
                                    <small>مجموع موارد بررسی شده</small>
                                </div>
                                <div class="col-sm-10 col-12 d-flex justify-content-center">
                                    {{-- <div id="support-tracker-chart"></div>--}}{{--
                                    <div id="support-tracker-chart" style="min-height: 290px;">--}}
                                    <div id="apexchartsl57ce9la" class="apexcharts-canvas apexchartsl57ce9la light"
                                         style="width: 300px; height: 290px;">
                                        <svg id="SvgjsSvg1418" width="300" height="290"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1420" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(44.5, 20)">
                                                <defs id="SvgjsDefs1419">
                                                    <clipPath id="gridRectMaskl57ce9la">
                                                        <rect id="SvgjsRect1421" width="215" height="237" x="-1"
                                                              y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                              stroke-width="0" stroke="none"
                                                              stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskl57ce9la">
                                                        <rect id="SvgjsRect1422" width="215" height="237" x="-1"
                                                              y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                              stroke-width="0" stroke="none"
                                                              stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1428" x1="0" y1="1"
                                                                    x2="1" y2="1">
                                                        <stop id="SvgjsStop1429" stop-opacity="1"
                                                              stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop1430" stop-opacity="1"
                                                              stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1431" stop-opacity="1"
                                                              stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1439" x1="0" y1="1"
                                                                    x2="1" y2="1">
                                                        <stop id="SvgjsStop1440" stop-opacity="1"
                                                              stop-color="rgba(115,103,240,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop1441" stop-opacity="1"
                                                              stop-color="rgba(234,84,85,1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1442" stop-opacity="1"
                                                              stop-color="rgba(234,84,85,1)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="SvgjsG1424" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1425">
                                                        <g id="SvgjsG1426" class="apexcharts-tracks">
                                                            <g id="SvgjsG1427"
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
                                                        <g id="SvgjsG1433">
                                                            <g id="SvgjsG1438"
                                                               class="apexcharts-series apexcharts-radial-series"
                                                               seriesName="CompletedxTickets" rel="1"
                                                               data:realIndex="0">
                                                                <path id="SvgjsPath1443"
                                                                      d="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761"
                                                                      fill="none" fill-opacity="0.85"
                                                                      stroke="url(#SvgjsLinearGradient1439)"
                                                                      stroke-opacity="1" stroke-linecap="butt"
                                                                      stroke-width="21.25" stroke-dasharray="8"
                                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                      data:angle="249" data:value="83" index="0"
                                                                      j="0"
                                                                      data:pathOrig="M 49.93749999999995 215.4691238031146 A 113.125 113.125 0 1 1 218.23224352982496 135.1966488576761"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle1434" r="97.5" cx="106.5"
                                                                    cy="117.5" class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            <g id="SvgjsG1435" class="apexcharts-datalabels-group"
                                                               transform="translate(0, 0)" style="opacity: 1;">
                                                                <text id="SvgjsText1436"
                                                                      font-family="Helvetica, Arial, sans-serif"
                                                                      x="106.5" y="117.5" text-anchor="middle"
                                                                      dominant-baseline="auto" font-size="16px"
                                                                      font-weight="regular" fill="#ea5455"
                                                                      class="apexcharts-datalabel-label"
                                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                                    نمره سایت
                                                                </text>
                                                                <text id="SvgjsText1437"
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
                                                <line id="SvgjsLine1444" x1="0" y1="0" x2="213" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1445" x1="0" y1="0" x2="213" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="chart-info d-flex justify-content-between">
                                <div class="text-center">
                                    <p class="mb-50">تعداد خطا ها</p>
                                    <span class="font-large-1">{{$error_num}}</span>
                                </div>
                                <div class="text-center">
                                    <p class="mb-50">تعداد اخطار</p>
                                    <span class="font-large-1">{{{$warning_num}}}</span>
                                </div>
                                <div class="text-center">
                                    <p class="mb-50">تعداد صحیح</p>
                                    <span class="font-large-1">{{$correct_num}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 com-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4>MOZ</h4>
                    </div>
                    <div class="divider">
                        <div class="divider-text">MOZ Info</div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="product-order-chart" class="mb-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-6 col-12 ">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title mb-2">اطلاعات MOZ</div>
                    </div>
                    <div class="divider">
                        <div class="divider-text">MOZ Info</div>
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
            <div class="col-md-6 col-12 ">
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
                                        class="badge badge-primary badge-md mr-1 mb-1">{{$alexaRank}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">رتبه صفحه گوگل</td>
                                <td>
                                    <div class="badge badge-primary badge-md mr-1 mb-1">بدون دیتا</div>
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
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{$externalLinks}}</h2>
                        <p class="mb-0">تعداد بک لینک</p>
                    </div>
                    <div class="card-content" style="position: relative;">
                        <div id="line-area-chart-1" style="min-height: 100px;">
                            <div id="apexchartsfkhcykg4" class="apexcharts-canvas apexchartsfkhcykg4 light"
                                 style="width: 374px; height: 100px;">
                                <svg id="SvgjsSvg1006" width="374" height="100" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1007">
                                            <clipPath id="gridRectMaskfkhcykg4">
                                                <rect id="SvgjsRect1012" width="376.5" height="102.5" x="-1.25"
                                                      y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                      stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskfkhcykg4">
                                                <rect id="SvgjsRect1013" width="376" height="102" x="-1" y="-1" rx="0"
                                                      ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1020" stop-opacity="0.7"
                                                      stop-color="rgba(115,103,240,0.7)" offset="0"></stop>
                                                <stop id="SvgjsStop1021" stop-opacity="0.5"
                                                      stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop>
                                                <stop id="SvgjsStop1022" stop-opacity="0.5"
                                                      stop-color="rgba(241,240,254,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1011" x1="124.16666666666666" y1="0" x2="124.16666666666666"
                                              y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                              class="apexcharts-xcrosshairs" x="124.16666666666666" y="0" width="1"
                                              height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                              stroke-width="1"></line>
                                        <g id="SvgjsG1025" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1026" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1029" class="apexcharts-grid">
                                            <line id="SvgjsLine1031" x1="0" y1="100" x2="374" y2="100"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1030" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                  stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1015" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1016" class="apexcharts-series" seriesName="Subscribers"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1023"
                                                      d="M0 100L0 77.77777777777777C21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 100M373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 "
                                                      fill="url(#SvgjsLinearGradient1019)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskfkhcykg4)"
                                                      pathTo="M 0 100L 0 77.77777777777777C 21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C 84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C 146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C 208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C 271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C 333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 100M 373.99999999999994 17.777777777777786z"
                                                      pathFrom="M -1 140L -1 140L 62.33333333333333 140L 124.66666666666666 140L 186.99999999999997 140L 249.33333333333331 140L 311.66666666666663 140L 373.99999999999994 140"></path>
                                                <path id="SvgjsPath1024"
                                                      d="M0 77.77777777777777C21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786C373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 373.99999999999994 17.777777777777786 "
                                                      fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                                      class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskfkhcykg4)"
                                                      pathTo="M 0 77.77777777777777C 21.816666666666663 77.77777777777777 40.516666666666666 51.111111111111114 62.33333333333333 51.111111111111114C 84.14999999999999 51.111111111111114 102.85 60 124.66666666666666 60C 146.48333333333332 60 165.1833333333333 24.444444444444443 186.99999999999997 24.444444444444443C 208.81666666666663 24.444444444444443 227.51666666666665 55.55555555555556 249.33333333333331 55.55555555555556C 271.15 55.55555555555556 289.84999999999997 6.666666666666657 311.66666666666663 6.666666666666657C 333.4833333333333 6.666666666666657 352.1833333333333 17.777777777777786 373.99999999999994 17.777777777777786"
                                                      pathFrom="M -1 140L -1 140L 62.33333333333333 140L 124.66666666666666 140L 186.99999999999997 140L 249.33333333333331 140L 311.66666666666663 140L 373.99999999999994 140"></path>
                                                <g id="SvgjsG1017" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1037" r="0" cx="124.66666666666666"
                                                                cy="60"
                                                                class="apexcharts-marker w94h6d2y2 no-pointer-events"
                                                                stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1018" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1032" x1="0" y1="0" x2="374" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1033" x1="0" y1="0" x2="374" y2="0" stroke-dasharray="0"
                                              stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1034" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1035" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1036" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1010" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                          fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                          stroke-dasharray="0"></rect>
                                    <g id="SvgjsG1027" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)">
                                        <g id="SvgjsG1028" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light" style="left: 135px; top: 63px;">
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(115, 103, 240);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Subscribers: </span><span
                                                    class="apexcharts-tooltip-text-value">36</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 375px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-credit-card text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{$pageAuthority}} از 100</h2>
                        <p class="mb-0">پیج اتوریتی</p>
                    </div>
                    <div class="card-content" style="position: relative;">
                        <div id="line-area-chart-2" style="min-height: 100px;">
                            <div id="apexchartsgx2vbs0s" class="apexcharts-canvas apexchartsgx2vbs0s light"
                                 style="width: 374px; height: 100px;">
                                <svg id="SvgjsSvg1038" width="374" height="100" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1040" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1039">
                                            <clipPath id="gridRectMaskgx2vbs0s">
                                                <rect id="SvgjsRect1044" width="376.5" height="102.5" x="-1.25"
                                                      y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                      stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskgx2vbs0s">
                                                <rect id="SvgjsRect1045" width="376" height="102" x="-1" y="-1" rx="0"
                                                      ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1051" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1052" stop-opacity="0.7"
                                                      stop-color="rgba(40,199,111,0.7)" offset="0"></stop>
                                                <stop id="SvgjsStop1053" stop-opacity="0.5"
                                                      stop-color="rgba(234,249,241,0.5)" offset="0.8"></stop>
                                                <stop id="SvgjsStop1054" stop-opacity="0.5"
                                                      stop-color="rgba(234,249,241,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1043" x1="186.49999999999997" y1="0" x2="186.49999999999997"
                                              y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                              class="apexcharts-xcrosshairs active" x="186.49999999999997" y="0"
                                              width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                              stroke-width="1"></line>
                                        <g id="SvgjsG1057" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1058" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1061" class="apexcharts-grid">
                                            <line id="SvgjsLine1063" x1="0" y1="100" x2="374" y2="100"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1062" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                  stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1047" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1048" class="apexcharts-series" seriesName="Revenue"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1055"
                                                      d="M0 100L0 60C21.816666666666663 60 40.516666666666666 90 62.33333333333333 90C84.14999999999999 90 102.85 40 124.66666666666666 40C146.48333333333332 40 165.1833333333333 80 186.99999999999997 80C208.81666666666663 80 227.51666666666665 60 249.33333333333331 60C271.15 60 289.84999999999997 80 311.66666666666663 80C333.4833333333333 80 352.1833333333333 20 373.99999999999994 20C373.99999999999994 20 373.99999999999994 20 373.99999999999994 100M373.99999999999994 20C373.99999999999994 20 373.99999999999994 20 373.99999999999994 20 "
                                                      fill="url(#SvgjsLinearGradient1051)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskgx2vbs0s)"
                                                      pathTo="M 0 100L 0 60C 21.816666666666663 60 40.516666666666666 90 62.33333333333333 90C 84.14999999999999 90 102.85 40 124.66666666666666 40C 146.48333333333332 40 165.1833333333333 80 186.99999999999997 80C 208.81666666666663 80 227.51666666666665 60 249.33333333333331 60C 271.15 60 289.84999999999997 80 311.66666666666663 80C 333.4833333333333 80 352.1833333333333 20 373.99999999999994 20C 373.99999999999994 20 373.99999999999994 20 373.99999999999994 100M 373.99999999999994 20z"
                                                      pathFrom="M -1 200L -1 200L 62.33333333333333 200L 124.66666666666666 200L 186.99999999999997 200L 249.33333333333331 200L 311.66666666666663 200L 373.99999999999994 200"></path>
                                                <path id="SvgjsPath1056"
                                                      d="M0 60C21.816666666666663 60 40.516666666666666 90 62.33333333333333 90C84.14999999999999 90 102.85 40 124.66666666666666 40C146.48333333333332 40 165.1833333333333 80 186.99999999999997 80C208.81666666666663 80 227.51666666666665 60 249.33333333333331 60C271.15 60 289.84999999999997 80 311.66666666666663 80C333.4833333333333 80 352.1833333333333 20 373.99999999999994 20C373.99999999999994 20 373.99999999999994 20 373.99999999999994 20 "
                                                      fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                                      class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskgx2vbs0s)"
                                                      pathTo="M 0 60C 21.816666666666663 60 40.516666666666666 90 62.33333333333333 90C 84.14999999999999 90 102.85 40 124.66666666666666 40C 146.48333333333332 40 165.1833333333333 80 186.99999999999997 80C 208.81666666666663 80 227.51666666666665 60 249.33333333333331 60C 271.15 60 289.84999999999997 80 311.66666666666663 80C 333.4833333333333 80 352.1833333333333 20 373.99999999999994 20"
                                                      pathFrom="M -1 200L -1 200L 62.33333333333333 200L 124.66666666666666 200L 186.99999999999997 200L 249.33333333333331 200L 311.66666666666663 200L 373.99999999999994 200"></path>
                                                <g id="SvgjsG1049" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1069" r="6" cx="186.99999999999997"
                                                                cy="80"
                                                                class="apexcharts-marker we74vdnbd no-pointer-events"
                                                                stroke="#ffffff" fill="#28c76f" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1050" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1064" x1="0" y1="0" x2="374" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1065" x1="0" y1="0" x2="374" y2="0" stroke-dasharray="0"
                                              stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1066" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1067" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1068" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1042" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                          fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                          stroke-dasharray="0"></rect>
                                    <g id="SvgjsG1059" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)">
                                        <g id="SvgjsG1060" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light active" style="left: 50.5781px; top: 65.6094px;">
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(40, 199, 111);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Revenue: </span><span
                                                    class="apexcharts-tooltip-text-value">300</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 375px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-danger p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{$domainAuthority}} از 100</h2>
                        <p class="mb-0">دامین اتوریتی</p>
                    </div>
                    <div class="card-content" style="position: relative;">
                        <div id="line-area-chart-3" style="min-height: 100px;">
                            <div id="apexchartse3fbkyce" class="apexcharts-canvas apexchartse3fbkyce light"
                                 style="width: 374px; height: 100px;">
                                <svg id="SvgjsSvg1070" width="374" height="100" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1072" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1071">
                                            <clipPath id="gridRectMaske3fbkyce">
                                                <rect id="SvgjsRect1076" width="376.5" height="102.5" x="-1.25"
                                                      y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                      stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaske3fbkyce">
                                                <rect id="SvgjsRect1077" width="376" height="102" x="-1" y="-1" rx="0"
                                                      ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1083" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1084" stop-opacity="0.7"
                                                      stop-color="rgba(234,84,85,0.7)" offset="0"></stop>
                                                <stop id="SvgjsStop1085" stop-opacity="0.5"
                                                      stop-color="rgba(253,238,238,0.5)" offset="0.8"></stop>
                                                <stop id="SvgjsStop1086" stop-opacity="0.5"
                                                      stop-color="rgba(253,238,238,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1075" x1="298.7" y1="0" x2="298.7" y2="100" stroke="#b6b6b6"
                                              stroke-dasharray="3" class="apexcharts-xcrosshairs" x="298.7" y="0"
                                              width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                              stroke-width="1"></line>
                                        <g id="SvgjsG1089" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1090" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1093" class="apexcharts-grid">
                                            <line id="SvgjsLine1095" x1="0" y1="100" x2="374" y2="100"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1094" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                  stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1079" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1080" class="apexcharts-series" seriesName="Sales"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1087"
                                                      d="M0 100L0 53.33333333333333C26.179999999999996 53.33333333333333 48.620000000000005 20 74.8 20C100.97999999999999 20 123.42 73.33333333333333 149.6 73.33333333333333C175.78 73.33333333333333 198.22 40 224.4 40C250.57999999999998 40 273.02 100 299.2 100C325.38 100 347.82 13.333333333333329 374 13.333333333333329C374 13.333333333333329 374 13.333333333333329 374 100M374 13.333333333333329C374 13.333333333333329 374 13.333333333333329 374 13.333333333333329 "
                                                      fill="url(#SvgjsLinearGradient1083)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaske3fbkyce)"
                                                      pathTo="M 0 100L 0 53.33333333333333C 26.179999999999996 53.33333333333333 48.620000000000005 20 74.8 20C 100.97999999999999 20 123.42 73.33333333333333 149.6 73.33333333333333C 175.78 73.33333333333333 198.22 40 224.4 40C 250.57999999999998 40 273.02 100 299.2 100C 325.38 100 347.82 13.333333333333329 374 13.333333333333329C 374 13.333333333333329 374 13.333333333333329 374 100M 374 13.333333333333329z"
                                                      pathFrom="M -1 120L -1 120L 74.8 120L 149.6 120L 224.4 120L 299.2 120L 374 120"></path>
                                                <path id="SvgjsPath1088"
                                                      d="M0 53.33333333333333C26.179999999999996 53.33333333333333 48.620000000000005 20 74.8 20C100.97999999999999 20 123.42 73.33333333333333 149.6 73.33333333333333C175.78 73.33333333333333 198.22 40 224.4 40C250.57999999999998 40 273.02 100 299.2 100C325.38 100 347.82 13.333333333333329 374 13.333333333333329C374 13.333333333333329 374 13.333333333333329 374 13.333333333333329 "
                                                      fill="none" fill-opacity="1" stroke="#ea5455" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                                      class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaske3fbkyce)"
                                                      pathTo="M 0 53.33333333333333C 26.179999999999996 53.33333333333333 48.620000000000005 20 74.8 20C 100.97999999999999 20 123.42 73.33333333333333 149.6 73.33333333333333C 175.78 73.33333333333333 198.22 40 224.4 40C 250.57999999999998 40 273.02 100 299.2 100C 325.38 100 347.82 13.333333333333329 374 13.333333333333329"
                                                      pathFrom="M -1 120L -1 120L 74.8 120L 149.6 120L 224.4 120L 299.2 120L 374 120"></path>
                                                <g id="SvgjsG1081" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1101" r="0" cx="299.2" cy="100"
                                                                class="apexcharts-marker wvhjwfg8l no-pointer-events"
                                                                stroke="#ffffff" fill="#ea5455" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1082" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1096" x1="0" y1="0" x2="374" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1097" x1="0" y1="0" x2="374" y2="0" stroke-dasharray="0"
                                              stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1098" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1099" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1100" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1074" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                          fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                          stroke-dasharray="0"></rect>
                                    <g id="SvgjsG1091" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)">
                                        <g id="SvgjsG1092" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light" style="left: 195.5px; top: 65.6094px;">
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(234, 84, 85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Sales: </span><span
                                                    class="apexcharts-tooltip-text-value">3</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 375px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-package text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">20000</h2>
                        <p class="mb-0">تعداد صفحات ایندکس شده</p>
                    </div>
                    <div class="card-content" style="position: relative;">
                        <div id="line-area-chart-4" style="min-height: 100px;">
                            <div id="apexchartscy9gcxbkk" class="apexcharts-canvas apexchartscy9gcxbkk light"
                                 style="width: 374px; height: 100px;">
                                <svg id="SvgjsSvg1102" width="374" height="100" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1104" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1103">
                                            <clipPath id="gridRectMaskcy9gcxbkk">
                                                <rect id="SvgjsRect1108" width="376.5" height="102.5" x="-1.25"
                                                      y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                      stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskcy9gcxbkk">
                                                <rect id="SvgjsRect1109" width="376" height="102" x="-1" y="-1" rx="0"
                                                      ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1115" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1116" stop-opacity="0.7"
                                                      stop-color="rgba(255,159,67,0.7)" offset="0"></stop>
                                                <stop id="SvgjsStop1117" stop-opacity="0.5"
                                                      stop-color="rgba(255,245,236,0.5)" offset="0.8"></stop>
                                                <stop id="SvgjsStop1118" stop-opacity="0.5"
                                                      stop-color="rgba(255,245,236,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1107" x1="124.16666666666666" y1="0" x2="124.16666666666666"
                                              y2="100" stroke="#b6b6b6" stroke-dasharray="3"
                                              class="apexcharts-xcrosshairs" x="124.16666666666666" y="0" width="1"
                                              height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                              stroke-width="1"></line>
                                        <g id="SvgjsG1121" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1122" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1125" class="apexcharts-grid">
                                            <line id="SvgjsLine1127" x1="0" y1="100" x2="374" y2="100"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1126" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                  stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1111" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1112" class="apexcharts-series" seriesName="Orders"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1119"
                                                      d="M0 100L0 60C21.816666666666663 60 40.516666666666666 10 62.33333333333333 10C84.14999999999999 10 102.85 80 124.66666666666666 80C146.48333333333332 80 165.1833333333333 10 186.99999999999997 10C208.81666666666663 10 227.51666666666665 90 249.33333333333331 90C271.15 90 289.84999999999997 40 311.66666666666663 40C333.4833333333333 40 352.1833333333333 80 373.99999999999994 80C373.99999999999994 80 373.99999999999994 80 373.99999999999994 100M373.99999999999994 80C373.99999999999994 80 373.99999999999994 80 373.99999999999994 80 "
                                                      fill="url(#SvgjsLinearGradient1115)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskcy9gcxbkk)"
                                                      pathTo="M 0 100L 0 60C 21.816666666666663 60 40.516666666666666 10 62.33333333333333 10C 84.14999999999999 10 102.85 80 124.66666666666666 80C 146.48333333333332 80 165.1833333333333 10 186.99999999999997 10C 208.81666666666663 10 227.51666666666665 90 249.33333333333331 90C 271.15 90 289.84999999999997 40 311.66666666666663 40C 333.4833333333333 40 352.1833333333333 80 373.99999999999994 80C 373.99999999999994 80 373.99999999999994 80 373.99999999999994 100M 373.99999999999994 80z"
                                                      pathFrom="M -1 160L -1 160L 62.33333333333333 160L 124.66666666666666 160L 186.99999999999997 160L 249.33333333333331 160L 311.66666666666663 160L 373.99999999999994 160"></path>
                                                <path id="SvgjsPath1120"
                                                      d="M0 60C21.816666666666663 60 40.516666666666666 10 62.33333333333333 10C84.14999999999999 10 102.85 80 124.66666666666666 80C146.48333333333332 80 165.1833333333333 10 186.99999999999997 10C208.81666666666663 10 227.51666666666665 90 249.33333333333331 90C271.15 90 289.84999999999997 40 311.66666666666663 40C333.4833333333333 40 352.1833333333333 80 373.99999999999994 80C373.99999999999994 80 373.99999999999994 80 373.99999999999994 80 "
                                                      fill="none" fill-opacity="1" stroke="#ff9f43" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0"
                                                      class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskcy9gcxbkk)"
                                                      pathTo="M 0 60C 21.816666666666663 60 40.516666666666666 10 62.33333333333333 10C 84.14999999999999 10 102.85 80 124.66666666666666 80C 146.48333333333332 80 165.1833333333333 10 186.99999999999997 10C 208.81666666666663 10 227.51666666666665 90 249.33333333333331 90C 271.15 90 289.84999999999997 40 311.66666666666663 40C 333.4833333333333 40 352.1833333333333 80 373.99999999999994 80"
                                                      pathFrom="M -1 160L -1 160L 62.33333333333333 160L 124.66666666666666 160L 186.99999999999997 160L 249.33333333333331 160L 311.66666666666663 160L 373.99999999999994 160"></path>
                                                <g id="SvgjsG1113" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1133" r="0" cx="124.66666666666666"
                                                                cy="80"
                                                                class="apexcharts-marker wo654pxio no-pointer-events"
                                                                stroke="#ffffff" fill="#ff9f43" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1114" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1128" x1="0" y1="0" x2="374" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1129" x1="0" y1="0" x2="374" y2="0" stroke-dasharray="0"
                                              stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1130" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1131" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1132" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1106" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                          fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                          stroke-dasharray="0"></rect>
                                    <g id="SvgjsG1123" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)">
                                        <g id="SvgjsG1124" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light" style="left: 135px; top: 65.6094px;">
                                    <div class="apexcharts-tooltip-series-group active" style="display: flex;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 159, 67);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Orders: </span><span
                                                    class="apexcharts-tooltip-text-value">8</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 375px; height: 101px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
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
