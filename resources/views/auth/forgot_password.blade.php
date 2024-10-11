@extends('layouts.app')
@section('contente')
    <!--=============================
                        BREADCRUMBS START
                    ==============================-->
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>forgot Password</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.forgot_password') }}">forgot Password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                        BREADCRUMBS END
                    ==============================-->


    <!--=============================
                        FORGOT PASSWORD START
                    ==============================-->
    <section class="forgot_password login_area pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="main_login_area wow fadeInUp" data-wow-duration="1.5s">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="login_text">
                                    <h4>forgot Password!</h4>
                                    <form action="#">
                                        <div class="single_input">
                                            <label>Email</label>
                                            <input type="text" placeholder="Email">
                                        </div>
                                        <button class="common_btn" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                        FORGOT PASSWORD END
                    ==============================-->
@endsection
