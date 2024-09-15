<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterSubscriptionController;

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






Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/send-test-email', [ContactController::class, 'sendTestEmail']);

Route::post('/newsletter-subscribe', [NewsletterSubscriptionController::class, 'store']);


Route::get('/termes-and-privacy', function () {
    return Inertia::render('TermsAndPrivacy');
})->name('terms.privacy');




