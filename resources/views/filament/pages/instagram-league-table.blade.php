<x-filament-panels::page>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/instagram-league.css') }}">
    @endpush

    {{ $this->form }}

    @if ($league && $standings)
        <div class="mt-6">
            @include('leagues.instagram-table', [
                'league' => $league,
                'standings' => $standings,
            ])
        </div>
    @endif

</x-filament-panels::page>