<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
        public function index()
        {
                $projets = Project::with('user')->latest()->get();

                return Inertia::render('Projets/Index', [
                        'projets' => $projets
                ]);
        }

        public function create()
        {
                return Inertia::render('Projets/Create');
        }

        public function store(Request $request)
        {
                $validated = $request->validate([
                        'title' => 'required|string|max:255',
                        'description' => 'required|string',
                        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $validated['user_id'] = $request->user()->id;

                if ($request->hasFile('image')) {
                        $validated['image'] = $request->file('image')->store('images', 'public');
                }

                Project::create($validated);

                return redirect()->route('projets.index')->with('success', 'Projet créé avec succès.');
        }

        public function show(Project $projet)
        {
                return Inertia::render('Projets/Show', [
                        'projet' => $projet
                ]);
        }

        public function edit(Project $projet)
        {
                return Inertia::render('Projets/Edit', [
                        'projet' => $projet
                ]);
        }

        public function update(Request $request, Project $projet)
        {
                $validated = $request->validate([
                        'title' => 'required|string|max:255',
                        'description' => 'required|string',
                ]);

                $projet->update($validated);

                return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès.');
        }

        public function destroy(Project $projet)
        {
                $projet->delete();

                return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès.');
        }
}
