<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">آنالیز</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>بتا ورژن</span>
            </li>
            <li class="nav-item has-sub"><a href="{{route('home',['url' => auth()->user()->url])}}"><i
                        class="feather icon-layout"></i><span class="menu-title"
                                                              data-i18n="Content">آنالیز</span></a>
                <ul class="menu-content" style="">
                    @foreach($sites as $site)
                        <li class="{{ request()->input($site->sites) ? 'active' : '' }}"><a href="{{route('home',['url'=>$site->sites])}}"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                                                                                                                    data-i18n="Grid">{{$site->sites}}</span></a>
                        </li>
                    @endforeach
                    <li class=""><a href="{{route('addSite')}}"><i class="feather icon-plus"></i><span class="menu-item"
                                                                                                       data-i18n="Helper Classes">افزودن سایت</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{route('marketing.plan',['url' => $url/*substr(request()->url(), strrpos(request()->url(), 'home/' )+5)*/])}}"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">مارکتینگ پلن</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
