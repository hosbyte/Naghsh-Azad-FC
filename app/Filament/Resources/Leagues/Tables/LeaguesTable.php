<?php

namespace App\Filament\Resources\Leagues\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class LeaguesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('شناسه')
                    ->sortable(),

                TextColumn::make('name')
                    ->label('رده سنی')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('level')
                    ->label('سطح لیگ')
                    ->formatStateUsing(function (string $state): string {
                        return match ($state) {
                            'premier' => 'لیگ برتر',
                            'division1' => 'لیگ دسته 1',
                            default => $state,
                        };
                    })
                    ->badge()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('وضعیت')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->dateTime('Y/m/d H:i')
                    // ->jalali()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('level')
                    ->label('سطح لیگ')
                    ->options([
                        'premier' => 'لیگ برتر',
                        'division1' => 'لیگ دسته 1',
                    ]),

                TernaryFilter::make('is_active')
                    ->label('وضعیت فعال بود'),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('ویرایش'),
                // DeleteAction::make()
                //     ->label('حذف'),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
