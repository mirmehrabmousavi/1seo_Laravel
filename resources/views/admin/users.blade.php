@extends('admin.layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">کاربران</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">شماره تماس</th>
                                <th scope="col">آدرس سایت</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $val)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    <td>{{$val->number}}</td>
                                    <td>{{$val->url}}</td>
                                    <td>{{$val->created_at->toJalali()->formatDifference()}}</td>
                                    <td>
                                        <a href="{{route('admin.showUser',['id' => $val->id])}}" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">نمایش</a>
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
