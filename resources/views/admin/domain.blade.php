@extends('admin.layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">دامنه های آنالیز شده</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">دامنه</th>
                                <th scope="col">کاربر</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($domains as $val)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$val->sites}}</td>
                                <td>{{$val->user_id}}</td>
                                <td>{{$val->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="#" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">نمایش</a>
                                    <a href="#" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">حذف</a>
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
