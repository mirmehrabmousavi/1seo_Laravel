@extends('layouts.app')

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-6 col-12">
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
                                    <li><p class="font-weight-bold mb-0">فعالیتی برای انجام وجود ندارد</p></li>
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
            <div class="col-lg-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4> اطلاعات</h4>
                    </div>
                    <div class="divider">
                        <div class="divider-text">Info</div>
                    </div>
                    <div class="card-content">
                        {!! $chart->container() !!}
                    </div>
                    <script src="{{ $chart->cdn() }}"></script>
                    {{ $chart->script() }}
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4>اطلاعات</h4>
                    </div>
                    <div class="divider">
                        <div class="divider-text">Info</div>
                    </div>
                    <div class="card-content">
                        {!! $chart2->container() !!}
                    </div>
                    <script src="{{ $chart2->cdn() }}"></script>
                    {{ $chart2->script() }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
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
            <div class="col-lg-4 col-sm-12 col-12 ">
                <div class="card" style="height: 550px">
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
            <div class="col-lg-4 col-sm-12 col-12 ">
                <div class="card" style="height: 550px">
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
