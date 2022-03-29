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
                            @foreach($off_seo_action as $actions)
                                @if($actions->done === '0')
                                    <div class="alert alert-light" role="alert">
                                        <h4 class="alert-heading"><span
                                                class="float-right">{{$actions->created_at->diffForHumans()}}</span>فعالیت {{$actions->id}}
                                        </h4>
                                        <p class="mb-0">{!! $actions->action !!}</p>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-12">
                                                <a href="http://1seo.site/mag/"
                                                   class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">
                                                    راهنما
                                                </a>
                                            </div>
                                            <div class="col-lg-9 col-md-12"></div>
                                            <div class="col-lg-2 col-md-12">
                                                <button type="button"
                                                        class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1"
                                                        id="confirm-color" data-toggle="modal" data-target="#form{{$actions->id}}">انجام دادم
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="form{{$actions->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel33">آدرس فعالیتت رو وارد کن</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{route('off.seo.add.url',['url' => $url , 'id' => $actions->id])}}" method="POST">
                                                                @csrf
                                                                @method('patch')
                                                                <div class="modal-body">
                                                                    <label>url: {{$actions->baseurl .' - '. $actions->id}}</label>
                                                                    <div class="form-group">
                                                                        <input type="text" name="url" placeholder="آدرس محتواتو وارد کن" class="form-control">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">تایید</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($actions->done === '1')
                                    <div class="alert alert-dark" role="alert">
                                    <h4 class="alert-heading"><span
                                            class="float-right">{{$actions->created_at->diffForHumans()}}</span>  فعالیت {{$actions->id}}
                                    </h4>
                                    <p class="mb-0">{!! $actions->action !!}</p>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12"></div>
                                        <div class="col-lg-9 col-md-12"></div>
                                        <div class="col-lg-2 col-md-12">
                                            <button type="button"
                                                    class="btn bg-gradient-success btn-block mr-1 mb-1 waves-effect waves-light mt-1" disabled>انجام شد
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
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
