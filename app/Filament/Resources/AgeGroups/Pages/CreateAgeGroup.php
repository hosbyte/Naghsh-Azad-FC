<?php

namespace App\Filament\Resources\AgeGroups\Pages;

use App\Filament\Resources\AgeGroups\AgeGroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAgeGroup extends CreateRecord
{
    protected static string $resource = AgeGroupResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
