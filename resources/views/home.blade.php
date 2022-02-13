@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/extensions/toastr.css">
@endsection

@section('content')

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
                                        <span
                                            class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi bears.</span>
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
                                        class="badge badge-primary badge-md mr-1 mb-1">{{$alexaRank}}</div>
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
                            <div class="divider-text">Title</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    {{$siteTitle}}
                                </p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <form action="{{route('sendReq',['req'=>'عنوان'])}}"
                                                          method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">
                                                            تایید
                                                        </button>
                                                    </form>
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
                                @if(\Illuminate\Support\Facades\Session::has('message'))
                                    <div class="alert alert-success">
                                        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
                                    </div>
                                @endif
                                <div id="detail1" style="display: none" class="alert alert-primary mb-2"
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
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>پیش نمایش گوگل</h4>
                            <a onclick="myFunction3()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Google Preview</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    {{$siteTitle}}
                                </p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>عناوین</h4>
                            <a onclick="myFunction4()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Headers</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Header</p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>Alt تصویر</h4>
                            <a onclick="myFunction5()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Alt Picture</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    {{$altImage . ' ' . $missedAltImage}}
                                </p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>نسبت متن به کد</h4>
                            <a onclick="myFunction6()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Text to Code</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    {{$siteTitle}}
                                </p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>GZIP فشرده سازی</h4>
                            <a onclick="myFunction7()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">GZIP</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    {{$gzip}}
                                </p>
                                <div class="{{$cssStyle}} p-1">

                                    <p><i class="feather icon-info"></i> {{$dataTitle}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>فایل ربات</h4>
                            <a onclick="myFunction11()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Robot File</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_robots_txt}} p-1">

                                    <p>{{$robots}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>نقشه سایت</h4>
                            <a onclick="myFunction12()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Sitemap.xml</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_xml_sitemaps}} p-1">

                                    <p>{{$site_map}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>iFrame</h4>
                            <a onclick="myFunction13()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">iFrame</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_Iframe}} p-1">

                                    <p>{{$isIframe}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <div class="divider-text">Flash File</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_Flash}} p-1">

                                    <p>{{$isFlash}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <div class="divider-text">Domain Length</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h5>{{auth()->user()->url}}</h5>
                                <p>{{$urlLength}}</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <div class="divider-text">Favicon</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <img src="{{$favicon}}" alt="{{auth()->user()->url}}">
                                <p>عالی است. وب سایت شما Favicon دارد :)</p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>اندازه صفحه</h4>
                            <a onclick="myFunction18()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Page Size</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="alert alert-info p-1">

                                    <p>{{$pageSize}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>زمان بارگذاری</h4>
                            <a onclick="myFunction18()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Load Time</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_load_time}} p-1">

                                    <p>{{$response_time}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>زبان سایت</h4>
                            <a onclick="myFunction19()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Language</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_language}} p-1">

                                    <p>{{$isLanguage}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4> گواهی اس اس ال</h4>
                            <a onclick="myFunction20()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">HTTPS(SSL)</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_https}} p-1">

                                    <p>{{$is_https}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>مرور ایمن</h4>
                            <a onclick="myFunction23()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Safe Browse</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_safe_browsing}} p-1">

                                    <p>{{$isSafe}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>جداول HTML تو در تو</h4>
                            <a onclick="myFunction24()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Nested Table</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_NestedTable}} p-1">

                                    <p>{{$isNestedTable}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>نکات سرعت</h4>
                            <a onclick="myFunction26()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Speed Tips</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_speed_tips}} p-1">

                                    <p>{{$getCssFilesCount}} <i class="feather icon-info"></i></p>
                                    <p>{{$getJsFilesCount}} <i class="feather icon-info"></i></p>
                                    <p>{{$issetInlineCss}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>گوگل آنالیتیکس</h4>
                            <a onclick="myFunction27()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Google Analytics</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_analytics}} p-1">

                                    <p>{{$analytics}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>نوع سند</h4>
                            <a onclick="myFunction28()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">DocType</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_doctype}} p-1">

                                    <p>{{$doctype}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>رمزگذاری سایت</h4>
                            <a onclick="myFunction29()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Encoding</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_encoding}} p-1">

                                    <p>{{$encoding}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                            <h4>HTML منسوخ شده</h4>
                            <a onclick="myFunction30()"><i class="feather icon-info"></i></a>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Deprecated HTML</div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="{{$check_dphtml}} p-1">

                                    <p>{{$dphtml}} <i class="feather icon-info"></i></p>
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
                                                    <a href="{{--{{route('request')}}--}}"
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
                                <div id="detail30" style="display: none" class="alert alert-primary mb-2"
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
