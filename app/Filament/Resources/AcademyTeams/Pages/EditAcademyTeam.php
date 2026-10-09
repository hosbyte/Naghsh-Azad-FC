<?php

namespace App\Filament\Resources\AcademyTeams\Pages;

use App\Filament\Resources\AcademyTeams\AcademyTeamResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAcademyTeam extends EditRecord
{
    protected static string $resource = AcademyTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
