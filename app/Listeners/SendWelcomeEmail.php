<?php

namespace App\Listeners;

use App\Mail\WelcomeMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        // Envoyer un email de bienvenue à l'utilisateur inscrit
        Mail::to($event->user->email)->send(new WelcomeMail($event->user));
    }
}
