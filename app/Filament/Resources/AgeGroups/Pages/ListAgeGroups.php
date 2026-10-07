<?php

namespace App\Filament\Resources\AgeGroups\Pages;

use App\Filament\Resources\AgeGroups\AgeGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAgeGroups extends ListRecords
{
    protected static string $resource = AgeGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
