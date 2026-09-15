<?php

namespace App\Filament\Resources\Teams\Schemas;

use App\Models\League;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام تیم')
                    ->required()
                    ->maxLength(255),

                Select::make('leagues')
                    ->label('عضویت در لیگ ها')
                    ->multiple()
                    ->relationship(
                        name: 'leagues',
                        titleAttribute: 'name',
                        modifyQueryUsing: function(Builder $query) {
                            $query
                                ->orderBy('level')
                                ->orderBy('id');
                        }
                    )
                    ->getOptionLabelFromRecordUsing(function (League $record): string {
                        return ($record->level === 'premier'
                        ? 'لیگ برتر'
                        : 'لیگ دسته 1')
                        . ' - '
                        . $record->name;
                    })
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}
