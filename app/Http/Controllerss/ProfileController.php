<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ProprieteRequest;
use App\Models\User;
use App\Models\Propriete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;


use App\Models\Image;
use App\Models\Quartier;
use App\Models\TypeMaison;
use App\Models\Ville;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $users = User::paginate(10);
        $profile = $user->profile;
        $users = User::withCount('proprietes')->get();

        return view('dashboard.profile.index', compact('user', 'users', 'profile'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $users = User::withCount('proprietes')->findOrFail($id);
        $propriete = Propriete::findOrFail($id);

        return view('dashboard.profile.show', compact('users', 'proprietes'));
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
        $user->quartier = $request->input('quartier');

        if ($request->hasFile('photo_profile')) {
            $imagePath = $request->file('photo_profile')->store('public/profile_images');
            $user->profile_image = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès!');
    }
}
