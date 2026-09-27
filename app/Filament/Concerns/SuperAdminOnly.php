<?php

namespace App\Filament\Concerns;

use Illuminate\Support\Facades\Auth;

trait SuperAdminOnly
{
    public static function canViewAny(): bool
    {
        return Auth::user()?->isSuperAdmin() ?? false;
    }

    public static function canCreate(): bool
    {
        return Auth::user()?->isSuperAdmin() ?? false;
    }

    public static function canEdit($record): bool
    {
        return Auth::user()?->isSuperAdmin() ?? false;
    }

    public static function canDelete($record): bool
    {
        return Auth::user()?->isSuperAdmin() ?? false;
    }
}