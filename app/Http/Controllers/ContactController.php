<?php

namespace App\Http\Controllers;

use App\Mail\ClientConfirmationMail;
use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données du formulaire, y compris le numéro de téléphone
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20', // Validation du numéro de téléphone
            'message' => 'required|string',
        ]);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Enregistrer le message dans la base de données
        $message = Message::create($validatedData);

        // Envoyer l'email avec toutes les données
        Mail::to('service.studiowebspark7@gmail.com')->send(new ContactMail($request->all()));

        // Envoyer l'email de confirmation au client
        Mail::to($request->email)->send(new ClientConfirmationMail($request->all()));


        // Retourne une réponse à Inertia.js
        return back()->with('success', 'Votre message a été envoyé avec succès. Nous vous contacterons sous peu.');
    }
}
