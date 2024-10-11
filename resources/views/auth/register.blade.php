@extends('layouts.app')
@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Inscription</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="#">Registration</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login_area registration pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-lg-8 col-xl-11">
                    <div class="main_login_area">
                        <div class="row">
                            <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="login_text">
                                    <h4>Inscription</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="single_input">
                                            <label for="name" class="form-label">{{ __('Nom') }}</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ old('name') }}" required autofocus>
                                        </div>
                                        <div class="single_input">
                                            <label for="email" class="form-label">{{ __('Adresse Email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ old('email') }}" required>
                                        </div>
                                        <div class="single_input">
                                            <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="12345678" value="12345678" required>
                                            <span class="show_password">
                                                <i class="far fa-eye open_eye"></i>
                                                <i class="far fa-eye-slash close_eye"></i>
                                            </span>
                                        </div>
                                        <div class="single_input">
                                            <label for="password_confirmation"
                                                class="form-label">{{ __('Confirmer le mot de passe') }}</label>
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation"  placeholder="12345678" value="12345678"  required>
                                            <span class="show_confirm_password">
                                                <i class="far fa-eye open_eye"></i>
                                                <i class="far fa-eye-slash close_eye"></i>
                                            </span>
                                        </div>
                                        <button class="common_btn">Inscription</button>
                                    </form>
                                    <span>or login with</span>
                                    <ul class="other_login_option d-flex flex-wrap justify-content-center">
                                        <li>
                                            <a href="#">
                                                <span><img src="assets/images/google.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                google
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><img src="assets/images/facebook.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                facebook
                                            </a>
                                        </li>
                                    </ul>
                                    <p>Don’t you have an account? <a href="{{ route('login') }}">login</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 d-none d-xl-block wow fadeInRight" data-wow-duration="1.5s">
                                <div class="login_img">
                                    <img src="assets/images/login_bg.jpg" alt="img" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
