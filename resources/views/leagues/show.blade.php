@extends('layouts.app')

@section('content')
    <section class="league-page">

        <div class="container">

            <div class="league-header">

                <div>

                    <span class="league-level">

                        @if ($league->level === 'premier')
                            لیگ برتر
                        @else
                            لیگ دسته یک
                        @endif

                    </span>

                    <h1>
                        {{ $league->name }}
                    </h1>

                </div>


                <a href="{{ route('league.index') }}" class="league-back-btn">

                    <i class="bi bi-arrow-right"></i>

                    بازگشت به جدول‌ها

                </a>

            </div>


            <div class="league-table-wrapper">

                @include('leagues.components.league-table', [
                    'standings' => $standings,
                ])

            </div>

        </div>

    </section>
@endsection