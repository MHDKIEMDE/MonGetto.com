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
        $blogs = Blog::paginate(10);

        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Blogrequest $request)
    {
        // Création d'une nouveaux Blog avec les données validées
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->save();
        dd($request->all());

        // Enregistrement des images associées au blog dans la table 'Blogimages'
        if ($request->hasFile('blog_images')) {
            foreach ($request->file('blog_images') as $image) {
                // Stockage de l'image dans 'storage/app/public/propriete_images'
                $imagePath = $image->store('public/blog_images');

                // Création d'une nouvelle entrée dans la table 'blog_images' liée au blog
                $imageModel = new BlogImage();
                $imageModel->url = Storage::url($imagePath); // URL publique de l'image
                // Association de l'image au blog
                $blog->blog_images()->save($imageModel);
            }
        }

        // Redirection avec message de succès
        return redirect()->route('blog.index')->with('success', 'Blog ajoutée avec succès!');
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
      
        return redirect()->route('blog.show')->with('success', 'blog mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'blog supprimés avec succès!');
    }
}
