<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('نام'),

                TextColumn::make('email')
                    ->searchable()
                    ->label('ایمیل'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('زمان ثبت نام'),

                    // TextColumn::make('role')
                    // ->dateTime()
                    // ->label('نقش کاربر'),
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
