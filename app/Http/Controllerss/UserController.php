<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Propriete;
use App\Models\User;

class UserController extends Controller
{

    public function home()
    {
        $users = User::paginate(10);
        $blogs = Blog::with('images')->paginate(10);
        $userCount = User::count();
        $proprietes = Propriete::with('images')->paginate(10);
        $userCount = User::count();

        return view('accueil', compact('proprietes', 'blogs', 'users', 'userCount'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
    function apropos()
    {
        $users = User::paginate(10);
        $blogs = Blog::paginate(10);
        $proprietes = Propriete::with('images')->paginate(10);
        $userCount = User::count();

        return view('apropos', compact('proprietes', 'blogs', 'users', 'userCount'));
    }

    function paiement()
    {
        return view('paiement');
    }
    function pricingPlan()
    {
        return view('pricing_plan');
    }
    function privacyPolicy()
    {
        return view('privacy_policy');
    }

    function forgotPassword()
    {
        return view('forgot_password');
    }
    function faq()
    {
        return view('faq');
    }
    function error()
    {
        return view('error');
    }
    function contact()
    {
        return view('contact');
    }
    function checkout()
    {
        return view('checkout');
    }
    function agentDetails()
    {
        return view('agent_details');
    }
    function agencies()
    {
        return view('agencies');
    }
    function agenciesDetails()
    {
        return view('agencies_details');
    }
}
