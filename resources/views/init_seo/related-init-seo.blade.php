@extends('layouts.app')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">اطلاعات زیر را تکمیل کنید</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('internal.seo.related.store',['url' => $url])}}" method="POST"
                                  class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="type">
                                                    نوع سایت
                                                </label>
                                                <select class="custom-select form-control" id="type" name="keyword_id">
                                                    @foreach(explode("\r\n",$init_seo_key->keyword_site) as $val)
                                                        <option value="{{$val}}">{{$val}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>کلمات مرتبط سایت</span>
                                                </div>
                                                <textarea name="related_site" data-length=200
                                                          class="form-control char-textarea" id="keyword"
                                                          rows="6" placeholder="هر کلمه در یک سطر" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <button type="submit"
                                                    class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ثبت
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
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            @foreach(explode("\r\n",$init_seo_key->keyword_site) as $val)
                                                <li>{{$val}}
                                                    <ul>
                                                        {{-- @foreach()--}}
                                                        <li>salam</li>
                                                        {{--@endforeach--}}
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="block-level-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <a href="{{redirect(route('internal.seo.index',['url' => $url]))}}"
                                           class="btn mb-1 btn-primary btn-lg btn-block waves-effect waves-light">تکمیل
                                            کردم</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
