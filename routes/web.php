<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Accueil', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('accueil');



Route::get('/a-propos', function () {
    return Inertia::render('A-propos');
})->name('a-propos');


Route::get('/projets', function () {
    return Inertia::render('Projets');
})->name('projets');


Route::get('/blog', function () {
    return Inertia::render('Blog');
})->name('blog');


Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
