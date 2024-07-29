@extends('dashboard.layouts.appAdmin')

@section('title', 'Personal Information')

@section('contents')
    <div class="dashboard_content">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <h2 class="dashboard_title">Personal Information</h2>
            </div>
            <div class="col-xl-8 col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="dashboard_profile">

            <div class="dashboard_profile_info">
                <div class="row">
                    <div class="col-xxl-4 col-md-5 col-lg-6 col-xl-5 wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="dashboard_profile_img">
                            @if ($user->profile_image)
                                <img src="{{ asset('storage/' . $user->profile_image) }}" alt=""
                                    class="img-fluid w-100">
                            @else
                                <img src="{{ asset('assets/images/default_img.jpg') }}" alt="Default Image"
                                    class="img-fluid w-100">
                            @endif
                        </div>
                    </div>
                    <div class="col-xxl-8 col-md-7 col-lg-6 col-xl-7 wow fadeInRight" data-wow-duration="1.5s">
                        <div class="dashboard_profile_text">
                            <h3> {{ $user->prenom }} {{ $user->name }} </h3>
                            <ul class="list">
                                <li><span>Email :</span> {{ $user->email }}</li>
                                <li><span>Ville :</span> {{ $user->ville }}</li>
                                <li><span>Pays :</span> {{ $user->pays }}</li>
                                <li><span>Quartier :</span> {{ $user->quartier }}</li>
                            </ul>
                            <ul class="icon d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard_profile_edit wow fadeInUp" data-wow-duration="1.5s">
                <h3>Mettre à jour mes informations</h3>
                <form method="POST" action="{{ route('admin.user.update', ['user' => Auth::id()]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                placeholder="Nom">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" value="{{ old('prenom', $user->prenom) }}"
                                placeholder="Prenom">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                placeholder="Email">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="number">Numero</label>
                            <input type="text" name="number" id="number" value="{{ old('number', $user->number) }}"
                                placeholder="Numero">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="number_2">number_2</label>
                            <input type="text" name="number_2" id="number_2"
                                value="{{ old('number_2', $user->number_2) }}" placeholder="number_2">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville" value="{{ old('ville', $user->ville) }}"
                                placeholder="Ville">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="pays">Pays</label>
                            <input type="text" name="pays" id="pays" value="{{ old('pays', $user->pays) }}"
                                placeholder="Pays">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="quartier">Quartier</label>
                            <input type="text" name="quartier" id="quartier"
                                value="{{ old('quartier', $user->quartier) }}" placeholder="quartier">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="photo_profile">Photo de profil</label>
                            <input type="file" name="photo_profile" id="photo_profile">
                        </div>

                        <div class="col-12">
                            <button class="common_btn" type="submit">Mise à jour</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="dashboard_profile_edit wow fadeInUp" data-wow-duration="1.5s">
                <h3>Mise à jour le mot de passe</h3>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT') <!-- Utilisation de PUT pour la mise à jour -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <label for="current_password">Mot de passe actuel</label>
                            <input type="password" name="current_password" id="current_password"
                                placeholder="Mot de passe actuel">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="new_password">Nouveau mot de passe</label>
                            <input type="password" name="new_password" id="new_password"
                                placeholder="Nouveau mot de passe">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="confirm_password">Confirmer le mot de passe</label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Confirmer le mot de passe">
                        </div>
                        <div class="col-12">
                            <button class="common_btn mt-0" type="submit">Mise à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
