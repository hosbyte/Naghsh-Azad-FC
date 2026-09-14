@extends('layouts.app')

@section('title', 'جدول لیگ‌های آکادمی نقش آزاد')

@section('content')

    <section class="leagues-page">

        <div class="container">

            <div class="leagues-page-heading">
                <span class="section-label">مسابقات آکادمی نقش آزاد</span>

                <h1>
                    جدول لیگ‌ها
                </h1>

                <p>
                    آخرین وضعیت جدول مسابقات فصل جاری آکادمی نقش آزاد
                </p>
            </div>


            {{-- انتخاب سطح لیگ --}}
            <div class="league-tabs" role="tablist">

                <button type="button" class="league-tab active" data-league-tab="premier">
                    لیگ برتر
                </button>

                <button type="button" class="league-tab" data-league-tab="first">
                    لیگ دسته ۱
                </button>

            </div>


            {{-- لیگ برتر --}}
            <div class="league-tab-content active" data-league-content="premier">

                <div class="league-selector">

                    <label for="premierTable">
                        انتخاب جدول لیگ برتر
                    </label>

                    <select id="premierTable" class="league-select">
                        <option value="premier-1">جدول شماره ۱</option>
                        <option value="premier-2">جدول شماره ۲</option>
                        <option value="premier-3">جدول شماره ۳</option>
                        <option value="premier-4">جدول شماره ۴</option>
                        <option value="premier-5">جدول شماره ۵</option>
                        <option value="premier-6">جدول شماره ۶</option>
                        <option value="premier-7">جدول شماره ۷</option>
                    </select>

                </div>


                <div class="league-tables-list">

                    <div class="league-table-item active" data-table="premier-1">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۱ لیگ برتر',
                            'teams' => $premierTables['premier-1'] ?? [],
                            'colorClass' => 'league-blue',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-2">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۲ لیگ برتر',
                            'teams' => $premierTables['premier-2'] ?? [],
                            'colorClass' => 'league-green',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-3">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۳ لیگ برتر',
                            'teams' => $premierTables['premier-3'] ?? [],
                            'colorClass' => 'league-orange',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-4">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۴ لیگ برتر',
                            'teams' => $premierTables['premier-4'] ?? [],
                            'colorClass' => 'league-purple',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-5">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۵ لیگ برتر',
                            'teams' => $premierTables['premier-5'] ?? [],
                            'colorClass' => 'league-red',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-6">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۶ لیگ برتر',
                            'teams' => $premierTables['premier-6'] ?? [],
                            'colorClass' => 'league-cyan',
                        ])
                    </div>

                    <div class="league-table-item" data-table="premier-7">
                        @include('components.league-table', [
                            'title' => 'جدول شماره ۷ لیگ برتر',
                            'teams' => $premierTables['premier-7'] ?? [],
                            'colorClass' => 'league-dark',
                        ])
                    </div>

                </div>

            </div>


            {{-- لیگ دسته یک --}}
            <div class="league-tab-content" data-league-content="first">

                <div class="league-selector">

                    <label for="firstTable">
                        انتخاب جدول لیگ دسته ۱
                    </label>

                    <select id="firstTable" class="league-select">
                        <option value="first-1">جدول شماره ۱</option>
                        <option value="first-2">جدول شماره ۲</option>
                        <option value="first-3">جدول شماره ۳</option>
                        <option value="first-4">جدول شماره ۴</option>
                        <option value="first-5">جدول شماره ۵</option>
                        <option value="first-6">جدول شماره ۶</option>
                        <option value="first-7">جدول شماره ۷</option>
                    </select>

                </div>


                <div class="league-tables-list">

                    @for ($i = 1; $i <= 7; $i++)
                        <div class="league-table-item {{ $i === 1 ? 'active' : '' }}"
                            data-table="first-{{ $i }}">
                            @include('components.league-table', [
                                'title' => 'جدول شماره ' . $i . ' لیگ دسته ۱',
                                'teams' => $firstTables['first-' . $i] ?? [],
                                'colorClass' => 'league-blue',
                            ])
                        </div>
                    @endfor

                </div>

            </div>

        </div>

    </section>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/leagues.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/leagues.js') }}"></script>
@endpush