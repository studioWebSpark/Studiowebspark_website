<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Project $project)
    {
        // Validation des données reçues
        $validatedData = $request->validate([
            'content' => 'required|string|max:1000', // Assurez-vous de bien valider le contenu du commentaire
        ]);

        // Création du commentaire et liaison au projet et à l'utilisateur connecté
        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->user_id = auth()->id(); // Récupérer l'ID de l'utilisateur connecté
        $comment->project_id = $project->id; // Lier le commentaire au projet
        $comment->save(); // Sauvegarder le commentaire en base de données

        // Retourner le commentaire avec l'utilisateur pour l'affichage dans Vue.js
        return response()->json([
            'comment' => $comment->load('user') // Charger l'utilisateur associé au commentaire
        ]);
    }

    public function destroy(Project $project, Comment $comment)
    {
        // Vérifier que l'utilisateur est bien l'auteur du commentaire
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Supprimer le commentaire
        $comment->delete();

        return response()->json(['success' => true]);
    }
}
