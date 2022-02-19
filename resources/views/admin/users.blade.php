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
                            <tr>
                                <th scope="row">1</th>
                                <td>مهراب</td>
                                <td>mmmtkarimabadi@gmail.com</td>
                                <td>09369949693</td>
                                <td>dmfx.ir</td>
                                <td>3 ماه قبل</td>
                                <td>
                                    <a href="#" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">نمایش</a>
                                    <a href="#" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">حذف</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
