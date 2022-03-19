@extends('layouts.app')

@section('404')
    <section class="row">
        <div class="container">
            <div class="col-12 col-md-12 justify-content-center">
                <div class="card auth-card bg-transparent shadow-none rounded-0 pt-4 w-100">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="/app-assets/images/pages/404.png" class="img-fluid align-self-center" alt="branding logo">
                            <h1 class="font-large-2 my-1">404 - پیدا نشد!</h1>
                            <p class="p-2">
                                به لینک زیر مراجعه نمایید.
                            </p>
                            <a class="btn btn-primary btn-lg mt-2 waves-effect waves-light" href="{{(auth()->check()) ? route('home',['url' => auth()->user()->url]) : route('index') }}">بازگشت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
