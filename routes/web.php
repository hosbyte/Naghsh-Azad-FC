<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// home route
Route::get('/' , [HomeController::class , 'index'])->name('home');

// news route
Route::get('/news' , [NewsController::class , 'index'])->name('news');

// gallery route
Route::get('/gallery' , [GalleryController::class , 'index'])->name('gallery');

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
