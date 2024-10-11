@extends('dashboard.layouts.appAdmin')
@section('tilte')
    Personal Information
@endsection

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Personal Information</h2>
        <div class="dashboard_profile">
            <div class="dashboard_profile_info">
                <div class="row">
                    <div class="col-xxl-4 col-md-5 col-lg-6 col-xl-5 wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="dashboard_profile_img">
                            <img src="{{ asset('assets/images/logo_1.png') }}" alt="agent" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xxl-8 col-md-7 col-lg-6 col-xl-7 wow fadeInRight" data-wow-duration="1.5s">
                        <div class="dashboard_profile_text">
                            <h3>MOHAMED KIEMDE</h3>
                            <ul class="list">
                                <li><span>Email :</span> 07 12</li>
                                <li><span>Ville :</span> Ouaga</li>
                                <li><span>Pays :</span> BF</li>
                                <li><span>Addresse :</span> 12000</li>
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
                <h3>Mettre a jour mes information</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <label for="name ">Nom</label>
                            <input type="text" name="name" id="name" placeholder="Nom">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="prenom ">Prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label></label>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="number">Numero</label>
                            <input type="text" name="number" id="number" placeholder="Numero">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville" placeholder="Ville">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="pays">Pays</label>
                            <input type="text" name="pays" id="pays" placeholder="pays">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label for="photo_profile">Photo de profile</label>
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
                <form action="#">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <label>Mot de passe actuel</label>
                            <input type="password" placeholder="Corrent Password">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <label>Nouveau mot de passe</label>
                            <input type="password" placeholder="New Password">
                        </div>
                        <div class="col-xl-4">
                            <label>Confirmer le mot de passe </label>
                            <input type="password" placeholder="Conform Password">
                        </div>
                        <div class="col-12">
                            <button class="common_btn mt-0" type="submit">Mise à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <!--=========================
                                                                                                                                                            DASHBOARD INFO END
                                                                                                                                                        ==========================-->
@endsection
