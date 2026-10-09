<?php

namespace App\Filament\Resources\AcademyTeams\Pages;

use App\Filament\Resources\AcademyTeams\AcademyTeamResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAcademyTeam extends CreateRecord
{
    protected static string $resource = AcademyTeamResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
