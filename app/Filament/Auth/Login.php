<?php

namespace App\Filament\Auth;

// تغییر از Form به Schema
use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema; 

class Login extends BaseLogin
{
    /**
     * در نسخه 5، ورودی و خروجی متد form باید Schema باشد
     */
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ]);
    }

    /**
     * تعریف فیلد نام کاربری
     */
    protected function getNameFormComponent(): TextInput
    {
        return TextInput::make('name')
            ->label('نام کاربری')
            ->required()
            ->autocomplete()
            ->autofocus();
    }

    /**
     * تغییر منطق احراز هویت
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'name'     => $data['name'],
            'password' => $data['password'],
        ];
    }
}