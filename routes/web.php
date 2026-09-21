<?php

use App\Http\Controllers\GalleryAlbumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerRegistrationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TrainingController;
use App\Services\LeagueImageExportService;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// home route
Route::get('/' , [HomeController::class , 'index'])->name('home');

// register route
Route::get('/player-registration' , [PlayerRegistrationController::class , 'create'])->name('player.registration');
Route::post('/player-registration' , [PlayerRegistrationController::class , 'store'])->name('player.registration.store');

// news route
Route::get('/news' , [NewsController::class , 'index'])->name('news');

// gallery albums route
Route::get('/gallery' , [GalleryAlbumController::class , 'index'])->name('gallery.index');
Route::get('/gallery/{album}', [GalleryAlbumController::class, 'show'])->name('gallery.show');

// about us route
Route::get('/about' , function() {
    return view('about.index');
})->name('about');

//contact us route
Route::get('contact' , function() {
    return view('contact.index');
})->name('contact');

// TrainingProgram
Route::get('/TrainingProgram' , [TrainingController::class , 'index'])->name('training');

// schedule (برنامه هفتگی)
Route::get('/schedule' , [ScheduleController::class , 'index'])->name('schedule');

// جدول ها
Route::get('/league', [LeagueController::class, 'index'])->name('league.index');

Route::get('/league/{league}', [LeagueController::class, 'show'])->name('league.show');

// جدول اینستاگرام
Route::get('/league/{league}/instagram', [LeagueController::class, 'instagram'])->name('league.instagram');

//دانلود جدول برای اینستاگرام
Route::get('/league/{league}/instagram/download', [LeagueController::class, 'downloadInstagram'])
->name('league.instagram.download');

Route::get('/test-league-image', function (LeagueImageExportService $exportService) {
    $path = $exportService->test();

    return response()->download($path);
});

// dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
