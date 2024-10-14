<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blogrequest;
use App\Models\Blog;
use App\Models\BlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(2);

        return view('blog.index', compact('blogs'));
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(BlogRequest $request)
    {
        // Création d'un nouveau blog avec les données validées
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->save();

        // Enregistrement des images associées au blog dans la table 'blog_images'
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Stockage de l'image dans 'public/blog_images'
                $imagePath = $image->store('blog_images', 'public');

                // Création d'une nouvelle entrée dans la table 'blog_images' liée au blog
                $imageModel = new BlogImage();
                $imageModel->url = $imagePath; // Stockage du chemin relatif dans la base de données
                // Association de l'image au blog
                $blog->images()->save($imageModel);
            }
        }
        // Redirection avec message de succès
        return redirect()->route('blog.create')->with('success', 'Blog ajouté avec succès!');
    }

    public function show(string $blog)
    {
        $blogs = Blog::findOrFail($blog);

        return view('blog.show', compact('blogs'));
    }

    public function edit(string $pay)
    {
        $blog = Blog::findOrFail($pay);

        return view('blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, string $blog)
    {
        $blog = Blog::findOrFail($blog);

        $blog->name = $request->input('blog');
        $blog->description = $request->input('description');
        $blog->save();

        return redirect()->back()->with('success', 'blog mis à jour avec succès!');
    }

    public function destroy($blog)
    {
        $blog = Blog::findOrFail($blog);
        $blog->delete();

        return redirect()->back()->with('success', 'blog supprimés avec succès!');
    }
}
