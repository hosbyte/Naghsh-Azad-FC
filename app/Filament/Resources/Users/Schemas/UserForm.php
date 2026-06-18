<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('نام')->required(),
                TextInput::make('email')->label('ایمیل')->email()->required()->unique(),
                TextInput::make('password')->label('رمز عبور')->password()->required()
                ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
                // TextInput::make('role')->label('نقش')->required(),
            ]);
    }
}
