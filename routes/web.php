<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\QuatierController;
use App\Http\Controllers\TypeMaisonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

Route::get('/apropos', [UserController::class, 'apropos'])->name('user.apropos');
Route::get('/paiement', [UserController::class, 'paiement'])->name('user.paiement');
Route::get('/pricing', [UserController::class, 'pricingPlan'])->name('user.pricing');
Route::get('/privacy_policy', [UserController::class, 'privacyPolicy'])->name('user.privacy_policy');
Route::get('/forgot_password', [UserController::class, 'forgotPassword'])->name('user.forgot_password');
Route::get('/faq', [UserController::class, 'faq'])->name('user.faq');
Route::get('/error', [UserController::class, 'error'])->name('user.error');
Route::get('/checkout', [UserController::class, 'checkout'])->name('user.checkout');


Route::get('/agent', [UserController::class, 'agent'])->name('user.agent');
Route::get('/agent_details', [UserController::class, 'agentDetails'])->name('user.agent_details');
Route::get('/agencies', [UserController::class, 'agencies'])->name('user.agencies');
Route::get('/agencies_details', [UserController::class, 'agenciesDetails'])->name('user.agencies_details');


Route::prefix('dashboard')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home.index');
    Route::resource('user', UserController::class);
    Route::resource('pays', PaysController::class);
    Route::resource('ville', VilleController::class);
    Route::resource('quatier', QuatierController::class);
    Route::resource('propriete', ProprieteController::class);
    Route::resource('typeMaison', TypeMaisonController::class);
    Route::resource('equipement', EquipementController::class);
  
    Route::get('/wishlist', [AdminController::class, 'dashboardWishlist'])->name('wishlist');
    Route::get('/invoice', [AdminController::class, 'dashboardInvoice'])->name('invoice');
    Route::get('/pricing', [AdminController::class, 'dashboardPricing'])->name('pricing');
    Route::get('/review', [ContactController::class, 'dashboardReview'])->name('review');
    Route::get('/propriete/liste', [ProprieteController::class, 'liste'])->name('propriete.liste');
});


Route::get('/', [UserController::class, 'home'])->name('user.home');

Route::prefix('user')->name('')->group(function () {
    Route::get('/propriete_l', [ProprieteController::class, 'proprietes_l'])->name('user.propriete_l');
    Route::get('/proprietes_lv', [ProprieteController::class, 'proprietes_lv'])->name('user.proprietes_lv');
    Route::get('/proprietes_rs', [ProprieteController::class, 'proprietes_rs'])->name('user.proprietes_rs');
    Route::resource('propriete', ProprieteController::class);
});

Route::prefix('')->name('')->group(function () {
    Route::resource('blog', BlogController::class);
    Route::resource('contact', ContactController::class);
});

Route::get('dashboard/propriete/liste', [ProprieteController::class, 'liste'])->name('admin.propriete.liste');