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

                    <a
                        href="{{ route('schedule', [
                            'year' => $calendar['previous']['year'],
                            'month' => $calendar['previous']['month'],
                        ]) }}">
                        ❮
                    </a>
                    {{-- {{ dd($calendar['previous'], $calendar['next']) }} --}}

                    <h3>
                        {{ $calendar['monthName'] }}
                        {{ $calendar['year'] }}
                    </h3>

                    <a
                        href="{{ route('schedule', [
                            'year' => $calendar['next']['year'],
                            'month' => $calendar['next']['month'],
                        ]) }}">
                        ❯
                    </a>

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

                        @foreach (array_chunk($calendar['days'], 7) as $week)
                            <tr>

                                @foreach ($week as $day)
                                    <td>

                                        @if ($day['day'])
                                            <span class="day">
                                                {{ $day['day'] }}
                                            </span>


                                            @foreach ($day['events'] as $event)
                                                <div class="event">

                                                    {{ $event->title }}

                                                </div>
                                            @endforeach
                                        @endif

                                    </td>
                                @endforeach


                            </tr>
                        @endforeach

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

                            {{ $schedule->jalali_date }}

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

@endsection
