<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeMaisonRequest;
use App\Models\TypeMaison;
use Illuminate\Http\Request;

class TypeMaisonController extends Controller
{
    public function search(TypeMaisonRequest $request)
    {
        $term = $request->input('term');
        $typeMaison = TypeMaison::where('name', 'like', '%' . $term . '%')->get();
        return response()->json($typeMaison);
    }


    public function index()
    {
        $typeMaison = TypeMaison::paginate(10);

        return view('dashboard.typeMaison.index', compact('typeMaison'));
    }


    public function create()
    {
        return view('dashboard.typeMaison.create');
    }

   
    public function store(TypeMaisonRequest $request)
    {
        // Vérifier si le type de maison existe déjà
        $typeMaisonExiste = TypeMaison::where('name', $request->input('typeMaison'))->exists();

        if ($typeMaisonExiste) {
            return redirect()->route('admin.typeMaison.create')->with('error', 'Ce type de maison existe déjà.');
        }

        // Créer un nouveau type de maison
        $typeMaison = new TypeMaison();
        $typeMaison->name = $request->input('typeMaison');
        $typeMaison->save();

        return redirect()->route('admin.typeMaison.create')->with('success', 'Type de maison ajouté avec succès!');
    }

    public function show(string $typeMaison)
    {
        $typeMaison = TypeMaison::findOrFail($typeMaison);

        return view('dashboard.typeMaison.show', compact('typeMaison', 'quartier', 'ville'));
    }


    public function edit(string $typeMaison)
    {
        $typeMaison = TypeMaison::findOrFail($typeMaison);

        return view('dashboard.typeMaison.edit', compact('typeMaison'));
    }


    public function update(TypeMaisonRequest $request, string $typeMaison)
    {
        $typeMaison = TypeMaison::findOrFail($typeMaison);

        $typeMaison->name = $request->input('typeMaison');

        $typeMaison->save();

        return redirect()->route('admin.typeMaison.show')->with('success', 'typeMaison mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $typeMaison = TypeMaison::findOrFail($id);
        $typeMaison->delete();

        return redirect()->route('admin.typeMaison.index')->with('success', 'typeMaison et ses maisons supprimés avec succès!');
    }
}
