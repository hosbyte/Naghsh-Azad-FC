@extends('layouts.app')

@section('content')
    <section class="league-page">

        <div class="container">

            <div class="league-page-header">
                <h1>جداول لیگ</h1>

                <p>
                    جدول رده‌های سنی لیگ برتر و لیگ دسته یک
                </p>
            </div>


            {{-- لیگ برتر --}}
            <div class="league-section">

                <h2 class="league-section-title">
                    لیگ برتر
                </h2>

                <div class="league-cards">

                    @foreach ($premierLeagues as $league)
                        <a href="{{ route('league.show', $league) }}" class="league-card">

                            <span>
                                {{ $league->name }}
                            </span>

                            <i class="bi bi-chevron-left"></i>

                        </a>
                    @endforeach

                </div>

            </div>


            {{-- لیگ دسته یک --}}
            <div class="league-section">

                <h2 class="league-section-title">
                    لیگ دسته یک
                </h2>

                <div class="league-cards">

                    @foreach ($divisionOneLeagues as $league)
                        <a href="{{ route('league.show', $league) }}" class="league-card">

                            <span>
                                {{ $league->name }}
                            </span>

                            <i class="bi bi-chevron-left"></i>

                        </a>
                    @endforeach

                </div>

            </div>

        </div>

    </section>
@endsection