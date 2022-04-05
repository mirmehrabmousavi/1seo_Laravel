@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('res'))
                <div class="alert alert-success" role="alert">
                    {{ session('res') }}
                </div>
            @endif
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">تغییر رمز عبور</div>

                    <div class="card-body">
                        <form action="{{route('admin.update.password',['id' => auth()->user()->id])}}" method="POST" novalidate="">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-old-password">رمز عبور کنونی</label>
                                            <input type="password" name="current_password"
                                                   autocomplete="current_password" class="form-control"
                                                   id="account-old-password" required="" placeholder="رمز عبور کنونی"
                                                   data-validation-required-message="This old password field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-new-password">رمز عبور جدید</label>
                                            <input type="password" name="new_password" autocomplete="current_password"
                                                   id="account-new-password" class="form-control"
                                                   placeholder="رمز عبور جدید" required=""
                                                   data-validation-required-message="The password field is required"
                                                   minlength="6">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-retype-new-password">رمز عبور جدید</label>
                                            <input type="password" name="new_confirm_password"
                                                   autocomplete="current-password" class="form-control" required=""
                                                   id="account-retype-new-password"
                                                   data-validation-match-match="password" placeholder="رمز عبور جدید"
                                                   data-validation-required-message="The Confirm password field is required"
                                                   minlength="6">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit"
                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">ذخیره
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
