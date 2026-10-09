<?php

namespace App\Filament\Resources\AcademyTeams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class AcademyTeamsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('نام تیم')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('ageGroup.name')
                    ->label('رده سنی')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('coach.first_name')
                    ->label('مربی')
                    ->formatStateUsing(function ($state, $record) {
                        if(! $record->coach)
                            {
                                return 'تعیین نشده';
                            }

                        return $record->coach->first_name
                            . ' '
                            . $record->coach->last_name;
                    })
                    ->searchable(),

                TextColumn::make('players_count')
                    ->label('تعداد بازیکنان')
                    ->counts('players')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('وضعیت')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('ترتیب نمایش')
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('وضعیت تیم')
                    ->placeholder('همه تیم‌ها')
                    ->trueLabel('فعال')
                    ->falseLabel('غیرفعال'),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('ویرایش'),
            ])
            ->defaultSort('sort_order');
    }
}
