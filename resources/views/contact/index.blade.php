@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="{{ asset('js/contact.js') }}"></script>


    <!-- Hero -->
    <section class="contact-hero">

        <div class="container">

            <div class="contact-hero-content">

                <h1>
                    تماس با ما
                </h1>

                <p>
                    پاسخگوی سوالات، پیشنهادات و درخواست‌های شما هستیم
                </p>

                <div class="breadcrumb-box">

                    <a href="/">خانه</a>

                    <span>›</span>

                    <span>تماس با ما</span>

                </div>

            </div>

        </div>

    </section>

    <!-- //FIXME: put eitaa link -->
    <!-- Contact Cards -->
    <section class="contact-info-section">

        <div class="container">

            <div class="contact-cards">

                {{-- آدرس زمین شماره یک --}}
                <div class="contact-card">

                    <i class="bi bi-geo-alt"></i>

                    <h5> زمین شماره یک </h5>

                    <p>
                        ورزشگاه 44 توپخانه ، میدان ارتش
                    </p>

                </div>

                {{-- آدرش زمین شماره دو --}}
                <div class="contact-card">

                    <i class="bi bi-geo-alt"></i>

                    <h5> زمین شماره دو </h5>

                    <p>
                        ورزشگاه خرداد (قزلباش) ، خیابان موحدی
                    </p>

                </div>

                {{-- شماره تماس --}}
                <div class="contact-card">

                    <i class="bi bi-telephone"></i>

                    <h4>تلفن تماس</h4>

                    <p>
                        0939-664-2070
                    </p>

                </div>

                {{-- اینستاگرام --}}
                <div class="contact-card">

                    <a href="https://instagram.com/FC.NAGHSHAZAD" class="social-link text-decoration-none">

                        <i class="bi bi-instagram"></i>

                        <h4> اینستاگرام </h4>

                        <p>
                            FC.NAGHSHAZAD
                        </p>

                    </a>

                </div>

                {{-- ایتا --}}
                <div class="contact-card">

                    <a href="" class="social-link text-decoration-none">

                        <img src="{{ asset('images/eitaa.svg') }}" alt="Eitaa" class="social-icon">

                        <h4> کانال ایتا </h4>

                        <p>
                            FC.NAGHSHAZAD
                        </p>

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- //FIXME: put location -->
    <!-- Form + Map -->
    <section class="contact-main-section">

        <div class="container">

            <div class="row g-4">

                <!-- زمین شماره 1 -->
                <div class="col-lg-6">

                    <div class="ground-card">

                        <h4>
                            زمین تمرین شماره ۱
                        </h4>

                        <div class="map-box">

                            <iframe src="https://maps.google.com/maps?q=isfahan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                loading="lazy">
                            </iframe>

                        </div>

                    </div>

                </div>

                <!-- زمین شماره 2 -->
                <div class="col-lg-6">

                    <div class="ground-card">

                        <h4>
                            زمین تمرین شماره ۲
                        </h4>

                        <div class="map-box">

                            <iframe src="https://maps.google.com/maps?q=isfahan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                loading="lazy">
                            </iframe>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- FAQ -->
    <section class="faq-section">

        <div class="faq-wrapper">

            <div class="faq-item active">

                <div class="faq-question">

                    <span>
                        شرایط ثبت نام چیست؟
                    </span>

                    <i class="bi bi-plus-lg faq-icon"></i>

                </div>

                <div class="faq-answer">

                    <p>
                        ثبت نام برای تمامی رده‌های سنی امکان‌پذیر است و پس از
                        ارزیابی اولیه بازیکن در گروه مناسب قرار می‌گیرد.
                    </p>

                </div>

            </div>

            <div class="faq-item">

                <div class="faq-question">

                    <span>
                        هزینه دوره‌ها چگونه محاسبه می‌شود؟
                    </span>

                    <i class="bi bi-plus-lg faq-icon"></i>

                </div>

                <div class="faq-answer">

                    <p>
                        هزینه‌ها بر اساس رده سنی، تعداد جلسات و نوع دوره تعیین
                        می‌شوند.
                    </p>

                </div>

            </div>

            <div class="faq-item">

                <div class="faq-question">

                    <span>
                        آیا جلسه آزمایشی رایگان وجود دارد؟
                    </span>

                    <i class="bi bi-plus-lg faq-icon"></i>

                </div>

                <div class="faq-answer">

                    <p>
                        بله، تمامی بازیکنان جدید می‌توانند در یک جلسه آزمایشی
                        رایگان شرکت کنند.
                    </p>

                </div>

            </div>

        </div>

    </section>

@endsection
