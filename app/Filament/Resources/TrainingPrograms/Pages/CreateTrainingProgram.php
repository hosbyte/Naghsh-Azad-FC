<?php

namespace App\Filament\Resources\TrainingPrograms\Pages;

use App\Filament\Resources\TrainingPrograms\TrainingProgramResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Override;

class CreateTrainingProgram extends CreateRecord
{
    protected static string $resource = TrainingProgramResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    } 

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);
        
        return $data;
    }

    #[Override]
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()->success()->title('ثبت انجام شد');
    }
}
