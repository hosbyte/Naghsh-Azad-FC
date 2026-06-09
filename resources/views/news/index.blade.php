@extends('layouts.app')

@section('title', 'اخبار آکادمی')

@section('content')

    @push('scripts')
        <script src="{{ asset('js/news.js') }}"></script>
    @endpush

    <!-- HERO -->
    
    <section class="gallery-hero">

        <img src="{{ asset('images/player.png') }}" class="gallery-hero-player" alt="">

        <div class="container">

            <div class="gallery-hero-content">

                <h1> اخبار آکادمی</h1>
                <h1> نقش آزاد </h1>

                <p>
                    جدیدترین اخبار ، رویدادها و دستاوردهای
                </p>
                <p> 
                    آکادمی فوتبال نقش آزاد
                </p>

                <div class="breadcrumb-box">

                    <a href="/">خانه</a>

                    <span>/</span>

                    <span> اخبار </span>

                </div>

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
