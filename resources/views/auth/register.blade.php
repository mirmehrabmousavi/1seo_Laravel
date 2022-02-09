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
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                <img src="/app-assets/images/pages/register.jpg" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ثبت نام</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">برای ثبت نام فیلد های زیر را پر کنید</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form action="{{route('register')}}" method="POST">
                                                @csrf
                                                <div class="form-label-group">
                                                    <input type="text" id="inputName" class="form-control" placeholder="نام" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    <label for="inputName">نام</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" class="form-control" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                    <label for="inputEmail">ایمیل</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="number" id="inputEmail" class="form-control" placeholder="شماره تماس" name="number" value="{{ old('number') }}" required autocomplete="number">
                                                    <label for="inputEmail">شماره تماس</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="inputEmail" class="form-control" placeholder="آدرس سایت" name="url" value="{{ old('url') }}" required autocomplete="url">
                                                    <label for="inputEmail">آدرس سایت</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputPassword" class="form-control" placeholder="رمز عبور" name="password" value="{{ old('password') }}" required autocomplete="password">
                                                    <label for="inputPassword">رمز عبور</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputConfPassword" class="form-control" placeholder="تایید رمز عبور" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation">
                                                    <label for="inputConfPassword">تایید رمز عبور</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                <span class=""> شرایط و قوانین را می پذیرم</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">ورود</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">ثبت نام</button>
                                            </form>
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
