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
                            @foreach($off_seo_action as $osa)
                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">{{$osa->created_at->diffForHumans()}}</span>  فعالیت {{$osa->id}}
                                    </h4>
                                    <p class="mb-0">{!! $osa->action !!}</p>
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
                            {{$off_seo_action->links('pagination.paginate')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
