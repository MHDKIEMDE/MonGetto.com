<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Propriete;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        // Récupère l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Vérifie que l'utilisateur est authentifié
        if ($user) {
            // Récupère le profil de l'utilisateur
            $profile = $user->profile; // Assure-toi que la relation est correctement définie dans le modèle User

            return view('dashboard.profile.index', compact('user', 'profile'));
        } else {
            // Redirection si l'utilisateur n'est pas authentifié
            return redirect()->route('login');
        }
    }


    public function show(string $id)
    {
        $users = User::withCount('proprietes')->findOrFail($id);
        $proprietes = Propriete::findOrFail($id);
        

        return view('profile.show', compact('users', 'proprietes'));
    }


    public function update(ProfileRequest $request, $profile)
    {
        $user = User::findOrFail($profile);
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->number_2 = $request->input('number_2');
        $user->ville = $request->input('ville');
        $user->pays = $request->input('pays');
        $user->quatier = $request->input('quatier');

        if ($request->hasFile('photo_profile')) {
            $imagePath = $request->file('photo_profile')->store('public/profile_images');
            $user->profile_image = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès!');
    }
}
