@extends('layouts.app')

@section('title', 'آکادمی فوتبال نقش آزاد')

@section('content')

    <!-- Navbar -->
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
                        <a class="nav-link" href="#">اخبار</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>

                <a href="#" class="btn academy-btn"> ثبت نام </a>

            </div>

        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section">

        <div class="hero-overlay"></div>

        <div class="container">

            <div class="row align-items-center min-vh-100">

                <div class="col-lg-6 order-2 order-lg-1">

                    <div class="hero-image">
                        <img src="{{ asset('images/player.png') }}" alt="" class="img-fluid">
                    </div>

                </div>

                <div class="col-lg-6 order-1 order-lg-2">

                    <div class="hero-content">

                        <span class="hero-badge">
                            آکادمی فوتبال
                        </span>

                        <h1>
                            نقش آزاد
                        </h1>

                        <p>
                            پرورش استعدادها، ساختن آینده‌ای روشن
                            در فوتبال حرفه‌ای
                        </p>

                        <div class="hero-buttons">

                            <a href="#" class="btn btn-primary academy-main-btn">
                                ثبت نام در آکادمی
                            </a>

                            <a href="#" class="btn btn-light academy-outline-btn">
                                درباره ما
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Features -->
    <section class="features-section">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">

                        <i class="bi bi-graph-up"></i>

                        <h5>
                            توسعه فردی
                        </h5>

                        <p>
                            تقویت مهارت‌های ذهنی و بدنی
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">

                        <i class="bi bi-trophy"></i>

                        <h5>
                            امکانات حرفه‌ای
                        </h5>

                        <p>
                            زمین و تجهیزات استاندارد
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">

                        <i class="bi bi-people"></i>

                        <h5>
                            کادر مجرب
                        </h5>

                        <p>
                            مربیان دارای مدرک حرفه‌ای
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">

                        <i class="bi bi-award"></i>

                        <h5>
                            برنامه استاندارد
                        </h5>

                        <p>
                            بر اساس متدهای روز دنیا
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
