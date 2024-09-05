<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // Charger les projets avec les relations : utilisateur, commentaires et utilisateurs qui ont commenté, et les likes
        $projects = Project::with(['user', 'comments.user', 'likes'])->get();

        $projects->each(function ($project) use ($user) {
            // Vérifier si l'utilisateur connecté a liké ce projet
            $project->isLikedByUser = $project->likes->contains('user_id', $user ? $user->id : null);
            $project->hasCommentedByUser = $project->comments->contains('user_id', $user ? $user->id : null);
        });

        return inertia('Projects/Index', [
            'projects' => $projects,
            'auth' => [
                'user' => $user,
            ],
        ]);
    }

    public function show(Project $project)
    {
        return Inertia::render('Projects/Show', ['project' => $project]);
    }

    public function create()
    {
        return Inertia::render('Projects/Create');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return Inertia::render('Projects/Edit', [
            'project' => $project,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        // Création d'une nouvelle instance de projet
        $project = new Project($validated);
        $project->user_id = $request->user()->id;  // Ajouter l'ID de l'utilisateur

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image = $path; // Assurez-vous que ce chemin est correctement enregistré dans la base de données.
        }
        $project->save();

        return redirect()->route('projects.index');
    }

    public function update(Request $request, Project $project)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/svg+xml,image/webp,application/pdf|max:6048'// Validation des types d'images autorisés
        ]);
      

        // Mettre à jour les champs de base du projet
        $project->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        // Si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            // Stocker la nouvelle image dans le répertoire "projects" du disque public
            $path = $request->file('image')->store('projects', 'public');

            // Mettre à jour le chemin de l'image dans la base de données
            $project->update(['image' => $path]);
        }

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour avec succès.');
    }

    public function updateImage(Request $request, Project $project)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif,svg,webp|max:2048', // Validation des types d'images autorisés
        ]);

        // Mettre à jour les champs de base du projet
        $project->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        // Si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            // Stocker la nouvelle image
            $path = $request->file('image')->store('projects', 'public');
            $project->update(['image' => $path]); // Mettre à jour le chemin de l'image dans la base de données
        }

        return response()->json(['success' => true, 'message' => 'Projet mis à jour avec succès']);
    }

    public function like($projectId)
    {
        $project = Project::find($projectId);

        // Vérifiez si l'utilisateur a déjà liké ce projet
        if (!$project->likes()->where('user_id', auth()->id())->exists()) {
            // Si l'utilisateur n'a pas encore liké, on l'ajoute
            $project->likes()->attach(auth()->id());
        } else {
            // Sinon, on retire le like (si l'utilisateur a déjà liké)
            $project->likes()->detach(auth()->id());
        }

        // Chargez la relation 'likes' pour renvoyer la liste des utilisateurs ayant liké
        $project->load('likes');

        return response()->json([
            'likes' => $project->likes,  // Renvoie la liste des utilisateurs ayant liké
        ]);
    }

    public function submitComment(Request $request, $projectId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'project_id' => $projectId,
            'user_id' => auth()->id(),
        ]);

        $comment->load('user'); // Charger l'utilisateur associé au commentaire

        return response()->json($comment);
    }

    public function destroy(Project $project)
    {
        // Vérifiez que l'utilisateur est le propriétaire du projet
        if ($project->user_id !== auth()->id()) {
            abort(403, 'Non autorisé à supprimer ce projet');
        }

        // Supprimer l'image associée si elle existe
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Supprimer le projet
        $project->delete();

        return response()->json(['success' => true], 200);
    }
}
