<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
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



// Routes protégées par le middleware auth pour les actions sensibles
Route::middleware(['auth', 'verified'])->group(function () {
    // Routes protégées pour la gestion complète des projets
    Route::resource('projects', ProjectController::class); // Tout sauf index et show


    // Route pour liker un projet
    Route::post('/projects/{project}/like', [ProjectController::class, 'like'])->name('projects.like');

    // Route pour ajouter un commentaire à un projet
    Route::post('/projects/{project}/comments', [CommentController::class, 'store'])->name('projects.comments.store');

    // Route pour mettre à jour l'image d'un projet
    Route::post('/projects/{project}/update-image', [ProjectController::class, 'updateImage'])->name('projects.update-image');

    // Route pour supprimer un projet
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::delete('/projects/{project}/comments/{comment}', [CommentController::class, 'destroy'])
        ->name('projects.comments.destroy');
});


Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/send-test-email', [ContactController::class, 'sendTestEmail']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
