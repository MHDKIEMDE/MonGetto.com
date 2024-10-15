<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuatierRequest;
use App\Models\Quatier;
use App\Models\Ville;


class QuatierController extends Controller
{
    public function index()
    {
        $quatier = Quatier::with('ville.pays')->orderBy('name', 'asc')->paginate(10);
        return view('dashboard.quatier.index', compact('quatier'));
    }

    public function create()
    {

        $ville = Ville::orderBy('name', 'asc')->get();
        return view('dashboard.quatier.create', compact('ville'));
    }

    public function store(QuatierRequest $request)
    {
        $existingQuatier = Quatier::where('name', $request->input('quatier'))
            ->where('ville_id', $request->input('ville_id'))
            ->first();

        if ($existingQuatier) {
            return redirect()->route('admin.quatier.create')->with('error', 'Ce Quatier existe déjà pour cette Ville!');
        }

        $quatier = new Quatier();
        $quatier->name = $request->input('quatier');
        $quatier->ville_id = $request->input('ville_id');

        if (!$quatier->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout du Quatier.');
        }

        return redirect()->route('admin.quatier.create')->with('success', 'Quatier ajouté avec succès!');
    }

    public function show(string $quatier)
    {
        $quatier = Quatier::findOrFail($quatier);

        return view('dashboard.quatier.show', compact('quatier'));
    }

    public function edit(string $quatier)
    {
        $quatier = Quatier::findOrFail($quatier);

        return view('dashboard.quatier.edit', compact('quatier'));
    }

    public function update(QuatierRequest $request, string $quatier)
    {
        $quatier = Quatier::findOrFail($quatier);
        $quatier->name = $request->input('quatier');

        if (!$quatier->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour du quatier.');
        }

        return redirect()->route('admin.quatier.show')->with('success', 'Quatier mis à jour avec succès!');
    }

    public function deleteQuatier($quatier)
    {
        $quatier = Quatier::findOrFail($quatier);

        if ($quatier->delete()) {
            return redirect()->route('admin.quatier.show')->with('success', 'Quatier supprimé avec succès');
        }

        return redirect()->route('admin.quatier.show')->with('error', 'Une erreur est survenue lors de la suppression du Quatier.');
    }

    public function destroy(string $quatier)
    {

        $quatier = Quatier::findOrFail($quatier);
    
        $quatier->delete();

        return redirect()->route('admin.quatier.index')->with('success', 'Quatiers supprimés avec succès!');
    }
}
