@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')

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

    <!-- //FIXME: put icon & link -->
    <!-- Contact Cards -->

    <section class="contact-info-section">

        <div class="container">

            <div class="contact-cards">

                <div class="contact-card">

                    <i class="bi bi-geo-alt"></i>

                    <h4>آدرس</h4>

                    <p>
                        اصفهان، خیابان نمونه، آکادمی فوتبال نقش آزاد
                    </p>

                </div>

                <div class="contact-card">

                    <i class="bi bi-telephone"></i>

                    <h4>تلفن تماس</h4>

                    <p>
                        031-12345678
                    </p>

                </div>

                <div class="contact-card">

                    <i class="bi bi-envelope"></i>

                    <h4> اینستاگرام </h4>

                    <p>
                        info@example.com
                    </p>

                </div>

                <div class="contact-card">

                    <i class="bi bi-clock"></i>

                    <h4> کانال ایتا </h4>

                    <p>
                        
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Form + Map -->

    <section class="contact-main-section">

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-6">

                    <div class="contact-form-box">

                        <span class="section-label">
                            فرم ارتباط
                        </span>

                        <h2>
                            برای ما پیام ارسال کنید
                        </h2>

                        <form>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <input type="text" class="form-control" placeholder="نام">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <input type="text" class="form-control" placeholder="نام خانوادگی">

                                </div>

                            </div>

                            <input type="email" class="form-control mb-3" placeholder="ایمیل">

                            <input type="text" class="form-control mb-3" placeholder="موضوع">

                            <textarea class="form-control mb-3" rows="6" placeholder="پیام شما"></textarea>

                            <button type="submit" class="btn send-btn">

                                ارسال پیام

                            </button>

                        </form>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="map-box">

                        <iframe src="https://maps.google.com/maps?q=isfahan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            loading="lazy">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- FAQ -->

    <section class="faq-section">

        <div class="container">

            <div class="section-title">

                <span>
                    سوالات متداول
                </span>

                <h2>
                    پاسخ به سوالات شما
                </h2>

            </div>

            <div class="faq-wrapper">

                <div class="faq-item">

                    <button class="faq-question">

                        شرایط ثبت نام چیست؟

                    </button>

                    <div class="faq-answer">

                        ثبت نام برای تمامی رده‌های سنی امکان‌پذیر است.

                    </div>

                </div>

                <div class="faq-item">

                    <button class="faq-question">

                        هزینه دوره‌ها چگونه محاسبه می‌شود؟

                    </button>

                    <div class="faq-answer">

                        هزینه‌ها بر اساس رده سنی و نوع دوره تعیین می‌شوند.

                    </div>

                </div>

                <div class="faq-item">

                    <button class="faq-question">

                        آیا امکان جلسه آزمایشی وجود دارد؟

                    </button>

                    <div class="faq-answer">

                        بله، یک جلسه آزمایشی رایگان برگزار می‌شود.

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection