<?php

namespace App\Filament\Concerns;

use Illuminate\Support\Facades\Auth;

trait LeagueAdminAccess
{
    public static function canViewAny(): bool
    {
        return Auth::user()?->isSuperAdmin()
            || Auth::user()?->isAdmin();
    }

    public static function canCreate(): bool
    {
        return Auth::user()?->isSuperAdmin()
            || Auth::user()?->isAdmin();
    }

    public static function canEdit($record): bool
    {
        return Auth::user()?->isSuperAdmin()
            || Auth::user()?->isAdmin();
    }

    public static function canDelete($record): bool
    {
        return Auth::user()?->isSuperAdmin()
            || Auth::user()?->isAdmin();
    }
}