<?php

namespace App\Filament\Resources\TrainingPrograms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;

class TrainingProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('عنوان')
                    ->searchable(),
                
                TextColumn::make('description')
                    ->label('توضیحات')
                    ->searchable(),

                TextColumn::make('age_group')
                ->label('رده سنی')
                ->formatStateUsing(function ($state) {
                    $groups = [
                        'kids' => 'نونهالان',
                        'teenagers' => 'نوجوانان',
                        'youth' => 'جوانان',
                    ];

                    return collect($state)
                        ->map(fn ($item) => $groups[$item] ?? $item)
                        ->join('، ');
                })
                ->searchable(),
                
                TextColumn::make('user.name')
                    ->label('مربی')
                    ->searchable(),

                ViewColumn::make('media_path')
                    ->label('رسانه')
                    ->view('filament.tables.columns.media-preview')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
