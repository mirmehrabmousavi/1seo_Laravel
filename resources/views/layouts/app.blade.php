<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Seo Analyzer</title>
    <link rel=“canonical” href=“https://1seo.site/”/>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/front-end/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="/app-assets/css-rtl/app.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/animate/animate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

@yield('404')

@if(auth()->check())

    @include('layouts.header')

    @include('layouts.sidebar')

@endif

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- BEGIN: Vendor JS-->
<script src="/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="/app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/app-assets/js/core/app-menu.js"></script>
<script src="/app-assets/js/core/app.js"></script>
<script src="/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->

<script>
    function myFunction1() {
        var x1 = document.getElementById("detail1");
        if (x1.style.display === "none") {
            x1.style.display = "block";
        } else {
            x1.style.display = "none";
        }
    }

    function myFunction2() {
        var x2 = document.getElementById("detail2");
        if (x2.style.display === "none") {
            x2.style.display = "block";
        } else {
            x2.style.display = "none";
        }
    }

    function myFunction3() {
        var x3 = document.getElementById("detail3");
        if (x3.style.display === "none") {
            x3.style.display = "block";
        } else {
            x3.style.display = "none";
        }
    }

    function myFunction4() {
        var x4 = document.getElementById("detail4");
        if (x4.style.display === "none") {
            x4.style.display = "block";
        } else {
            x4.style.display = "none";
        }
    }

    function myFunction5() {
        var x5 = document.getElementById("detail5");
        if (x5.style.display === "none") {
            x5.style.display = "block";
        } else {
            x5.style.display = "none";
        }
    }

    function myFunction6() {
        var x6 = document.getElementById("detail6");
        if (x6.style.display === "none") {
            x6.style.display = "block";
        } else {
            x6.style.display = "none";
        }
    }

    function myFunction7() {
        var x7 = document.getElementById("detail7");
        if (x7.style.display === "none") {
            x7.style.display = "block";
        } else {
            x7.style.display = "none";
        }
    }

    function myFunction8() {
        var x8 = document.getElementById("detail8");
        if (x8.style.display === "none") {
            x8.style.display = "block";
        } else {
            x8.style.display = "none";
        }
    }

    function myFunction9() {
        var x9 = document.getElementById("detail9");
        if (x9.style.display === "none") {
            x9.style.display = "block";
        } else {
            x9.style.display = "none";
        }
    }

    function myFunction10() {
        var x10 = document.getElementById("detail10");
        if (x10.style.display === "none") {
            x10.style.display = "block";
        } else {
            x10.style.display = "none";
        }
    }

    function myFunction11() {
        var x11 = document.getElementById("detail11");
        if (x11.style.display === "none") {
            x11.style.display = "block";
        } else {
            x11.style.display = "none";
        }
    }

    function myFunction12() {
        var x12 = document.getElementById("detail12");
        if (x12.style.display === "none") {
            x12.style.display = "block";
        } else {
            x12.style.display = "none";
        }
    }

    function myFunction13() {
        var x13 = document.getElementById("detail13");
        if (x13.style.display === "none") {
            x13.style.display = "block";
        } else {
            x13.style.display = "none";
        }
    }

    function myFunction14() {
        var x14 = document.getElementById("detail14");
        if (x14.style.display === "none") {
            x14.style.display = "block";
        } else {
            x14.style.display = "none";
        }
    }

    function myFunction15() {
        var x15 = document.getElementById("detail15");
        if (x15.style.display === "none") {
            x15.style.display = "block";
        } else {
            x15.style.display = "none";
        }
    }

    function myFunction16() {
        var x16 = document.getElementById("detail16");
        if (x16.style.display === "none") {
            x16.style.display = "block";
        } else {
            x16.style.display = "none";
        }
    }

    function myFunction17() {
        var x17 = document.getElementById("detail17");
        if (x17.style.display === "none") {
            x17.style.display = "block";
        } else {
            x17.style.display = "none";
        }
    }

    function myFunction18() {
        var x18 = document.getElementById("detail18");
        if (x18.style.display === "none") {
            x18.style.display = "block";
        } else {
            x18.style.display = "none";
        }
    }

    function myFunction19() {
        var x19 = document.getElementById("detail19");
        if (x19.style.display === "none") {
            x19.style.display = "block";
        } else {
            x19.style.display = "none";
        }
    }

    function myFunction20() {
        var x20 = document.getElementById("detail20");
        if (x20.style.display === "none") {
            x20.style.display = "block";
        } else {
            x20.style.display = "none";
        }
    }

    function myFunction21() {
        var x21 = document.getElementById("detail21");
        if (x21.style.display === "none") {
            x21.style.display = "block";
        } else {
            x21.style.display = "none";
        }
    }

    function myFunction22() {
        var x22 = document.getElementById("detail22");
        if (x22.style.display === "none") {
            x22.style.display = "block";
        } else {
            x22.style.display = "none";
        }
    }

    function myFunction23() {
        var x23 = document.getElementById("detail23");
        if (x23.style.display === "none") {
            x23.style.display = "block";
        } else {
            x23.style.display = "none";
        }
    }

    function myFunction24() {
        var x24 = document.getElementById("detail24");
        if (x24.style.display === "none") {
            x24.style.display = "block";
        } else {
            x24.style.display = "none";
        }
    }

    function myFunction25() {
        var x25 = document.getElementById("detail25");
        if (x25.style.display === "none") {
            x25.style.display = "block";
        } else {
            x25.style.display = "none";
        }
    }

    function myFunction26() {
        var x26 = document.getElementById("detail26");
        if (x26.style.display === "none") {
            x26.style.display = "block";
        } else {
            x26.style.display = "none";
        }
    }

    function myFunction27() {
        var x27 = document.getElementById("detail27");
        if (x27.style.display === "none") {
            x27.style.display = "block";
        } else {
            x27.style.display = "none";
        }
    }

    function myFunction28() {
        var x28 = document.getElementById("detail28");
        if (x28.style.display === "none") {
            x28.style.display = "block";
        } else {
            x28.style.display = "none";
        }
    }

    function myFunction29() {
        var x29 = document.getElementById("detail29");
        if (x29.style.display === "none") {
            x29.style.display = "block";
        } else {
            x29.style.display = "none";
        }
    }

    function myFunction30() {
        var x30 = document.getElementById("detail30");
        if (x30.style.display === "none") {
            x30.style.display = "block";
        } else {
            x30.style.display = "none";
        }
    }

    function myFunction31() {
        var x31 = document.getElementById("detail31");
        if (x31.style.display === "none") {
            x31.style.display = "block";
        } else {
            x31.style.display = "none";
        }
    }

    function myFunction32() {
        var x32 = document.getElementById("detail32");
        if (x32.style.display === "none") {
            x32.style.display = "block";
        } else {
            x32.style.display = "none";
        }
    }

    function myFunction33() {
        var x33 = document.getElementById("detail33");
        if (x33.style.display === "none") {
            x33.style.display = "block";
        } else {
            x33.style.display = "none";
        }
    }

</script>
@yield('script')

<script src="{{ asset('js/app.js') }}"></script>
</body>
<!-- END: Body-->

</html>
