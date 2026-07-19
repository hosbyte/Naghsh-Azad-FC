@extends('layouts.app')

@section('title', 'برنامه زمانی')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}">

    <script src="{{ asset('js/schedule.js') }}"></script>


    <!-- HERO -->
    <section class="page-hero">

        {{-- <div class="container"> --}}

        <div class="hero-content hero-center">

            <div class="hero-text">

                <h1>برنامه زمانی</h1>

                <p>
                    برنامه تمرینات، مسابقات و رویدادهای آکادمی
                </p>

                <div class="breadcrumb-box">

                    <a href="#">خانه</a>

                    <span>/</span>

                    <span>برنامه زمانی</span>

                </div>

            </div>

        </div>

        {{-- </div> --}}

    </section>

    <!-- FILTERS -->
    <section class="schedule-filter-section">

        <div class="container">

            <div class="schedule-filters">

                <div class="view-switch">

                    <button class="active">
                        ماهانه
                    </button>

                    <button>
                        لیستی
                    </button>

                </div>

                <select>
                    <option>همه تیم‌ها</option>
                </select>

                <select>
                    <option>همه مکان‌ها</option>
                </select>

                <select>
                    <option>همه فعالیت‌ها</option>
                </select>

            </div>

        </div>

    </section>

    <!-- CALENDAR -->
    <section class="calendar-section">

        <div class="container">

            <div class="calendar-card">

                <div class="calendar-header">

                    <button>❮</button>

                    <h3>خرداد ۱۴۰۳</h3>

                    <button>❯</button>

                </div>

                <table class="calendar-table">

                    <thead>

                        <tr>

                            <th>شنبه</th>
                            <th>یکشنبه</th>
                            <th>دوشنبه</th>
                            <th>سه شنبه</th>
                            <th>چهارشنبه</th>
                            <th>پنجشنبه</th>
                            <th>جمعه</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <span class="day">3</span>

                                <div class="event red">

                                    بازی دوستانه

                                </div>

                            </td>

                            <td></td>

                            <td></td>

                            <td></td>

                            <td>

                                <span class="day">1</span>

                                <div class="event green">

                                    تمرین تاکتیکی

                                </div>

                            </td>

                            <td></td>

                            <td></td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

    <!-- EVENTS -->
    <section class="upcoming-events">

        <div class="container">

            <div class="section-header">

                <h2>
                    رویدادهای پیش رو
                </h2>

                <a href="#">
                    مشاهده همه
                </a>

            </div>

            <div class="event-list">
                @foreach ($schedules as $schedule)
                    <div class="event-row">

                        <div class="event-status {{ $schedule->status }}">

                            {{ $schedule->status_label }}

                        </div>

                        <div class="event-title">

                            {{ $schedule->title }}

                        </div>

                        <div class="event-location">

                            {{ $schedule->location }}

                        </div>

                        <div class="event-team">

                            {{ $schedule->age_group_label }}

                        </div>

                        <div class="event-date">

                            {{ $schedule->date }}

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endsection
