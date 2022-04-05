<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin')}}">
                    <img src="/app-assets/images/logo300.png" height="35" width="70">
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>ورژن v1.1.2</span>
            </li>
            <li class="nav-item"><a href="{{route('admin')}}"><i class="feather icon-home"></i><span class="menu-title"
                                                                                                     data-i18n="Calender">داشبورد</span></a>
            </li>
            <li class="nav-item"><a href="{{route('settings.management')}}"><i class="feather icon-settings"></i><span
                        class="menu-title" data-i18n="Calender">تنظیمات سایت</span></a>
            </li>
            <li class="nav-item"><a href="{{route('admin.edit.password',['id' => auth()->user()->id])}}"><i
                        class="fa fa-lock"></i><span class="menu-title" data-i18n="Calender">تغییر رمز عبور</span></a>
            </li>
            <li class="nav-item"><a href="{{route('domain.management')}}"><i class="feather icon-activity"></i><span
                        class="menu-title" data-i18n="Calender">دامنه های آنالیز شده</span></a>
            </li>
            <li class="nav-item"><a href="{{route('user.management')}}"><i class="feather icon-user"></i><span
                        class="menu-title" data-i18n="Calender">کاربران</span></a>
            </li>
            <li class="nav-item"><a href="{{route('admin.tickets')}}"><i class="fa fa-ticket"></i><span
                        class="menu-title" data-i18n="Calender">تیکت ها</span></a>
            </li>
            <li class="nav-item"><a href="{{route('admin.notification')}}"><i class="feather icon-bell"></i><span
                        class="menu-title" data-i18n="Calender">اعلان ها</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
