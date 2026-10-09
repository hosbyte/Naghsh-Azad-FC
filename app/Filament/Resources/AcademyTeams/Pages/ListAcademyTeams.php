<?php

namespace App\Filament\Resources\AcademyTeams\Pages;

use App\Filament\Resources\AcademyTeams\AcademyTeamResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAcademyTeams extends ListRecords
{
    protected static string $resource = AcademyTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
