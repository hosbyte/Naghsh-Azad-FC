@extends('layouts.app')

@section('title', 'جزئیات برنامه')

@section('content')

    <!-- HERO -->
    <section class="program-hero">

        <div class="container-fluid p-0">

            <div class="program-hero-wrapper">

                <div class="program-image">

                    <img src="{{ asset('images/player.png') }}" alt="">

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

                    {{-- <div class="program-meta">

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

                    </div> --}}

                    <div class="hero-buttons">

                        <a href="#" class="btn btn-primary">

                            ثبت نام

                        </a>

                        {{-- <a href="#" class="btn btn-light">

                            دانلود بروشور

                        </a> --}}

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- TABS -->
    {{-- <section class="course-tabs">

        <div class="container">

            <div class="tabs-wrapper">

                <a href="#intro">معرفی</a>

                <a href="#topics">سرفصل ها</a>

                <a href="#coach">مربی</a>

                {{-- <a href="{{ route('contact') }}">سوالات متداول</a> --}

            </div>

        </div>

    </section> --}}

    <!-- INTRO -->
    <section id="intro" class="program-intro">

        <div class="container">

            <div id="featuredTrainingCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="30000">


                <div class="carousel-inner">


                    @foreach ($featuredTraning as $index => $featuredtraining)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">


                            <div class="row align-items-center intro-color">


                                <!-- Content -->

                                <div class="col-lg-6">

                                    <div class="intro-content">


                                        <h2>
                                            درباره این برنامه
                                        </h2>


                                        <h3 class="training-title">

                                            {{ $featuredtraining->title }}

                                        </h3>

                                        <div class="age-box">

                                            <div class="age-header">

                                                <i class="bi bi-people-fill"></i>

                                                <span>
                                                    رده سنی مناسب
                                                </span>

                                            </div>


                                            <div class="age-list">

                                                <span class="age-tag">
                                                    {{ $featuredtraining->age_group_label }}
                                                </span>

                                            </div>


                                        </div>

                                        <p>

                                            {{ $featuredtraining->description }}

                                        </p>


                                        <div class="benefits">


                                            @foreach (explode('-', $featuredtraining->benefits) as $benefit)
                                                <div class="benefit-box">

                                                    {{ trim($benefit) }}

                                                </div>
                                            @endforeach


                                        </div>

                                    </div>

                                </div>

                                <!-- Media -->

                                <div class="col-lg-6">


                                    @if ($featuredtraining->media_path)
                                        <div class="video-box">


                                            @if ($featuredtraining->media_type == 'video')
                                                <video controls>

                                                    <source src="{{ asset('storage/' . $featuredtraining->media_path) }}">

                                                    مرورگر شما از ویدئو پشتیبانی نمی‌کند.

                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $featuredtraining->media_path) }}"
                                                    alt="{{ $featuredtraining->title }}">
                                            @endif


                                        </div>
                                    @endif


                                </div>


                            </div>


                        </div>
                    @endforeach



                </div>


                <!-- Previous -->

                <button class="carousel-control-prev training-arrow" type="button"
                    data-bs-target="#featuredTrainingCarousel" data-bs-slide="prev">


                    <i class="bi bi-chevron-right"></i>


                </button>


                <!-- Next -->

                <button class="carousel-control-next training-arrow" type="button"
                    data-bs-target="#featuredTrainingCarousel" data-bs-slide="next">


                    <i class="bi bi-chevron-left"></i>


                </button>



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


                @foreach ($training as $Training)
                    <div class="accordion-item">


                        <div class="accordion-header">


                            <span>
                                {{ $Training->title }}
                            </span>


                            <i class="bi bi-chevron-down accordion-icon"></i>


                        </div>



                        <div class="accordion-body">


                            <p>
                                {{ $Training->description }}
                            </p>

                            <div class="topic-age">


                                <i class="bi bi-person-bounding-box"></i>


                                <div class="topic-age-list">

                                    <span>
                                        {{ $Training->age_group_label }}
                                    </span>

                                </div>


                            </div>

                            @if ($Training->benefits)
                                <div class="topic-benefits">


                                    <h4>
                                        در این جلسه یاد می‌گیرید:
                                    </h4>



                                    <ul>


                                        @foreach (explode('-', $Training->benefits) as $benefit)
                                            <li>

                                                <i class="bi bi-check-circle-fill"></i>

                                                {{ trim($benefit) }}

                                            </li>
                                        @endforeach


                                    </ul>


                                </div>
                            @endif



                        </div>


                    </div>
                @endforeach



            </div>


        </div>


    </section>

    <!-- COACH -->
    {{-- <section id="coach" class="coach-section">

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

    </section> --}}

    <!-- FIXME: put sing up link -->
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
