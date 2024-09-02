<?php

// app/Http/Controllers/BlogController.php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->latest()->get();

        return Inertia::render('Blogs/Index', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return Inertia::render('Blogs/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['user_id'] = $request->user()->id;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Article créé avec succès.');
    }

    public function show(Blog $blog)
    {
        return Inertia::render('Blogs/Show', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return Inertia::render('Blogs/Edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog mis à jour avec succès.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog supprimé avec succès.');
    }
}