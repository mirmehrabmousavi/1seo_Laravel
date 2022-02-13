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
            <li class="nav-item has-sub"><a href="#"><i class="feather icon-layout"></i><span class="menu-title"
                                                                                              data-i18n="Content">سایت ها</span></a>
                <ul class="menu-content" style="">
                    <li class="active"><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                            data-i18n="Grid">
                                  @if(auth()->check())
                                    {{auth()->user()->url}}
                                @else
                                    ...
                                @endif
                            </span></a>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                      data-i18n="Grid">tippler.ir</span></a>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                      data-i18n="Typography">available.ir</span></a>
                    </li>
                    <li class=""><a href="{{route('addSite')}}"><i class="feather icon-plus"></i><span class="menu-item"
                                                                                    data-i18n="Helper Classes">افزودن سایت</span></a>
                    </li>
                </ul>
            </li>
            <li class="active nav-item"><a href="{{route('home')}}"><i class="feather icon-database"></i><span class="menu-title"
                                                                                               data-i18n="Email">آنالیز</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
