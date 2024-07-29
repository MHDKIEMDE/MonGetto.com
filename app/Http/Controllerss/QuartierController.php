<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuartierRequest;
use App\Models\Quartier;
use App\Models\Ville;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $quartier = Quartier::with('ville.pays')->paginate(10);
        return view('dashboard.quartier.index', compact('quartier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ville = Ville::all();

        return view('dashboard.quartier.create', compact('ville'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuartierRequest $request)
    {
        $existingQuartier = Quartier::where('name', $request->input('quartier'))
            ->where('ville_id', $request->input('ville_id'))
            ->first();

        if ($existingQuartier) {
            return redirect()->route('admin.quartier.create')->with('error', 'Ce Quartier existe déjà pour cette Ville!');
        }

        $quartier = new Quartier();
        $quartier->name = $request->input('quartier');
        $quartier->ville_id = $request->input('ville_id');

        if (!$quartier->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout du Quartier.');
        }

        return redirect()->route('admin.quartier.create')->with('success', 'Quartier ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $quartier)
    {
        $quartier = Quartier::findOrFail($quartier);

        return view('dashboard.quartier.show', compact('quartier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $quartier)
    {
        $quartier = Quartier::findOrFail($quartier);

        return view('dashboard.quartier.edit', compact('quartier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuartierRequest $request, string $quartier)
    {
        $quartier = Quartier::findOrFail($quartier);
        $quartier->name = $request->input('quartier');

        if (!$quartier->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour du quartier.');
        }

        return redirect()->route('admin.quartier.show')->with('success', 'Quartier mis à jour avec succès!');
    }

    public function deleteQuartier($quartier)
    {
        $quartier = Quartier::findOrFail($quartier);

        if ($quartier->delete()) {
            return redirect()->route('admin.quartier.show')->with('success', 'Quartier supprimé avec succès');
        }

        return redirect()->route('admin.quartier.show')->with('error', 'Une erreur est survenue lors de la suppression du Quartier.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $quartier)
    {
    }
}
