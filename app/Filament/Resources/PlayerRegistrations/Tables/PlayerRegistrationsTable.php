<?php

namespace App\Filament\Resources\PlayerRegistrations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PlayerRegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('نام')
                    ->searchable(),

                TextColumn::make('family')
                    ->label('نام خانوادگی')
                    ->searchable(),

                TextColumn::make('father_name')
                    ->label('نام پدر')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('father_phone')
                    ->label('موبایل پدر'),
                
                TextColumn::make('mother_phone')
                    ->label('موبایل مادر'),

                TextColumn::make('birth_date_jalali')
                    ->label('تاریخ')
                    // ->jalaliDate()
                    ->sortable(),

                TextColumn::make('position_label')
                    ->label('پست'),

                TextColumn::make('favorite_number')
                    ->label('شماره مورد علاقه')
                    ->toggleable(isToggledHiddenByDefault:true),

                TextColumn::make('foot_label')
                    ->label('پا'),


                TextColumn::make('status_label')
                    ->label('وضعیت')
                    ->badge(),


                TextColumn::make('created_at')
                    ->label('تاریخ ثبت')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),


            ])

            ->filters([

                SelectFilter::make('status')
                    ->label('وضعیت')
                    ->options([

                        'new'=>'جدید',

                        'called'=>'تماس گرفته شد',

                        'scheduled'=>'زمان تست مشخص شد',

                        'accepted'=>'پذیرفته شد',

                        'rejected'=>'رد شد',

                    ])
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
