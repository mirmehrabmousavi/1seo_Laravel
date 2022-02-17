@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">افزودن سایت</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{route('addSite')}}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="site"
                                               placeholder="آدرس سایت را وارد کنید">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">
                                        تایید
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
