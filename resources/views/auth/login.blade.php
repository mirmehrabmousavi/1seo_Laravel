@extends('layouts.app')

@section('style')
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" href="/app-assets/css-rtl/app.css">

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
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

@endsection

@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="/app-assets/images/pages/login.png" alt="branding logo">
                                <p style="color: #0b0b0b" class="pt-3">بعد از ورود عملیات ورود به سایت ممکن است تا چند دقیقه طول بکشد. <span style="color:darkgreen">پس لطفا صبر کنید</span>.</p>

                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ورود</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">لطفا وارد حساب کاربری خود شوید</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">
                                            <form action="{{route('login')}}" method="POST">
                                                @csrf
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" name="email" value="{{old('email')}}" class="form-control" id="user-name" placeholder="نام کاربری" required autocomplete="email" autofocus>
                                                    <label for="user-name">نام کاربری</label>
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="user-password" placeholder="رمز عبور" required autocomplete="password">
                                                    <label for="user-password">رمز عبور</label>
                                                </fieldset>
                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" name="remember" {{old('remember' ? 'checked' : '')}}>
                                                                <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                <span class="">مرا به خاطر بسپار</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="text-right"><a href="{{route('password.request')}}" class="card-link">رمز عبورمو فراموش کردم:(</a></div>
                                                </div>
                                                <a href="{{route('register')}}" class="btn btn-outline-primary float-left btn-inline">ثبت نام</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">ورود</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                            <div class="divider-text">OR</div>
                                        </div>
                                        <div class="footer-btn d-inline">
                                            <a href="#" class="btn btn-google"><span class="fa fa-google"></span>  ورود با حساب گوگل  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('script')
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <script src="/app-assets/js/scripts/components.js"></script>
@endsection
