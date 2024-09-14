<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        // Enregistrer l'email dans la base de données
        NewsletterSubscription::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Merci pour votre abonnement !');
    }
}
