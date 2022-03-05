@extends('layouts.app')

@section('style')

@endsection

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">اطلاعات زیر را تکمیل کنید</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('internal.seo.store',['url' => $url])}}" method="POST" class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="type">
                                                    نوع سایت
                                                </label>
                                                <select class="custom-select form-control" id="type" name="type_site" required>
                                                    <option value="ecommerce">فروشگاهی</option>
                                                    <option value="service">خدماتی</option>
                                                    <option value="directory">دایرکتوری</option>
                                                    <option value="corporate">شرکتی</option>
                                                    <option value="personal">شخصی</option>
                                                    <option value="indicative">خبری</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>کلمات کلیدی سایت</span>
                                                </div>
                                                <textarea name="keyword_site" data-length=200 class="form-control char-textarea" id="keyword"
                                                          rows="6" placeholder="هر کلمه در یک سطر" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>سئو محلی سایت</span>
                                                </div>
                                                <textarea name="local_site" data-length=200 class="form-control char-textarea"
                                                          id="init-seo" rows="6"
                                                          placeholder="هر کلمه در یک سطر" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ثبت</button>
                                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">ریست</button>
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

@section('script')

@endsection
