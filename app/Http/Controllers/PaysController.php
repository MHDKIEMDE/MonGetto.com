<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaysRequest;
use App\Models\Pays;

use Illuminate\Http\Request;

class PaysController extends Controller
{


    public function index()
    {

        $pays = Pays::orderBy('created_at', 'desc')->paginate(2);

        return view('dashboard.pays.index', compact('pays'));
    }


    public function create()
    {
        return view('dashboard.pays.create');
    }

    public function store(PaysRequest $request)
    {
        $paysName = $request->input('pays');
        $pays = Pays::where('name', $paysName)->first();
        if ($pays) {
            return redirect()->route('admin.pays.create')->with('error', 'Ce pays existe déjà.');
        } else {
            $pays = new Pays();
            $pays->name = $request->input('pays');
            $pays->save();
            return redirect()->route('admin.pays.create')->with('success', 'Pays ajouté avec succès!');
        }
    }

    public function show(string $pay)
    {
        $pays = Pays::findOrFail($pay);

        return view('dashboard.pays.show', compact('Pays', 'quatier', 'ville'));
    }


    public function edit(string $pay)
    {
        $pays = Pays::findOrFail($pay);

        return view('dashboard.pays.edit', compact('pays'));
    }


    public function update(PaysRequest $request, string $pay)
    {
        $pays = Pays::findOrFail($pay);

        $pays->name = $request->input('pays');

        $pays->save();

        return redirect()->route('admin.pays.index')->with('success', 'Pays mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $pays = Pays::findOrFail($id);
        $pays->delete();

        return redirect()->route('admin.pays.index')->with('success', 'Pays et ses villes et quatiers supprimés avec succès!');
    }
}
