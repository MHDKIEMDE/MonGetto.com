<?php

namespace App\Http\Controllers;

use App\Http\Requests\VilleRequest;
use App\Models\Pays;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{

    public function index()
{

        $ville = Ville::with('pays')->paginate(10);
        
        return view('dashboard.ville.index', compact('ville'));
    }

    public function create()
    {
        $pays = Pays::all();

        return view('dashboard.ville.create', compact('pays'));
    }

    public function store(VilleRequest $request)
    {

        // Vérifier si la ville existe déjà
        $existingVille = Ville::where('name', $request->input('ville'))
            ->where('pays_id', $request->input('pays_id'))
            ->first();

        if ($existingVille) {
            return redirect()->route('admin.ville.create')->with('error', 'Cette ville existe déjà pour ce pays!');
        }

        // Créer une nouvelle instance du modèle Ville
        $ville = new Ville();
        $ville->name = $request->input('ville');
        $ville->pays_id = $request->input('pays_id');

        // Sauvegarder la ville
        if (!$ville->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout de la ville.');
        }

        // Redirection avec un message de succès
        return redirect()->route('admin.ville.create')->with('success', 'Ville ajoutée avec succès!');
    }

    public function show(string $ville)
    {
        $ville = Ville::findOrFail($ville);

        // Retourner une vue avec les données de la Ville
        return view('dashboard.ville.show', compact('ville'));
    }

    public function edit(string $ville)
    {
        $ville = Ville::findOrFail($ville);

        return view('dashboard.ville.edit', compact('ville'));
    }

    public function update(VilleRequest $request, string $ville)
    {
        $ville = Ville::findOrFail($ville);

        $ville->name = $request->input('ville');

        if (!$ville->save()) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour du ville.');
        }

        return redirect()->route('admin.ville.show')->with('success', 'Ville mis à jour avec succès!');
    }


    public function destroy($id)
    {
        $ville = Ville::findOrFail($id);
        $ville->delete();

        return redirect()->route('admin.ville.index')->with('success', 'Ville et ses quartiers supprimés avec succès!');
    }
}
