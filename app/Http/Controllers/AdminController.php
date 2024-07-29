<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Pays;
use App\Models\Propriete;
use App\Models\Quartier;
use App\Models\TypeMaison;
use App\Models\User;
use App\Models\Ville;

use Illuminate\Routing\Controller;


class AdminController extends Controller
{


    public function index()
    {
        $users = User::all();
        $blogs = Blog::paginate(5);
        $userCount = User::count();
        $paysCount = Pays::count();
        $villeCount = Ville::count();
        $quartierCount = Quartier::count();
        $proprieteCount = Propriete::count();
        $typeMaisonCount = TypeMaison::count();
        $proprietes = Propriete::paginate(5);
        return view('dashboard.home.index',  compact('userCount', 'blogs', 'users', 'paysCount', 'villeCount', 'quartierCount', 'proprieteCount', 'typeMaisonCount', 'proprietes'));
    }


    public function dashboardInvoice()
    {

        return view('dashboard.dashboard_Invoice');
    }

    public function dashboardWishlist()
    {
        return view('dashboard.dashboard_Wishlist');
    }

    public function dashboardReview()
    {
        return view('dashboard.dashboard_Review');
    }
 
    public function dashboardPricing()
    {
        return view('dashboard.dashboard_Pricing');
    }
}
