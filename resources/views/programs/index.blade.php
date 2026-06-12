@extends('layouts.app')

@section('title', 'جزئیات برنامه')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/program-detail.css') }}">
@endpush

@section('content')

    <!-- HERO -->

    <section class="program-hero">

        <div class="container-fluid p-0">

            <div class="program-hero-wrapper">

                <div class="program-image">

                    <img src="{{ asset('images/program.jpg') }}" alt="">

                </div>

                <div class="program-content">

                    <span class="program-badge">
                        برنامه آموزشی
                    </span>

                    <h1>
                        تکنیک‌های پایه و کنترل توپ
                    </h1>

                    <p>
                        تقویت مهارت‌های فردی و تسلط بر کنترل توپ
                        در شرایط مختلف مسابقه
                    </p>

                    <div class="program-meta">

                        <div>

                            <h6>گروه سنی</h6>

                            <span>14 تا 16 سال</span>

                        </div>

                        <div>

                            <h6>سطح</h6>

                            <span>متوسط</span>

                        </div>

                        <div>

                            <h6>مدت دوره</h6>

                            <span>8 هفته</span>

                        </div>

                    </div>

                    <div class="hero-buttons">

                        <a href="#" class="btn btn-primary">

                            ثبت نام

                        </a>

                        <a href="#" class="btn btn-light">

                            دانلود بروشور

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- TABS -->

    <section class="course-tabs">

        <div class="container">

            <div class="tabs-wrapper">

                <a href="#intro">معرفی</a>

                <a href="#topics">سرفصل ها</a>

                <a href="#coach">مربی</a>

                <a href="#faq">سوالات متداول</a>

                <a href="#comments">نظرات</a>

            </div>

        </div>

    </section>

    <!-- INTRO -->

    <section id="intro" class="program-intro">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="intro-content">

                        <h2>
                            درباره این برنامه
                        </h2>

                        <p>
                            در این دوره بازیکنان اصول کنترل توپ،
                            دریافت، پاسکاری و تصمیم‌گیری را
                            آموزش خواهند دید.
                        </p>

                        <div class="benefits">

                            <div class="benefit-box">

                                افزایش مهارت فردی

                            </div>

                            <div class="benefit-box">

                                هماهنگی و تعادل

                            </div>

                            <div class="benefit-box">

                                اعتماد به نفس

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="video-box">

                        <img src="{{ asset('images/program-video.jpg') }}" alt="">

                        <button class="play-btn">

                            <i class="bi bi-play-fill"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- TOPICS -->

    <section id="topics" class="topics-section">

        <div class="container">

            <h2 class="section-title">

                سرفصل‌های آموزشی

            </h2>

            <div class="accordion">

                <div class="accordion-item">

                    <div class="accordion-header">

                        جلسه اول

                    </div>

                    <div class="accordion-body">

                        آشنایی با کنترل توپ

                    </div>

                </div>

                <div class="accordion-item">

                    <div class="accordion-header">

                        جلسه دوم

                    </div>

                    <div class="accordion-body">

                        پاسکاری و دریافت

                    </div>

                </div>

                <div class="accordion-item">

                    <div class="accordion-header">

                        جلسه سوم

                    </div>

                    <div class="accordion-body">

                        تصمیم گیری در بازی

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- COACH -->

    <section id="coach" class="coach-section">

        <div class="container">

            <div class="coach-box">

                <img src="{{ asset('images/coach.png') }}" alt="">

                <div class="coach-content">

                    <h3>
                        سعید رضایی
                    </h3>

                    <p>
                        مربی رسمی فدراسیون فوتبال
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->

    <section class="program-cta">

        <div class="container">

            <div class="cta-box">

                <h2>

                    همین حالا ثبت نام کنید

                </h2>

                <a href="#" class="btn btn-light">

                    ثبت نام دوره

                </a>

            </div>

        </div>

    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/program-detail.js') }}"></script>
@endpush
