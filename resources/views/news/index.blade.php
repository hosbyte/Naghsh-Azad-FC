@extends('layouts.app')

@section('title', 'اخبار آکادمی')

@section('content')

    @push('scripts')
        <script src="{{ asset('js/news.js') }}"></script>
    @endpush

    <!-- Hero -->

    <section class="news-hero">

        <div class="container">

            <div class="news-hero-content">

                <span>
                    آخرین رویدادها
                </span>

                <h1>
                    اخبار آکادمی فوتبال نقش آزاد
                </h1>

                <p>
                    جدیدترین اخبار، مسابقات، رویدادها و موفقیت‌های آکادمی
                </p>

            </div>

        </div>

    </section>

    <!-- Featured News -->

    <section class="featured-news">

        <div class="container">

            <div class="featured-card">

                <div class="row align-items-center">

                    <div class="col-lg-6">

                        <img src="{{ asset('images/news/featured.jpg') }}" alt="" class="img-fluid">

                    </div>

                    <div class="col-lg-6">

                        <div class="featured-content">

                            <span class="news-category">
                                مسابقات
                            </span>

                            <h2>
                                قهرمانی تیم نوجوانان در مسابقات استانی
                            </h2>

                            <p>
                                تیم نوجوانان آکادمی نقش آزاد موفق شد
                                عنوان قهرمانی مسابقات استان را کسب کند.
                            </p>

                            <a href="#" class="btn news-btn">
                                مشاهده خبر
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- News Grid -->

    <section class="news-grid-section">

        <div class="container">

            <div class="row g-4">

                @for ($i = 1; $i <= 9; $i++)
                    <div class="col-lg-4 col-md-6">

                        <article class="news-card">

                            <img src="{{ asset('images/news/news.jpg') }}" alt="">

                            <div class="news-card-body">

                                <span>
                                    رویدادها
                                </span>

                                <h4>
                                    برگزاری اردوی آمادگی پیش فصل
                                </h4>

                                <p>
                                    بازیکنان آکادمی در اردوی آمادگی
                                    شرکت کردند.
                                </p>

                                <a href="#">
                                    ادامه مطلب
                                </a>

                            </div>

                        </article>

                    </div>
                @endfor

            </div>

        </div>

    </section>

@endsection
