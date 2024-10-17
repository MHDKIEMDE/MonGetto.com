<?php

namespace App\Http\Controllers;


use App\Models\Equipements;

use App\Models\Pays;
use App\Models\Ville;
use App\Models\Quatier;
use App\Models\Propriete;
use App\Models\TypeMaison;
use App\Http\Requests\ProprieteRequest;
use App\Models\ProprieteImage;

class ProprieteController extends Controller
{

    public function index()
    {
        $proprietes = Propriete::with(['images', 'user'])->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.propriete.liste', compact('proprietes'));
    }

    public function index2()
    {

        $proprietes = Propriete::with(['images', 'user'])->orderBy('created_at', 'desc')->paginate(10);

        return view('propriete.propriete_lv', compact('proprietes'));
    }

    public function index3()
    {
        $proprietes = Propriete::with(['images', 'user'])->orderBy('created_at', 'desc')->paginate(10);

        return view('propriete.propriete_sl', compact('proprietes'));
    }

    public function index4()
    {
        $proprietes = Propriete::with(['images', 'user'])->orderBy('created_at', 'desc')->paginate(10);

        return view('propriete.propriete_rs', compact('proprietes'));
    }

    public function create()
    {
        $pays = Pays::all();
        $ville = Ville::all();
        $quatier = Quatier::all();
        $typeMaison = TypeMaison::all();
        $equipements = Equipements::all();

        return view('dashboard.propriete.create', compact('pays', 'ville', 'quatier', 'typeMaison', 'equipements'));
    }

    public function store(ProprieteRequest $request)
    {
        // Création d'une nouvelle propriété avec les données validées
        $propriete = new Propriete();
        $propriete->user_id = auth()->user()->id;
        $propriete->pays_id = $request->input('pays_id');
        $propriete->ville_id = $request->input('ville_id');
        $propriete->quatier_id = $request->input('quatier_id');
        $propriete->typeMaison_id = $request->input('typeMaison_id');
        $propriete->nbre_C = $request->input('nbre_C');
        $propriete->loyers = $request->input('loyers');
        $propriete->equipements = json_encode($request->input('equipements', []));
        $propriete->description = $request->input('description');
        $propriete->google_map = $request->input('google_map');
        $propriete->save();

        // Enregistrement des images associées à la propriété dans la table 'images'
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Stockage de l'image dans 'storage/public/propriete_images'
                $imagePath = $image->store('propriete_images', 'public');

                // Création d'une nouvelle entrée dans la table 'proprieteImages' liée à la propriété
                $imageModel = new ProprieteImage();
                $imageModel->url = $imagePath; // URL publique de l'image
                // Association de l'image à la propriété
                $propriete->images()->save($imageModel);
            }
        }

        // Redirection avec message de succès
        return redirect()->route('admin.home.index')->with('success', 'Propriété ajoutée avec succès!');
    }

    public function show(string $id)
    {
        $proprietes = Propriete::findOrFail($id);

        return view('propriete.show', compact('proprietes'));
    }

    public function edit($propriete)
    {
        $propriete = Propriete::findOrFail($propriete);
        $pays = Pays::all();
        $ville = Ville::all();
        $quatier = Quatier::all();
        $typeMaison = TypeMaison::all();

        return view('dashboard.propriete.edit', compact('propriete', 'pays', 'ville', 'quatier', 'typeMaison'));
    }

    public function update(ProprieteRequest $request, string $propriete)
    {

        return redirect()->route('admin.propriete.show')->with('success', 'Propriete mis à jour avec succès!');
    }

    public function destroy($propriete)
    {
        $propriete = Propriete::findOrFail($propriete);
        $propriete->delete();
        return redirect()->route('admin.propriete.index')->with('success', 'Propriete supprimés avec succès!');
    }

    public function liste()
    {
        return view('dashboard.propriete.liste');
    }
}
