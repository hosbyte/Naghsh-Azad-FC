<?php

namespace App\Filament\Resources\LeagueMatches\Tables;

use App\Models\LeagueMatch;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LeagueMatchesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('league.name')
                    ->label('لیگ')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('homeTeam.name')
                    ->label('میزبان')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('score')
                    ->label('نتیجه')
                    ->getStateUsing(
                        fn (LeagueMatch $record): string =>
                            "{$record->home_score} - {$record->away_score}"
                    )
                    ->alignCenter(),
                
                TextColumn::make('awayTeam.name')
                    ->label('مهمان')
                    ->searchable()
                    ->sortable(),


                TextColumn::make('created_at')
                    ->label('زمان ثبت')
                    ->dateTime('Y/m/d H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->label('ویرایش'),
                DeleteAction::make()->label('حذف'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
