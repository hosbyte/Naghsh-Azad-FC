@extends('layouts.app')

@section('title', 'آکادمی فوتبال نقش آزاد')

@section('content')

    {{-- <!-- Navbar -->
    <nav class="navbar navbar-expand-lg academy-navbar fixed-top">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="">
                <div>
                    <h5>نقش آزاد</h5>
                    <span>آکادمی فوتبال</span>
                </div>
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">خانه</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">برنامه‌ها</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">مربیان</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">گالری</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">اخبار</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>

                <a href="#" class="btn academy-btn"> ثبت نام <i class="bi bi-person-fill"></i></a>

            </div>

        </div>
    </nav> --}}

    <!-- Hero -->
    <section class="hero-section">

        <div class="hero-overlay"></div>

        <img src="{{ asset('images/player.png') }}" alt="" class="hero-player">

        <div class="container">

            <div class="hero-content">

                <span class="hero-badge">
                    آکادمی فوتبال
                </span>

                <h1>نقش آزاد</h1>

                <p>
                    پرورش استعدادها و ساختن قهرمانان فردا
                </p>

                <a href="#" class="btn singup-btn">
                    ثبت نام در آکادمی <i class="bi bi-plus-circle"></i>
                </a>
                <a href="#" class="btn abouthero-btn">
                    درباره ما <i class="bi bi-arrow-left"></i>
                </a>

            </div>

        </div>

        <!-- hero-features -->

        <div class="hero-features">

            <div class="feature-item">

                <img src="{{ asset('images/icons/player.png') }}" alt="">

                <div>
                    <h6>توسعه فردی</h6>
                    <span>تقویت مهارت‌های ذهنی و بدنی</span>
                </div>

            </div>

            <div class="feature-item">

                <img src="{{ asset('images/icons/training.png') }}" alt="">

                <div>
                    <h6>امکانات حرفه‌ای</h6>
                    <span>زمین و تجهیزات استاندارد</span>
                </div>

            </div>

            <div class="feature-item">

                <img src="{{ asset('images/icons/coach.png') }}" alt="">

                <div>
                    <h6>کادر فنی مجرب</h6>
                    <span>مربیان حرفه‌ای</span>
                </div>

            </div>

            <div class="feature-item">

                <img src="{{ asset('images/icons/program.png') }}" alt="">

                <div>
                    <h6>برنامه استاندارد</h6>
                    <span>متدهای روز دنیا</span>
                </div>

            </div>

        </div>

    </section>

    <!-- About Academy -->
    <section class="about-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <span class="section-tag">
                        درباره آکادمی
                    </span>

                    <h2 class="section-title">
                        آکادمی برای ساختن
                        <span>قهرمان‌های فردا</span>
                    </h2>

                    <p class="section-text">
                        آکادمی فوتبال نقش آزاد با هدف شناسایی و
                        پرورش استعدادهای جوان فوتبال تأسیس شده است.
                        ما با بهره‌گیری از مربیان حرفه‌ای و برنامه‌های
                        آموزشی اصولی، بازیکنان را برای موفقیت در سطوح
                        مختلف فوتبال آماده می‌کنیم.
                    </p>

                    <a href="#" class="btn about-btn">
                        بیشتر درباره ما <i class="bi bi-plus-circle"></i>
                    </a>

                </div>

                <div class="col-lg-6">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('images/team.jpg') }}" class="img-fluid about-image" alt="">

                        <div class="stat-box stat-1">

                            <img src="{{ asset('images/icons/people.png') }}" alt="">

                            <h4>150+</h4>

                            <span>بازیکن فعال</span>

                        </div>

                        <div class="stat-box stat-2">

                            <img src="{{ asset('images/icons/coach.png') }}" alt="">

                            <h4>20+</h4>

                            <span>مربی حرفه‌ای</span>

                        </div>

                        <div class="stat-box stat-3">

                            <img src="{{ asset('images/icons/cup.png') }}" alt="">

                            <h4>8+</h4>

                            <span>سال سابقه</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- programs section -->
    <section class="programs-section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title-small">
                    برنامه‌های آموزشی ما
                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg col-md-6">

                    <div class="program-card">

                        <i class="bi bi-stars"></i>

                        <h4>نونهالان</h4>

                        <span>6 تا 8 سال</span>

                        <p>
                            آموزش پایه فوتبال و هماهنگی حرکتی
                        </p>

                    </div>

                </div>

                <div class="col-lg col-md-6">

                    <div class="program-card">

                        <i class="bi bi-graph-up-arrow"></i>

                        <h4>نوجوانان</h4>

                        <span>9 تا 12 سال</span>

                        <p>
                            توسعه مهارت‌های فردی و تکنیکی
                        </p>

                    </div>

                </div>

                <div class="col-lg col-md-6">

                    <div class="program-card">

                        <i class="bi bi-trophy"></i>

                        <h4>جوانان</h4>

                        <span>13 تا 15 سال</span>

                        <p>
                            تاکتیک‌های تیمی و آمادگی جسمانی
                        </p>

                    </div>

                </div>

                {{-- <div class="col-lg col-md-6">

                    <div class="program-card">

                        <i class="bi bi-shield"></i>

                        <h4>امید</h4>

                        <span>16 تا 18 سال</span>

                        <p>
                            آماده‌سازی برای فوتبال حرفه‌ای
                        </p>

                    </div>

                </div>

                <div class="col-lg col-md-6">

                    <div class="program-card">

                        <i class="bi bi-trophy"></i>

                        <h4>فوق حرفه‌ای</h4>

                        <span>18+</span>

                        <p>
                            تمرینات پیشرفته و مسابقاتی
                        </p>

                    </div>

                </div> --}}

            </div>

        </div>

    </section>

    <!--//FIXME:  put picture -->
    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="container">

            <div class="row g-4 align-items-stretch">

                <!-- Content -->

                <div class="col-lg-5">

                    <div class="gallery-content">

                        <span>
                            محیط حرفه‌ای برای رشد
                        </span>

                        <h3>
                            تجربه‌ای فراتر از فوتبال
                        </h3>

                        <p>

                            در آکادمی نقش آزاد بازیکنان علاوه بر
                            آموزش‌های فنی و تاکتیکی، مهارت‌های
                            فردی، کار تیمی و نظم حرفه‌ای را نیز
                            فرا می‌گیرند.

                        </p>

                        <a href="#" class="btn gallery-btn">

                            گالری تصاویر <i class="bi bi-images"></i>

                        </a>

                    </div>

                </div>

                <!-- Images -->

                <div class="col-lg-7">

                    <div id="academyGallery" class="carousel slide h-100" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="gallery-grid">

                                    <img src="{{ asset('images/gallery1.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery2.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery3.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery4.jpg') }}" alt="">

                                </div>

                            </div>

                            {{-- <div class="carousel-item">

                                <div class="gallery-grid">

                                    <img src="{{ asset('images/gallery5.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery6.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery7.jpg') }}" alt="">

                                    <img src="{{ asset('images/gallery8.jpg') }}" alt="">

                                </div>

                            </div> --}}

                        </div>

                        <div class="carousel-indicators custom-indicators">

                            <button type="button" data-bs-target="#academyGallery" data-bs-slide-to="0"
                                class="active"></button>

                            <button type="button" data-bs-target="#academyGallery" data-bs-slide-to="1"></button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Statistics -->
    <section class="stats-section">

        <div class="container">

            <div class="stats-wrapper">

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <div class="stat-content">

                        <h3>300+</h3>

                        <p>بازیکن تربیت شده</p>

                    </div>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="bi bi-award"></i>
                    </div>

                    <div class="stat-content">

                        <h3>10+</h3>

                        <p>تورنمنت و مسابقات</p>

                    </div>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="bi bi-trophy"></i>
                    </div>

                    <div class="stat-content">

                        <h3>3+</h3>

                        <p>افتخارات و قهرمانی</p>

                    </div>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div class="stat-content">

                        <h3>10000+</h3>

                        <p>ساعت تمرین تخصصی</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- //FIXME: put link -->
    <!-- footer -->
    {{-- <footer class="academy-footer">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4">

                    <h3>
                        نقش آزاد
                    </h3>

                    <p>

                        آکادمی تخصصی فوتبال برای
                        پرورش استعدادهای نسل آینده.

                    </p>

                </div>

                <div class="col-lg-2">

                    <h5>
                        برنامه‌ها
                    </h5>

                    <ul>

                        <li>نونهالان</li>
                        <li>نوجوانان</li>
                        <li>جوانان</li>
                        <li>امید</li>

                    </ul>

                </div>

                <div class="col-lg-2">

                    <h5>
                        دسترسی سریع
                    </h5>

                    <ul>

                        <li>خانه</li>
                        <li>اخبار</li>
                        <li>گالری</li>
                        <li>تماس با ما</li>

                    </ul>

                </div>

                {{-- <div class="col-lg-4">

                    <h5>

                        خبرنامه

                    </h5>

                    <div class="newsletter-box">

                        <input type="email" placeholder="ایمیل شما">

                        <button>

                            عضویت

                        </button>

                    </div>

                </div> --}

            </div>

            <hr>

            <div class="footer-bottom">

                © تمامی حقوق محفوظ است.

            </div>

        </div>

    </footer> --}}
@endsection
