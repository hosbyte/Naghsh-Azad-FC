<?php

namespace App\Filament\Resources\PlayerRegistrations\Pages;

use App\Filament\Resources\PlayerRegistrations\PlayerRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayerRegistration extends EditRecord
{
    protected static string $resource = PlayerRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
