@extends('layouts.app')

@section('title', 'درباره ما')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

    <!-- Hero -->
    <section class="contact-hero">

        <div class="container">

            <div class="contact-hero-content">

                <h1>
                    درباره ما
                </h1>

                <h4>
                    برای ساخت آینده ای روشن در فوتبال فعالیت می کنیم
                </h4>

                <div class="breadcrumb-box">

                    <a href="/">خانه</a>

                    <span>›</span>

                    <span>درباره با ما</span>

                </div>

            </div>

        </div>

    </section>

    <!-- Story -->
    <section class="story-section">

        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-5">

                    <div class="story-content">

                        <span class="section-label">
                            داستان ما
                        </span>

                        <h2>
                            از یک رویا تا ساختن آینده‌ای بهتر
                        </h2>

                        <p>
                            آکادمی فوتبال نقش آزاد از سال ۱۳۹۵ با هدف
                            کشف استعدادها و آموزش حرفه‌ای فوتبال فعالیت می‌کند.
                        </p>

                        <a href="#" class="btn primary-btn">

                            مشاهده برنامه‌ها

                        </a>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="story-image-wrapper">

                        <img src="{{ asset('images/player.png') }}" class="story-image" alt="">

                        <div class="vision-card">

                            <h4>
                                چشم‌انداز ما
                            </h4>

                            <p>
                                تبدیل شدن به برترین آکادمی فوتبال کشور
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Stats -->
    <section class="about-stats">

        <div class="container">

            <div class="stats-card">

                <div class="stat-item">

                    <i class="bi bi-award"></i>

                    <div>

                        <h3>10+</h3>

                        <span>سال سابقه فعالیت</span>

                    </div>

                </div>

                <div class="stat-item">

                    <i class="bi bi-people"></i>

                    <div>

                        <h3>150+</h3>

                        <span>بازیکن فعال</span>

                    </div>

                </div>

                <div class="stat-item">

                    <i class="bi bi-mortarboard"></i>

                    <div>

                        <h3>20+</h3>

                        <span>مربی حرفه‌ای</span>

                    </div>

                </div>

                <div class="stat-item">

                    <i class="bi bi-trophy"></i>

                    <div>

                        <h3>50+</h3>

                        <span>افتخارات کسب شده</span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Values -->
    <section class="values-section">

        <div class="container">

            <div class="section-title">

                <span>
                    <h3> ارزش‌های ما </h3>
                </span>

                <h2>
                    باورهایی که ما را متمایز می‌کنند
                </h2>

            </div>

            <div class="values-grid">

                <div class="value-card">
                    <i class="bi bi-heart"></i>
                    <h4>عشق به فوتبال</h4>
                    <p>فوتبال برای ما یک سبک زندگی است.</p>
                </div>

                <div class="value-card">
                    <i class="bi bi-book"></i>
                    <h4>انضباط و نظم</h4>
                    <p>پایه موفقیت در ورزش و زندگی.</p>
                </div>

                <div class="value-card">
                    <i class="bi bi-people"></i>
                    <h4>کار تیمی</h4>
                    <p>موفقیت در کنار یکدیگر معنا پیدا می‌کند.</p>
                </div>

                <div class="value-card">
                    <i class="bi bi-graph-up"></i>
                    <h4>تلاش و پیشرفت</h4>
                    <p>هر روز بهتر از دیروز.</p>
                </div>

                <div class="value-card">
                    <i class="bi bi-person-heart"></i>
                    <h4>احترام و اخلاق</h4>
                    <p>مهم‌ترین اصل در تربیت بازیکنان.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- Coaches -->
    <section class="coaches-section">

        <div class="container">

            <div class="section-title">

                <h2>
                    مربیان حرفه‌ای ما
                </h2>

            </div>

            <div class="coaches-grid">

                @for ($i = 1; $i <= 4; $i++)
                    <div class="coach-card">

                        <img src="{{ asset('images/about/coach' . $i . '.png') }}" alt="">

                        <div class="coach-info">

                            <h4>علی محمدی</h4>

                            <span>مربی بدنساز</span>

                            <p>سابقه کار: ۸ سال</p>

                        </div>

                    </div>
                @endfor

            </div>

        </div>

    </section>

    <!-- Facilities -->

    {{-- <section class="facilities-section">

        <div class="container">

            <div class="section-title">

                <h2>
                    امکانات آکادمی
                </h2>

            </div>

            <div class="facilities-grid">

                @for ($i = 1; $i <= 5; $i++)
                    <div class="facility-card">

                        <img src="{{ asset('images/about/facility' . $i . '.jpg') }}" alt="">

                        <div class="facility-title">

                            سالن بدنسازی مجهز

                        </div>

                    </div>
                @endfor

            </div>

        </div>

    </section> --}}

@endsection
