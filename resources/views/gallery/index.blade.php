@extends('layouts.app')

@section('title', 'گالری تصاویر')

{{-- @push('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endpush --}}

@section('content')

    <!-- Hero -->
    {{-- <section class="hero-section">

        <div class="hero-overlay"></div>

        <img src="{{ asset('images/player.png') }}" alt="" class="hero-player">

        <div class="container">

            <div class="hero-content">

                <span class="hero-badge">
                    آکادمی فوتبال
                </span>

                <h1>نقش آزاد</h1>

                <p>
                    گالری تصاویر 
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

        {{-- <div class="hero-features">

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

        </div> --}

    </section> --}}

    <!-- HERO -->

    <section class="gallery-hero">

        <img src="{{ asset('images/player.png') }}" class="gallery-hero-player" alt="">

        <div class="container">

            <div class="gallery-hero-content">

                <h1>گالری تصاویر</h1>

                <p>
                    لحظات پرشور و افتخار آکادمی فوتبال نقش آزاد
                </p>

                <div class="breadcrumb-box">

                    <a href="/">خانه</a>

                    <span>/</span>

                    <span>گالری تصاویر</span>

                </div>

            </div>

        </div>

    </section>

    <!-- FILTER -->

    <section class="gallery-filter-section">

        <div class="container">

            <div class="gallery-filter">

                <button class="active">
                    همه تصاویر
                </button>

                <button>
                    تمرینات
                </button>

                <button>
                    مسابقات
                </button>

                <button>
                    اردوها
                </button>

                <button>
                    پشت صحنه
                </button>

            </div>

        </div>

    </section>

    <!-- GALLERY -->

    <section class="gallery-grid-section">

        <div class="container">

            <div class="gallery-grid">

                @for ($i = 1; $i <= 12; $i++)
                    <div class="gallery-card">

                        <img src="{{ asset('images/gallery' . $i . '.jpg') }}" alt="">

                    </div>
                @endfor

            </div>

        </div>

    </section>

    <!-- PAGINATION -->

    {{-- <section class="gallery-pagination">

        <div class="container">

            <div class="pagination-wrapper">

                <a href="#">←</a>

                <a href="#" class="active">1</a>

                <a href="#">2</a>

                <a href="#">3</a>

                <a href="#">4</a>

                <a href="#">...</a>

                <a href="#">10</a>

                <a href="#">→</a>

            </div>

        </div>

    </section> --}}

@endsection

@push('scripts')
    <script src="{{ asset('js/gallery.js') }}"></script>
@endpush
