@extends('layouts.app')

@section('content')
    <section class="instagram-table-page">

        <div class="instagram-table">

            <div class="instagram-table-header">

                <span>

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


            <div class="instagram-table-body">

                @foreach ($standings as $team)
                    <div class="instagram-team-row">

                        <div class="instagram-rank">
                            {{ $team['rank'] }}
                        </div>

                        <div class="instagram-team-name">
                            {{ $team['team_name'] }}
                        </div>

                        <div class="instagram-stat">
                            {{ $team['played'] }}
                        </div>

                        <div class="instagram-stat">
                            {{ $team['points'] }}
                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
@endsection