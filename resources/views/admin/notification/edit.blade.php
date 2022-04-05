@extends('admin.layouts.app')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                @if (session('res'))
                    <div class="alert alert-success">
                        {{ session('res') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ویرایش اعلان</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('admin.notif.update',['id' => $notification->id])}}" class="form form-horizontal" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                <label for="basicInput">عنوان</label>
                                                <input type="text" class="form-control" name="title"
                                                       value="{{ $notification->title }}" id="basicInput"
                                                       placeholder="عنوان را وارد کنید">
                                                @if ($errors->has('title'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} row">
                                                <div class="col-md-4">
                                                    <span>متن پیام</span>
                                                </div>
                                                <textarea name="desc"
                                                          class="form-control char-textarea" rows="10"
                                                          placeholder="متن پیام" required>{{$notification->desc}}</textarea>
                                                @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <button type="submit"
                                                    class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ویرایش
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
