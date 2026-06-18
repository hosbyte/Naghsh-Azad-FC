@extends('layouts.app')

@section('title', 'گالری تصاویر')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <script src="{{ asset('js/gallery.js') }}"></script>

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
