<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Récupérer tous les messages
        $messages = Message::all();

        // Retourner la vue avec les messages
        return view('admin.messages.index', compact('messages'));
    }
}
