<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipementRequest;
use App\Models\Equipements;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipement = Equipements::paginate(10);

        return view('dashboard.equipement.index', compact('equipement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.equipement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipementRequest $request)
    {
        $equipementName = $request->input('equipement');
        $equipement = Equipements::where('name', $equipementName)->first();
        if ($equipement) {
            return redirect()->route('admin.equipement.create')->with('error', 'Ce equipement existe déjà.');
        } else {
            $equipement = new Equipements();
            $equipement->name = $request->input('equipement');
            $equipement->save();
            return redirect()->route('admin.equipement.create')->with('success', 'Equipement ajouté avec succès!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $equipement)
    {
        $equipement = Equipements::findOrFail($equipement);

        return view('dashboard.equipement.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $equipement)
    {
        $equipement = Equipements::findOrFail($equipement);

        return view('dashboard.equipement.edit', compact('equipement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipementRequest $request, string $equipement)
    {
        $equipement = Equipements::findOrFail($equipement);

        $equipement->name = $request->input('equipement');

        $equipement->save();

        return redirect()->route('admin.equipement.index')->with('success', 'Equipement mis à jour avec succès!');; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $equipement)
    {

        $equipement = Equipements::findOrFail($equipement);

        $equipement->delete();

        return redirect()->route('admin.equipement.index')->with('success', 'Equipement supprimés avec succès!');
    }
}
