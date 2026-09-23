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
                'exportMode' => false,
            ])
        </div>

        <center>
            <div class="mt-6 flex justify-center">

            <x-filament::button
                wire:click="downloadInstagramTable"
                icon="heroicon-o-arrow-down-tray"
            >
                دانلود جدول
            </x-filament::button>

        </div>
        </center>
    @endif

</x-filament-panels::page>

{{-- <x-filament-panels::page>

    {{ $this->form }}

    @if($league && $standings)

        <div class="mt-6">

            @include('leagues.instagram-table', [
                'league' => $league,
                'standings' => $standings,
                'exportMode' => false,
            ])

        </div>

        <div class="mt-6 flex justify-center">

            <x-filament::button
                wire:click="downloadInstagramTable"
                icon="heroicon-o-arrow-down-tray"
            >
                دانلود جدول
            </x-filament::button>

        </div>

    @endif

</x-filament-panels::page> --}}