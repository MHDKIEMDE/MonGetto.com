@extends('layouts.app')

@section('title', '404')

@section('contente')

    <section class="error_area" style="background: url(./assets/images/error_bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="main_error">
                        <h2>404</h2>
                        <h4>Oops ! La page est introuvable.</h4>
                        <p>Nous sommes désolés mais la page que vous avez demandée est manquante Ou retournez à Aller à
                            la page d'accueil</p>
                        <a class="common_btn" href="{{ route('user.home') }}">Retour à la page d'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endforeach
