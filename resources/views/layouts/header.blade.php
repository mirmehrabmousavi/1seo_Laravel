<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <h4 class="user-name text-bold-600"><i class="feather icon-chevron-down"></i>
                                            {{$url}}
                                    </h4>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                @foreach($sites as $site)
                                    <a class="dropdown-item p-1"
                                       href="{{route('home',['url'=>$site->sites])}}">{{$site->sites}}</a>
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item p-1" href="{{route('addSiteView',['url'=>$url])}}"> افزودن سایت</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="جستجو" tabindex="-1"
                                   data-search="template-list">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon feather icon-bell"></i><span
                                @php
                                    $notif = \App\Models\Notification::all()
                                @endphp
                                class="badge badge-pill badge-primary badge-up">{{$notif->count()}}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">{{(empty($notif->count()) ? 'بدون پیام' : $notif->count() . ' پیام جدید')}}</h3><span
                                        class="notification-title">اعلان ها</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                @foreach($notif as $val)
                                <a class="d-flex justify-content-between" href="{{route('show.notif',['url' => $url,'id' => $val->id])}}">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i
                                                class="feather icon-plus-square font-medium-5 primary"></i></div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading">{{$val->title}}</h6><small
                                                class="notification-text">{{$val->desc}}</small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">{{$val->created_at->toJalali()->formatDifference()}}
                                            </time>
                                        </small>
                                    </div>
                                </a>
                                @endforeach
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                                                href="{{route('notification',['url'=>$url])}}">نمایش تمام اعلان ها</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name text-bold-600">{{auth()->user()->name}}</span></div>
                            <span><img class="round" src="/app-assets/images/portrait/small/avatar-s-23.jpg"
                                       alt="avatar"
                                       height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('settings',['url' => $url])}}"><i class="feather icon-user"></i>تنظیمات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="feather icon-power"></i> خروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->
