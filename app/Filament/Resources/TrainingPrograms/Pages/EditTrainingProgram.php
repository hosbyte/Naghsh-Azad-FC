<?php

namespace App\Filament\Resources\TrainingPrograms\Pages;

use App\Filament\Resources\TrainingPrograms\TrainingProgramResource;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditTrainingProgram extends EditRecord
{
    protected static string $resource = TrainingProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    #[Override]
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()->success()->title('تغییرات ذخیره شده');
    }
}
