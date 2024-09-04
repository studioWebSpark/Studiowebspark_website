<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $projectId)
    {
        // Validation des données du commentaire
        $request->validate([
            'content' => 'required|string',
        ]);

        // Création et enregistrement du commentaire
        $comment = new Comment([
            'content' => $request->content,
            'project_id' => $projectId,
            'user_id' => auth()->id(),
        ]);
        

        // Charger la relation user pour renvoyer l'utilisateur avec le commentaire
        $comment->load('user'); // Assurez-vous que la relation 'user' est définie dans le modèle Comment

        // Retourner le commentaire avec l'utilisateur sous forme de JSON
        return response()->json($comment);
    }
}
