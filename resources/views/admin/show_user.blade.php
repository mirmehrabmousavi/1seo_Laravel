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
                                <th scope="col">کاربر</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>{{$user->number}}</td>
                            </tr>
                            <tr>
                                <td>{{$user->url}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" style="text-decoration: none" class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light">بازگشت</a>
@endsection
