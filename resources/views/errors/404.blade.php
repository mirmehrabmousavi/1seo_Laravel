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
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <a class="btn btn-primary btn-lg mt-2 waves-effect waves-light" href="{{(auth()->check()) ? route('home',['url' => auth()->user()->url]) : route('index') }}">بازگشت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
