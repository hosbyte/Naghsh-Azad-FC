<?php

namespace App\Filament\Resources\PlayerRegistrations\Pages;

use App\Filament\Resources\PlayerRegistrations\PlayerRegistrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlayerRegistrations extends ListRecords
{
    protected static string $resource = PlayerRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
