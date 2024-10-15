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
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);

        return view('blog.index', compact('blogs'));
    }


    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('blog_images', 'public');

                $imageModel = new BlogImage();
                $imageModel->url = $imagePath;
                $blog->images()->save($imageModel);
            }
        }
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
