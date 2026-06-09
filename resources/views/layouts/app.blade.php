<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://hosbyte.ir/files/bootstrap-5.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/icons-1.13.1/font/bootstrap-icons.min.css">
    <script src="https://hosbyte.ir/files/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://hosbyte.ir/files/jquery-3.7.1.min.js"></script>
    <title>@yield('title')</title>

    <link href="{{ asset('css/academy.css') }}" rel="stylesheet">
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
</head>

<body>

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
                        <a class="nav-link" href="{{ route('gallery')}}">گالری</a>
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
    </nav>

    @yield('content')

    <!-- //FIXME: put link -->
    <!-- footer -->
    <footer class="academy-footer">

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

                </div> --}}

            </div>

            <hr>

            <div class="footer-bottom">

                © تمامی حقوق محفوظ است.

            </div>

        </div>

    </footer>

</body>

</html>
