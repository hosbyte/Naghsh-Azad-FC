<x-filament-panels::page>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

        {{-- تعداد لیگ‌ها --}}
        <x-filament::section>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">
                        لیگ‌های فعال
                    </p>

                    <p class="mt-2 text-3xl font-bold">
                        {{ $this->getLeagueCount() }}
                    </p>
                </div>

                <x-filament::icon icon="heroicon-o-trophy" class="h-10 w-10 text-primary-500" />
            </div>
        </x-filament::section>


        {{-- تعداد تیم‌ها --}}
        <x-filament::section>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">
                        تیم‌ها
                    </p>

                    <p class="mt-2 text-3xl font-bold">
                        {{ $this->getTeamCount() }}
                    </p>
                </div>

                <x-filament::icon icon="heroicon-o-users" class="h-10 w-10 text-primary-500" />
            </div>
        </x-filament::section>


        {{-- تعداد مسابقات --}}
        <x-filament::section>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">
                        مسابقات ثبت‌شده
                    </p>

                    <p class="mt-2 text-3xl font-bold">
                        {{ $this->getMatchCount() }}
                    </p>
                </div>

                <x-filament::icon icon="heroicon-o-trophy" class="h-10 w-10 text-primary-500" />
            </div>
        </x-filament::section>

    </div>

</x-filament-panels::page>