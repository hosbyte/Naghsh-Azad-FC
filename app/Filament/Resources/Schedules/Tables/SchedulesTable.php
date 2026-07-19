<?php

namespace App\Filament\Resources\Schedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('عنوان')
                    ->searchable()
                    ->sortable(),

                // TextColumn::make('event_type_label'),
                TextColumn::make('event_type_label')
                    ->label('نوع رویداد')
                    ->badge()
                    ->searchable()
                    ->color(fn ($state) => match ($state){
                        'تمرین' => 'success',
                        'مسابقه' => 'danger',
                        'اردو' => 'info',
                        'جلسه' => 'gray',
                        'تست' => 'warning',
                        default => 'primary',
                    }),

                TextColumn::make('age_group_label')
                    ->label('رده سنی'),

                TextColumn::make('date')
                    ->label('تاریخ')
                    ->jalaliDate()
                    ->sortable(),

                TextColumn::make('start_time')
                    ->label('ساعت شروع'),

                TextColumn::make('end_time')
                    ->label('ساعت پایان'),

                TextColumn::make('status_label')
                    ->label('وضعیت')
                    ->badge()
                    ->color(fn ($state) => match ($state){
                        'تایید شده' => 'success',
                        'در انتظار تایید' => 'warning',
                        'لغو شده' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('location')
                    ->label('ورزشگاه')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('description')
                    ->label('توضیحات')
                    ->toggleable(isToggledHiddenByDefault: true),

                
            ])
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
