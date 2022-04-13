<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="
                @if (\Illuminate\Support\Str::contains(request()->url(),'addSite'))
                                    سایت ها
                @elseif(\Illuminate\Support\Str::contains(request()->url(),'admin'))
                                    پنل ادمین
                @else{{route('home',['url' => $url])}}
                @endif">
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
            <li class="nav-item has-sub"><a href="{{route('home',['url' => auth()->user()->url])}}"><i
                        class="feather icon-layout"></i><span class="menu-title"
                                                              data-i18n="Content">داشبورد</span></a>
                <ul class="menu-content" style="">
                    @php
                        $sites = \App\Models\Site::where('user_id',auth()->user()->email)->paginate(10)
                    @endphp
                    @foreach($sites as $site)
                        <li class="{{ request()->input($site->sites) ? 'active' : '' }}"><a
                                href="{{route('home',['url'=>$site->sites])}}"><i class="feather icon-circle"></i><span
                                    class="menu-item"
                                    data-i18n="Grid">{{$site->sites}}</span></a>
                        </li>
                    @endforeach
                    <li class=""><a href="{{route('addSiteView',['url'=>$url])}}"><i class="feather icon-plus"></i><span
                                class="menu-item"
                                data-i18n="Helper Classes">افزودن سایت</span></a></li>
                </ul>
            </li>


            <li class=" navigation-header"><span>آنالیز</span>
            </li>
            <li class="nav-item"><a
                    href="{{route('tahlilTech',['url' => $url])}}"><i
                        class="fa fa-columns"></i><span class="menu-title" data-i18n="Calender">تحلیل تکنیکال</span></a>
            </li>

            <li class=" navigation-header"><span>مارکتینگ پلن</span>
            </li>
            <li class="nav-item"><a href="{{route('marketing.plan',['url' => $url])}}"><i
                        class="feather icon-calendar"></i><span class="menu-title"
                                                                data-i18n="Calender">سئو تکنیکال</span></a>
            </li>
            <li class="nav-item"><a href="{{route('internal.seo', ['url' => $url])}}"><i
                        class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">سئو داخلی</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{(\App\Models\InitSeo::all()->isEmpty()) ? route('internal.seo',['url' => $url]) : route('off.seo.index',['url' => $url])}}"><i
                        class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">سئو خارجی</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('internal.seo',['url' => $url])}}"><i
                        class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">لینک سازی</span></a>
            </li>

            <li class=" navigation-header"><span>رتبه کلمات</span>
            </li>
            <li class="nav-item"><a
                    href="#"><i
                        class="fa fa-columns"></i><span class="menu-title" data-i18n="Calender">رتبه کلمات</span></a>
            </li>


            <li class=" navigation-header"><span>اعلان ها</span>
            </li>
            <li class="nav-item"><a
                    href="{{route('notification',['url' => $url])}}"><i
                        class="ficon feather icon-bell"></i><span class="menu-title" data-i18n="Calender">اعلان ها</span></a>
            </li>

            <li class=" navigation-header"><span>پشتیبانی</span>
            </li>
            <li class="nav-item"><a
                    href="{{route('myTickets',['url' => $url])}}"><i
                        class="fa fa-support"></i><span class="menu-title" data-i18n="Calender">تیکت ها</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('ticket.create',['url' => $url])}}"><i
                        class="fa fa-send"></i><span class="menu-title" data-i18n="Calender">ارسال تیکت پشتیبانی</span></a>
            </li>
            <li class="nav-item"><a
                    href="tel://02166095138"><i
                        class="fa fa-phone-square"></i><span class="menu-title" data-i18n="Calender">تماس با ما</span></a>
            </li>

            <li class=" navigation-header"><span>تنظیمات</span>
            </li>
            <li class="nav-item"><a
                    href="{{url('/settings/' . $url)}}"><i
                        class="feather icon-settings"></i><span class="menu-title" data-i18n="Calender">تنظیمات</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
