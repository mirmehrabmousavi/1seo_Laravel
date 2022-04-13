@extends('layouts.app')

@section('content')
    <section id="page-account-settings">
        <div class="row">
            @if (session('res'))
                <div class="alert alert-success">
                    {{ session('res') }}
                </div>
        @endif
        <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                           href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            عمومی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                           href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            تغییر رمز عبور
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                           href="#account-vertical-info" aria-expanded="false">
                            <i class="feather icon-info mr-50 font-medium-3"></i>
                            اطلاعات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                           href="#account-vertical-social" aria-expanded="false">
                            <i class="feather icon-camera mr-50 font-medium-3"></i>
                            شبکه های اجتماعی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill"
                           href="#account-vertical-connections" aria-expanded="false">
                            <i class="feather icon-feather mr-50 font-medium-3"></i>
                            اتصالات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
                           href="#account-vertical-notifications" aria-expanded="false">
                            <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                            اعلان ها
                        </a>
                    </li>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                     aria-labelledby="account-pill-general" aria-expanded="true">
                                    <div class="media">
                                        <a href="javascript: void(0);">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg"
                                                 class="rounded mr-75" alt="profile image" height="64" width="64">
                                        </a>
                                        <div class="media-body mt-75">
                                            <div
                                                class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label
                                                    class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light"
                                                    for="account-upload">اپلود تصویر جدید</label>
                                                <input type="file" id="account-upload" hidden="">
                                                <button
                                                    class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">
                                                    ریست
                                                </button>
                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                    size of
                                                    800kB</small></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="{{route('update.settings',['url' => $url])}}" method="POST"
                                          novalidate="">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">نام کاربری</label>
                                                        <input type="text" name="name" class="form-control"
                                                               value="{{auth()->user()->name}}" id="account-username" required=""
                                                               data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-e-mail">ایمیل</label>
                                                        <input type="email" name="email" class="form-control"
                                                               value="{{auth()->user()->email}}" id="account-e-mail" required=""
                                                               data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-phone">شماره تماس</label>
                                                        <input type="text" name="number" class="form-control"
                                                               id="account-phone" required="" value="{{auth()->user()->number}}"
                                                               data-validation-required-message="This phone number field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-company">URL</label>
                                                    <input type="text" name="url" class="form-control"
                                                           id="account-company" value="{{auth()->user()->url}}">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                     aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form action="{{route('update.password',['url' => $url])}}" method="POST"
                                          novalidate="">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">رمز عبور کنونی</label>
                                                        <input type="password" name="current_password"
                                                               autocomplete="current_password" class="form-control"
                                                               id="account-old-password" required=""
                                                               placeholder="رمز عبور کنونی"
                                                               data-validation-required-message="This old password field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">رمز عبور جدید</label>
                                                        <input type="password" name="new_password"
                                                               autocomplete="current_password" id="account-new-password"
                                                               class="form-control" placeholder="رمز عبور جدید"
                                                               required=""
                                                               data-validation-required-message="The password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">رمز عبور جدید</label>
                                                        <input type="password" name="new_confirm_password"
                                                               autocomplete="current-password" class="form-control"
                                                               required="" id="account-retype-new-password"
                                                               data-validation-match-match="password"
                                                               placeholder="رمز عبور جدید"
                                                               data-validation-required-message="The Confirm password field is required"
                                                               minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    ذخیره
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                     aria-labelledby="account-pill-info" aria-expanded="false">
                                    <form novalidate="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="accountTextarea">Bio</label>
                                                    <textarea class="form-control" id="accountTextarea" rows="3"
                                                              placeholder="Your Bio data here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-birth-date">Birth date</label>
                                                        <input type="text"
                                                               class="form-control birthdate-picker picker__input"
                                                               required="" placeholder="Birth date"
                                                               id="account-birth-date"
                                                               data-validation-required-message="This birthdate field is required"
                                                               readonly="" aria-haspopup="true" aria-readonly="false"
                                                               aria-owns="account-birth-date_root">
                                                        <div class="picker" id="account-birth-date_root"
                                                             aria-hidden="true">
                                                            <div class="picker__holder" tabindex="-1">
                                                                <div class="picker__frame">
                                                                    <div class="picker__wrap">
                                                                        <div class="picker__box">
                                                                            <div class="picker__header">
                                                                                <div class="picker__month">April</div>
                                                                                <div class="picker__year">2022</div>
                                                                                <div class="picker__nav--prev"
                                                                                     data-nav="-1" tabindex="0"
                                                                                     role="button"
                                                                                     aria-controls="account-birth-date_table"
                                                                                     title="Previous month"></div>
                                                                                <div class="picker__nav--next"
                                                                                     data-nav="1" tabindex="0"
                                                                                     role="button"
                                                                                     aria-controls="account-birth-date_table"
                                                                                     title="Next month"></div>
                                                                            </div>
                                                                            <table class="picker__table"
                                                                                   id="account-birth-date_table"
                                                                                   role="grid"
                                                                                   aria-controls="account-birth-date"
                                                                                   aria-readonly="true">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Sunday">Sun
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Monday">Mon
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Tuesday">Tue
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Wednesday">
                                                                                        Wed
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Thursday">Thu
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Friday">Fri
                                                                                    </th>
                                                                                    <th class="picker__weekday"
                                                                                        scope="col" title="Saturday">Sat
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1648323000000"
                                                                                            id="account-birth-date_1648323000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="March, 27, 2022">
                                                                                            27
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1648409400000"
                                                                                            id="account-birth-date_1648409400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="March, 28, 2022">
                                                                                            28
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1648495800000"
                                                                                            id="account-birth-date_1648495800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="March, 29, 2022">
                                                                                            29
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1648582200000"
                                                                                            id="account-birth-date_1648582200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="March, 30, 2022">
                                                                                            30
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1648668600000"
                                                                                            id="account-birth-date_1648668600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="March, 31, 2022">
                                                                                            31
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1648755000000"
                                                                                            id="account-birth-date_1648755000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 1, 2022">
                                                                                            1
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1648841400000"
                                                                                            id="account-birth-date_1648841400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 2, 2022">
                                                                                            2
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1648927800000"
                                                                                            id="account-birth-date_1648927800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 3, 2022">
                                                                                            3
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                            data-pick="1649014200000"
                                                                                            id="account-birth-date_1649014200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 4, 2022"
                                                                                            aria-activedescendant="1649014200000">
                                                                                            4
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649100600000"
                                                                                            id="account-birth-date_1649100600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 5, 2022">
                                                                                            5
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649187000000"
                                                                                            id="account-birth-date_1649187000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 6, 2022">
                                                                                            6
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649273400000"
                                                                                            id="account-birth-date_1649273400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 7, 2022">
                                                                                            7
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649359800000"
                                                                                            id="account-birth-date_1649359800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 8, 2022">
                                                                                            8
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649446200000"
                                                                                            id="account-birth-date_1649446200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 9, 2022">
                                                                                            9
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649532600000"
                                                                                            id="account-birth-date_1649532600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 10, 2022">
                                                                                            10
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649619000000"
                                                                                            id="account-birth-date_1649619000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 11, 2022">
                                                                                            11
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649705400000"
                                                                                            id="account-birth-date_1649705400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 12, 2022">
                                                                                            12
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649791800000"
                                                                                            id="account-birth-date_1649791800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 13, 2022">
                                                                                            13
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649878200000"
                                                                                            id="account-birth-date_1649878200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 14, 2022">
                                                                                            14
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1649964600000"
                                                                                            id="account-birth-date_1649964600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 15, 2022">
                                                                                            15
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650051000000"
                                                                                            id="account-birth-date_1650051000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 16, 2022">
                                                                                            16
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650137400000"
                                                                                            id="account-birth-date_1650137400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 17, 2022">
                                                                                            17
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650223800000"
                                                                                            id="account-birth-date_1650223800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 18, 2022">
                                                                                            18
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650310200000"
                                                                                            id="account-birth-date_1650310200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 19, 2022">
                                                                                            19
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650396600000"
                                                                                            id="account-birth-date_1650396600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 20, 2022">
                                                                                            20
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650483000000"
                                                                                            id="account-birth-date_1650483000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 21, 2022">
                                                                                            21
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650569400000"
                                                                                            id="account-birth-date_1650569400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 22, 2022">
                                                                                            22
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650655800000"
                                                                                            id="account-birth-date_1650655800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 23, 2022">
                                                                                            23
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650742200000"
                                                                                            id="account-birth-date_1650742200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 24, 2022">
                                                                                            24
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650828600000"
                                                                                            id="account-birth-date_1650828600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 25, 2022">
                                                                                            25
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1650915000000"
                                                                                            id="account-birth-date_1650915000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 26, 2022">
                                                                                            26
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651001400000"
                                                                                            id="account-birth-date_1651001400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 27, 2022">
                                                                                            27
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651087800000"
                                                                                            id="account-birth-date_1651087800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 28, 2022">
                                                                                            28
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651174200000"
                                                                                            id="account-birth-date_1651174200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 29, 2022">
                                                                                            29
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--infocus"
                                                                                            data-pick="1651260600000"
                                                                                            id="account-birth-date_1651260600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="April, 30, 2022">
                                                                                            30
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651347000000"
                                                                                            id="account-birth-date_1651347000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 1, 2022">1
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651433400000"
                                                                                            id="account-birth-date_1651433400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 2, 2022">2
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651519800000"
                                                                                            id="account-birth-date_1651519800000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 3, 2022">3
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651606200000"
                                                                                            id="account-birth-date_1651606200000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 4, 2022">4
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651692600000"
                                                                                            id="account-birth-date_1651692600000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 5, 2022">5
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651779000000"
                                                                                            id="account-birth-date_1651779000000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 6, 2022">6
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="picker__day picker__day--outfocus"
                                                                                            data-pick="1651865400000"
                                                                                            id="account-birth-date_1651865400000"
                                                                                            tabindex="0" role="gridcell"
                                                                                            aria-label="May, 7, 2022">7
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="picker__footer">
                                                                                <button class="picker__button--today"
                                                                                        type="button"
                                                                                        data-pick="1649014200000"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Today
                                                                                </button>
                                                                                <button class="picker__button--clear"
                                                                                        type="button" data-clear="1"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Clear
                                                                                </button>
                                                                                <button class="picker__button--close"
                                                                                        type="button" data-close="true"
                                                                                        disabled=""
                                                                                        aria-controls="account-birth-date">
                                                                                    Close
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="accountSelect">Country</label>
                                                    <select class="form-control" id="accountSelect">
                                                        <option>USA</option>
                                                        <option>India</option>
                                                        <option>Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="languageselect2">Languages</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="languageselect2" multiple=""
                                                            data-select2-id="languageselect2" tabindex="-1"
                                                            aria-hidden="true">
                                                        <option value="English" selected="" data-select2-id="2">
                                                            English
                                                        </option>
                                                        <option value="Spanish">Spanish</option>
                                                        <option value="French">French</option>
                                                        <option value="Russian">Russian</option>
                                                        <option value="German">German</option>
                                                        <option value="Arabic" selected="" data-select2-id="3">Arabic
                                                        </option>
                                                        <option value="Sanskrit">Sanskrit</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice"
                                                                        title="English" data-select2-id="4"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>English</li><li
                                                                        class="select2-selection__choice" title="Arabic"
                                                                        data-select2-id="5"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Arabic</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-phone">Phone</label>
                                                        <input type="text" class="form-control" id="account-phone"
                                                               required="" placeholder="Phone number"
                                                               value="(+656) 254 2568"
                                                               data-validation-required-message="This phone number field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-website">Website</label>
                                                    <input type="text" class="form-control" id="account-website"
                                                           placeholder="Website address">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="musicselect2">Favourite Music</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="musicselect2" multiple="" data-select2-id="musicselect2"
                                                            tabindex="-1" aria-hidden="true">
                                                        <option value="Rock">Rock</option>
                                                        <option value="Jazz" selected="" data-select2-id="7">Jazz
                                                        </option>
                                                        <option value="Disco">Disco</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="Techno">Techno</option>
                                                        <option value="Folk" selected="" data-select2-id="8">Folk
                                                        </option>
                                                        <option value="Hip hop">Hip hop</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="6" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice" title="Jazz"
                                                                        data-select2-id="9"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Jazz</li><li
                                                                        class="select2-selection__choice" title="Folk"
                                                                        data-select2-id="10"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Folk</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="moviesselect2">Favourite movies</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                            id="moviesselect2" multiple=""
                                                            data-select2-id="moviesselect2" tabindex="-1"
                                                            aria-hidden="true">
                                                        <option value="The Dark Knight" selected=""
                                                                data-select2-id="12">The Dark Knight
                                                        </option>
                                                        <option value="Harry Potter" selected="" data-select2-id="13">
                                                            Harry Potter
                                                        </option>
                                                        <option value="Airplane!">Airplane!</option>
                                                        <option value="Perl Harbour">Perl Harbour</option>
                                                        <option value="Spider Man">Spider Man</option>
                                                        <option value="Iron Man" selected="" data-select2-id="14">Iron
                                                            Man
                                                        </option>
                                                        <option value="Avatar">Avatar</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="11" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false"><ul
                                                                    class="select2-selection__rendered"><li
                                                                        class="select2-selection__choice" title="The Dark Knight
                                                                    " data-select2-id="15"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>The Dark Knight
                                                                    </li><li class="select2-selection__choice"
                                                                             title="Harry Potter"
                                                                             data-select2-id="16"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Harry Potter</li><li
                                                                        class="select2-selection__choice"
                                                                        title="Iron Man" data-select2-id="17"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>Iron Man</li><li
                                                                        class="select2-search select2-search--inline"><input
                                                                            class="select2-search__field" type="search"
                                                                            tabindex="0" autocomplete="off"
                                                                            autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox"
                                                                            aria-autocomplete="list" placeholder=""
                                                                            style="width: 0.75em;"></li></ul></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    Save
                                                    changes
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                     aria-labelledby="account-pill-social" aria-expanded="false">
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-twitter">Twitter</label>
                                                    <input type="text" id="account-twitter" class="form-control"
                                                           placeholder="Add link" value="https://www.twitter.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">Facebook</label>
                                                    <input type="text" id="account-facebook" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-google">Google+</label>
                                                    <input type="text" id="account-google" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-linkedin">LinkedIn</label>
                                                    <input type="text" id="account-linkedin" class="form-control"
                                                           placeholder="Add link" value="https://www.linkedin.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-instagram">Instagram</label>
                                                    <input type="text" id="account-instagram" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-quora">Quora</label>
                                                    <input type="text" id="account-quora" class="form-control"
                                                           placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                    Save
                                                    changes
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                     aria-labelledby="account-pill-connections" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <a href="javascript: void(0);"
                                               class="btn btn-info waves-effect waves-light">Connect to
                                                <strong>Twitter</strong></a>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <button
                                                class=" btn btn-sm btn-secondary float-right waves-effect waves-light">
                                                edit
                                            </button>
                                            <h6>You are connected to facebook.</h6>
                                            <span>Johndoe@gmail.com</span>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <a href="javascript: void(0);"
                                               class="btn btn-danger waves-effect waves-light">Connect to
                                                <strong>Google</strong>
                                            </a>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <button
                                                class=" btn btn-sm btn-secondary float-right waves-effect waves-light">
                                                edit
                                            </button>
                                            <h6>You are connected to Instagram.</h6>
                                            <span>Johndoe@gmail.com</span>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                Save
                                                changes
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-outline-warning waves-effect waves-light">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                     aria-labelledby="account-pill-notifications" aria-expanded="false">
                                    <div class="row">
                                        <h6 class="m-1">Activity</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch1">
                                                <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                                <span class="switch-label w-100">Email me when someone comments
                                                                onmy
                                                                article</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch2">
                                                <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                                <span class="switch-label w-100">Email me when someone answers on
                                                                my
                                                                form</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                                <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                                <span class="switch-label w-100">Email me hen someone follows
                                                                me</span>
                                            </div>
                                        </div>
                                        <h6 class="m-1">Application</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch4">
                                                <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                                <span class="switch-label w-100">News and announcements</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                                <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                                <span class="switch-label w-100">Weekly product updates</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                       id="accountSwitch6">
                                                <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                                <span class="switch-label w-100">Weekly blog digest</span>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                                                Save
                                                changes
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-outline-warning waves-effect waves-light">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
