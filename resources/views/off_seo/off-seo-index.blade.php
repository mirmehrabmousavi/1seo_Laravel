@extends('layouts.app')

@section('style')
@endsection

@section('content')
    <section id="alert-colors">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            فعالیت های سئو خارجی
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                فعالیت های روزانه ات اینجا به نمایش گذاشته می شه :)
                            </p>
                            @foreach($off_seo as $in)
                                @php
                                    $profileLink = array(
                                       	'https://social.msdn.microsoft.com/	',
                                        'http://github.com/',
                                        'https://profiles.wordpress.org/',
                                        'https://issuu.com/',
                                        'https://en.gravatar.com/',
                                        'https://www.ted.com/',
                                        'http://flgclassifieds.cce.cornell.edu/',
                                        'https://setiathome.berkeley.edu/',
                                        'https://www.buzzfeed.com/',
                                        'https://www.lonelyplanet.com/',
                                        'https://www.mixcloud.com/',
                                        'https://about.me/',
                                        'https://hubpages.com/',
                                        'https://giphy.com/',
                                        'https://codepen.io/',
                                        'https://www.patreon.com/',
                                        'https://disqus.com/',
                                        'https://typeform.com/',
                                        'https://www.diigo.com/',
                                        'http://telegra.ph/',
                                        'https://500px.com/',
                                        'https://qiita.com/',
                                        'http://www.folkd.com/',
                                        'https://ello.co/',
                                        'https://soundcloud.com/',
                                        'http://coub.com/',
                                        'https://visual.ly/',
                                        'http://visual.ly/',
                                        'https://www.goodreads.com/',
                                        'https://www.openstreetmap.org/',
                                        'https://ello.co/',
                                        'https://weheartit.com/',
                                        'https://visual.ly/',
                                        'https://www.intensedebate.com/',
                                        'https://www.goodreads.com/',
                                        'http://forums.qrecall.com/',
                                        'https://www.gamespot.com/',
                                        'https://www.openstreetmap.org/',
                                        'https://soundcloud.com/',
                                        'https://www.instapaper.com/',
                                        'http://www.webestools.com/',
                                        'https://www.minds.com/',
                                        'https://penzu.com/',
                                        'http://orcid.org/',
                                        'http://librarything.com/',
                                    );
                                    $social = array('http://instagram.com','http://facebook.com','http://linkedin.com','http://twitter.com','http://pinterest.com','http://medium.com','http://youtube.com','http://tomblr.com');
                                    $blogs = array('imag.blog','blogfa.com','blog.ir','rozblog.ir','virgool.io');
                                    $threeblog = array('imag.blog','blogfa.com','blog.ir','rozblog.ir');
                                @endphp
                                @foreach($blogs as $blog)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            برو تو سایت <span style="color : green">{{$blog}}</span> قبت نام کن با عنوان
                                            مشابه <span style="color : red">{{$siteTitle}}</span> یه حساب کاربری ایجاد
                                            کن اطلاعات حسابت از جمله آدرس، شماره تلفن، درباره ما، و سایر موارد مورد نیاز
                                            رو تکمیل کن. :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110" style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title" id="myModalLabel110">Success
                                                                    Modal</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake chocolate toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry gummies cheesecake lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            @foreach($threeblog as $b)
                                @foreach(explode("\r\n",$off_seo_->keyword_site) as $key)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">{{$key}}</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">
                                                    راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success"
                                                     tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110"
                                                     style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title"
                                                                    id="myModalLabel110">Success
                                                                    Modal</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake
                                                                chocolate toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry gummies cheesecake
                                                                lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach(explode("\r\n",$off_seo_->local_site) as $local)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">{{$local}}</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">
                                                    راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success"
                                                     tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110"
                                                     style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title"
                                                                    id="myModalLabel110">Success
                                                                    Modal</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake
                                                                chocolate toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry gummies cheesecake
                                                                lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($related_key as $related_val)
                                    @foreach(explode("\r\n",$related_val->related_site) as $rel)
                                        <div class="alert alert-light" role="alert">
                                            <h4 class="alert-heading"><span
                                                    class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                            </h4>
                                            <p class="mb-0">
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">{{$rel}}</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-1 col-md-12">
                                                    <button type="button"
                                                            class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                            data-toggle="modal" data-target="#success">
                                                        راهنما
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="success"
                                                         tabindex="-1"
                                                         role="dialog"
                                                         aria-labelledby="myModalLabel110"
                                                         style="display: none;"
                                                         aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary white">
                                                                    <h5 class="modal-title"
                                                                        id="myModalLabel110">Success
                                                                        Modal</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake
                                                                    chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake
                                                                    lollipop. I love
                                                                    cookie
                                                                    lollipop cake I love sweet
                                                                    gummi
                                                                    bears cupcake dessert.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-12"></div>
                                                <div class="col-lg-2 col-md-12">
                                                    <button type="button"
                                                            class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                            id="confirm-color">انجام دادم
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endforeach
                            @foreach($threeblog as $b)
                                @foreach(explode("\r\n",$off_seo_->keyword_site) as $key)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">{{$key}}</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">{{$key}}</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">{{$key}}</span>
                                            . :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">
                                                    راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success"
                                                     tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110"
                                                     style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title"
                                                                    id="myModalLabel110">Success
                                                                    Modal</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake
                                                                chocolate toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry gummies cheesecake
                                                                lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach(explode("\r\n",$off_seo_->local_site) as $local)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">{{$local}}</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">{{$key}}</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">{{$key}}</span>
                                            . :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">
                                                    راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success"
                                                     tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110"
                                                     style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title"
                                                                    id="myModalLabel110">Success
                                                                    Modal</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake
                                                                chocolate toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry gummies cheesecake
                                                                lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($related_key as $related_val)
                                    @foreach(explode("\r\n",$related_val->related_site) as $rel)
                                        <div class="alert alert-light" role="alert">
                                            <h4 class="alert-heading"><span
                                                    class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                            </h4>
                                            <p class="mb-0">
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">{{$rel}}</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">{{$b}}</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه
                                                کلیدی <span style="color:blue">{{$key}}</span> بساز و کلمه
                                                کلیدی اصلی محتواتو لینک بده به صفحه <span
                                                    style="color:blue">{{$key}}</span> . :)
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-1 col-md-12">
                                                    <button type="button"
                                                            class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                            data-toggle="modal" data-target="#success">
                                                        راهنما
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="success"
                                                         tabindex="-1"
                                                         role="dialog"
                                                         aria-labelledby="myModalLabel110"
                                                         style="display: none;"
                                                         aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary white">
                                                                    <h5 class="modal-title"
                                                                        id="myModalLabel110">Success
                                                                        Modal</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake
                                                                    chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake
                                                                    lollipop. I love
                                                                    cookie
                                                                    lollipop cake I love sweet
                                                                    gummi
                                                                    bears cupcake dessert.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-12"></div>
                                                <div class="col-lg-2 col-md-12">
                                                    <button type="button"
                                                            class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                            id="confirm-color">انجام دادم
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endforeach

                            @foreach(explode("\r\n",$off_seo_->keyword_site) as $key)
                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">دیروز</span>فعالیت
                                    </h4>
                                    <p class="mb-0">
                                        محتوایی با کللمه کلیدی <span style="color: green">{{$key}}</span> که
                                        ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    data-toggle="modal" data-target="#success">راهنما
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="success" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="myModalLabel110" style="display: none;"
                                                 aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary white">
                                                            <h5 class="modal-title" id="myModalLabel110">
                                                                Success
                                                                Modal</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tart lemon drops macaroon oat cake chocolate
                                                            toffee
                                                            chocolate
                                                            bar icing. Pudding jelly beans
                                                            carrot cake pastry
                                                            4g1ummies cheesecake lollipop. I love
                                                            cookie
                                                            lollipop cake I love sweet
                                                            gummi
                                                            bears cupcake dessert.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-12"></div>
                                        <div class="col-lg-2 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    id="confirm-color">انجام دادم
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach(explode("\r\n",$off_seo_->local_site) as $local)
                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">دیروز</span>فعالیت
                                    </h4>
                                    <p class="mb-0">
                                        محتوایی با کللمه کلیدی <span style="color: green">{{$local}}</span>
                                        که ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    data-toggle="modal" data-target="#success">راهنما
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="success" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="myModalLabel110" style="display: none;"
                                                 aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary white">
                                                            <h5 class="modal-title" id="myModalLabel110">
                                                                Success
                                                                Modal</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tart lemon drops macaroon oat cake chocolate
                                                            toffee
                                                            chocolate
                                                            bar icing. Pudding jelly beans
                                                            carrot cake pastry
                                                            4g1ummies cheesecake lollipop. I love
                                                            cookie
                                                            lollipop cake I love sweet
                                                            gummi
                                                            bears cupcake dessert.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-12"></div>
                                        <div class="col-lg-2 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    id="confirm-color">انجام دادم
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach($related_key as $related_val)
                                @foreach(explode("\r\n",$related_val->related_site) as $rel)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">دیروز</span>فعالیت
                                        </h4>
                                        <p class="mb-0">
                                            محتوایی با کللمه کلیدی <span style="color: green">{{$rel}}</span> که
                                            ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                                href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        data-toggle="modal" data-target="#success">راهنما
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="success" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="myModalLabel110" style="display: none;"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary white">
                                                                <h5 class="modal-title" id="myModalLabel110">
                                                                    Success
                                                                    Modal</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Tart lemon drops macaroon oat cake chocolate
                                                                toffee
                                                                chocolate
                                                                bar icing. Pudding jelly beans
                                                                carrot cake pastry
                                                                4g1ummies cheesecake lollipop. I love
                                                                cookie
                                                                lollipop cake I love sweet
                                                                gummi
                                                                bears cupcake dessert.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color">انجام دادم
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                            @foreach($profileLink as $pl)
                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">دیروز</span>فعالیت
                                    </h4>
                                    <p class="mb-0">
                                        برو داخل سایت <a href="{{$pl}}">{{$pl}}</a> طبق راهنما یک پروفایل درست کنو آدرس
                                        سایت خودتو قرار بده.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    data-toggle="modal" data-target="#success">راهنما
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="success" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="myModalLabel110" style="display: none;"
                                                 aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary white">
                                                            <h5 class="modal-title" id="myModalLabel110">
                                                                Success
                                                                Modal</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tart lemon drops macaroon oat cake chocolate
                                                            toffee
                                                            chocolate
                                                            bar icing. Pudding jelly beans
                                                            carrot cake pastry
                                                            4g1ummies cheesecake lollipop. I love
                                                            cookie
                                                            lollipop cake I love sweet
                                                            gummi
                                                            bears cupcake dessert.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-12"></div>
                                        <div class="col-lg-2 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    id="confirm-color">انجام دادم
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach($social as $so)
                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">دیروز</span>فعالیت
                                    </h4>
                                    <p class="mb-0">
                                         برو داخل <a href="{{$so}}">{{$so}}</a> یه حساب کاربری به اسم <span style="color: red">{{$siteTitle}}</span> بساز. :)
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    data-toggle="modal" data-target="#success">راهنما
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="success" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="myModalLabel110" style="display: none;"
                                                 aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary white">
                                                            <h5 class="modal-title" id="myModalLabel110">
                                                                Success
                                                                Modal</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Tart lemon drops macaroon oat cake chocolate
                                                            toffee
                                                            chocolate
                                                            bar icing. Pudding jelly beans
                                                            carrot cake pastry
                                                            4g1ummies cheesecake lollipop. I love
                                                            cookie
                                                            lollipop cake I love sweet
                                                            gummi
                                                            bears cupcake dessert.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-12"></div>
                                        <div class="col-lg-2 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                    id="confirm-color">انجام دادم
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
