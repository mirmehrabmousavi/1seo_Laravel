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
                                @foreach(explode("\r\n",$off_seo_key->keyword_site) as $val)
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                        </h4>
                                        <p class="mb-0">
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">{{$val/*[$loop->index]*/}}</span> بنویس و داخل سایتت
                                            قرار بده بعدش یه لینک با کلمه <span
                                                style="color: green">{{$siteTitle}}</span> بده به صفحه اصلی سایتت. :)
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
                                    @foreach(explode("\r\n",$off_seo_local->local_site) as $local_val)
                                        <div class="alert alert-light" role="alert">
                                            <h4 class="alert-heading"><span
                                                    class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                            </h4>

                                            <p class="mb-0">
                                                یه محتوا با کلمه کلیدی <span
                                                    style="color: red">{{$local_val/*[$loop->index]*/}}</span> بنویس و
                                                داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                    style="color: green">{{$val}}</span> بده به صفحه <span
                                                    style="color: green">{{$val}}</span> ساخته بودی. :)
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
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
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
                                        @foreach($related_key as $related_val)
                                            @foreach(explode("\r\n",$related_val->related_site) as $related_site)
                                                {{--    @if($loop->iteration > 1)--}}

                                                   <div id="delay" class="alert alert-light" role="alert">
                                                    <h4 class="alert-heading"><span
                                                            class="float-right">{{$in->created_at->diffForHumans()}}</span>فعالیت {{$loop->index+1}}
                                                    </h4>

                                                    <p class="mb-0">
                                                        یه محتوا با کلمه کلیدی <span
                                                            style="color: red">{{$related_site}}</span>
                                                        بنویس
                                                        و داخل سایتت قرار بده بعدش یه لینک با کلمه <span
                                                            style="color: green">{{$val}}</span> بده به صفحه
                                                        {{$val}} که قبلا ساختی. و همچنین یه لینک دیگه با
                                                        عنوان <span style="color: blue">{{$val.' در '.$local_val}}</span> بده به
                                                        صفحه <span style="color: blue">{{$val.' در '.$local_val}}</span>که ساخته بودی. :)
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-lg-1 col-md-12">
                                                            <button type="button"
                                                                    class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                                    data-toggle="modal"
                                                                    data-target="#success">راهنما
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade text-left" id="success"
                                                                 tabindex="-1" role="dialog"
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
                                                                            chocolate toffee chocolate
                                                                            bar icing. Pudding jelly beans
                                                                            carrot cake pastry gummies cheesecake
                                                                            lollipop. I love cookie
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
                                                {{--   @break

                                                   @endif--}}
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endforeach
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
