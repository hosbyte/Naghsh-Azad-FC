@extends('layouts.app')

@section('title', 'اخبار آکادمی')

@section('content')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
    <script src="{{ asset('js/news.js') }}"></script>

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

            <div id="featuredNewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="30000">

                <div class="carousel-inner">

                    @foreach ($featuredNews as $featurednews)

                        <div class="carousel-item active">

                            <div class="featured-card">

                                <div class="row align-items-center">

                                    <div class="col-lg-6">

                                        <img src="{{ asset('storage/' . $featurednews->image_path) }}" class="img-fluid rounded-4" alt="">

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="featured-content">

                                            <h2>
                                                {{ $featurednews->title }}
                                            </h2>

                                            <p>
                                                {{ $featurednews->content }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <!-- دکمه قبلی -->
                <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#featuredNewsCarousel"
                    data-bs-slide="prev">

                    <i class="bi bi-chevron-right"></i>

                </button>

                <!-- دکمه بعدی -->
                <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#featuredNewsCarousel"
                    data-bs-slide="next">

                    <i class="bi bi-chevron-left"></i>

                </button>

            </div>

        </div>

    </section>

    <!-- News Grid -->
    <section class="news-grid-section">

        <div class="container">

            <div class="row g-4">

                @foreach ($news as $News)
                    <div class="col-lg-4 col-md-6">

                        <article class="news-card">

                            <img src="{{ asset('storage/' . $News->image_path) }}" alt="">

                            <div class="news-card-body">

                                <h4>
                                    {{ $News->title }}
                                </h4>

                                <p>
                                    {{ $News->content }}
                                </p>

                            </div>

                        </article>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

@endsection
