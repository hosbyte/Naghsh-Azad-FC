{{-- @extends('layouts.app')

@section('content')
    <section class="league-page">

        <div class="container">

            <div class="league-header">

                <div>
                    <h1>
                        <span class="league-level">

                            @if ($league->level === 'premier')
                                لیگ برتر
                            @else
                                لیگ دسته یک
                            @endif

                        </span>

                        {{ $league->name }}
                    </h1>

                </div>

            </div>


            <div class="league-table-wrapper">

                @include('leagues.components.league-table', [
                    'standings' => $standings,
                ])

            </div>

        </div>

    </section>
@endsection --}}

@extends('layouts.app')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/league.css') }}"> --}}
@endpush

@section('content')
    <section class="league-page">

        <div class="container">

            <div class="league-header">
                <h1>
                    <span class="league-level">
                        @if ($league->level === 'premier')
                            لیگ برتر
                        @else
                            لیگ دسته یک
                        @endif
                    </span>

                    {{ $league->name }}
                </h1>
            </div>

            <div class="league-table-wrapper">
                @include('leagues.components.league-table', [
                    'standings' => $standings,
                ])
            </div>

        </div>

    </section>
@endsection
