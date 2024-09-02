<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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



Route::get('/portfolio', function () {
    return Inertia::render('Portfolio');
})->name('portfolio');


// Route pour afficher la liste des blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

// Route pour afficher le formulaire de création d'un blog
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');

// Route pour stocker un nouveau blog
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Route pour afficher un blog spécifique
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

// Route pour afficher le formulaire d'édition d'un blog
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');

// Route pour mettre à jour un blog spécifique
Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');

// Route pour supprimer un blog spécifique
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::get('/projets', [ProjectController::class, 'index'])->name('projets.index');

// Route pour afficher le formulaire de création d'un projet
Route::get('/projets/create', [ProjectController::class, 'create'])->name('projets.create');

// Route pour stocker un nouveau projet
Route::post('/projets', [ProjectController::class, 'store'])->name('projets.store');

// Route pour afficher un projet spécifique
Route::get('/projets/{projet}', [ProjectController::class, 'show'])->name('projets.show');

// Route pour afficher le formulaire d'édition d'un projet
Route::get('/projets/{projet}/edit', [ProjectController::class, 'edit'])->name('projets.edit');

// Route pour mettre à jour un projet spécifique
Route::put('/projets/{projet}', [ProjectController::class, 'update'])->name('projets.update');

// Route pour supprimer un projet spécifique
Route::delete('/projets/{projet}', [ProjectController::class, 'destroy'])->name('projets.destroy');


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
