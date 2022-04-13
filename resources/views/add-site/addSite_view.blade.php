@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">افزودن سایت</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{route('addSite',['url'=>$url])}}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="sites"
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
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">سایت ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$site_fi->sites}}</td>
                                <td>{{$site_fi->created_at->toJalali()->formatDifference()}}</td>
                                <td><button type="button" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light" disabled>حذف</button></td>
                            </tr>
                            @foreach($sites_ex as $val)
                                <tr>
                                    <th scope="row">{{$loop->index+2}}</th>
                                    <td>{{$val->sites}}</td>
                                    <td>{{$val->created_at->toJalali()->formatDifference()}}</td>
                                    <td>
                                        {{--<a href="{{route('delSite',['url' => $url,'id' => $val->id])}}" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">حذف</a>--}}

                                        <form action="{{ route('delSite',['url' => $url,'id' => $val->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
