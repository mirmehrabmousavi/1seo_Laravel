@extends('layouts.app')

@section('style')
@endsection

@section('content')
    <section id="block-level-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">مدیریت سئو داخلی</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Block level buttons -->
                            <p>Create block level buttons—those that span the full width of a parent—by adding </p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <a href="{{route('edit.init.seo',['url' => $url,'id' => $init_seo->id])}}" class="btn mb-1 btn-primary btn-lg btn-block waves-effect waves-light">مدیریت کلمات کلیدی</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alert-colors">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            فعالیت های سئو داخلی
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                فعالیت های روزانه ات اینجا به نمایش گذاشته می شه :)
                            </p>
                            <div class="alert alert-light" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1" id="confirm-color">انجام دادم</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1 disabled">انجام شد</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1 disabled">انجام شد</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1 disabled">انجام شد</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1 disabled">انجام شد</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading"><span class="float-right">تاریخ</span>فعالیت اول</h4>

                                <p class="mb-0">
                                    سلام خوبی؟ امروز کاری که باید انجام بدی اینه که یه محتوا در رابطه با تعمیر موبایل در شهرک غرب بسازی :)
                                </p>
                                <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                        <button type="button" class="btn bg-gradient-primary btn-block mr-1 mb-1 waves-effect waves-light mt-1" data-toggle="modal" data-target="#success">راهنما</button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary white">
                                                        <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                                                        gummi
                                                        bears cupcake dessert.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12"></div>
                                    <div class="col-lg-2 col-md-12">
                                        <button type="button" class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1 disabled">انجام شد</button>
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

@section('script')
@endsection
