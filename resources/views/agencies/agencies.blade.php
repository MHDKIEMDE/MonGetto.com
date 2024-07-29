@extends('layouts.app')
@section('titre'. 'Agencies')
@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Agencies</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.agencies') }}">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="agencies_page pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 margin_sm">
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_1.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_1.jpg" alt="Agencies" class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_2.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_2.jpg" alt="Agencies" class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_3.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_3.jpg" alt="Agencies" class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_4.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_4.jpg" alt="Agencies"
                                            class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate
                                        Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_5.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_5.jpg" alt="Agencies"
                                            class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate
                                        Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_agencies">
                                <a href="{{ route('user.agencies_details') }}" class="single_agencies_img">
                                    <img src="assets/images/agencies_img_2.jpg" alt="Agencies" class="img-fluid w-100">
                                </a>
                                <div class="single_agencies_text">
                                    <div class="agencies_logo">
                                        <img src="assets/images/agencies_logo_2.jpg" alt="Agencies"
                                            class="img-fluid w-100">
                                    </div>
                                    <a class="item_title" href="{{ route('user.agencies_details') }}">Realestate
                                        Company</a>
                                    <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                    <ul class="list">
                                        <li><span>Listing:</span> 1357</li>
                                        <li><span>Phone:</span> +96547512365478</li>
                                        <li><span>Email:</span> example@gmail.com</li>
                                    </ul>
                                    <ul class="social_link d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="col-12">
                            <div id="pagination_area">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="far fa-angle-double-left" aria-hidden="true"></i></a></li>
                                        <li class="page-item"><a class="page-link active" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="far fa-angle-double-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky_sidebar">
                        <div class="blog_details_right">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                            <div class="blog_details_right_header sidebar_blog">
                                <h3>Popular properties</h3>
                                <div class="popular_blog d-flex flex-wrap">
                                    <div class="popular_blog_img">
                                        <img src="assets/images/popular_blog_1.jpg" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="assets/images/calender.png" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 23, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.blog_details') }}">The Best Delicious
                                            Coffee Shop In
                                            Bangkok
                                            China.</a>
                                    </div>
                                </div>
                                <div class="popular_blog d-flex flex-wrap">
                                    <div class="popular_blog_img">
                                        <img src="assets/images/popular_blog_2.jpg" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="assets/images/calender.png" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 24, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.blog_details') }}">Luxury top-floor
                                            properties
                                            available for
                                            purchase.</a>
                                    </div>
                                </div>
                                <div class="popular_blog d-flex flex-wrap">
                                    <div class="popular_blog_img">
                                        <img src="assets/images/popular_blog_3.jpg" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="assets/images/calender.png" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 25, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.blog_details') }}">Skills that you can
                                            learn the
                                            Real Estate
                                            Market.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_details_right_header">
                                <h3>Categories Property</h3>
                                <ul class="categories_property">
                                    <li>
                                        <a class="common_btn d-flex flex-wrap justify-content-between" href="#">
                                            <p>Real Estate</p>
                                            <span>(6 properties)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="common_btn d-flex flex-wrap justify-content-between" href="#">
                                            <p>House</p>
                                            <span>(8 properties)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="common_btn d-flex flex-wrap justify-content-between" href="#">
                                            <p>Home Land</p>
                                            <span>(26 properties)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="common_btn d-flex flex-wrap justify-content-between" href="#">
                                            <p>Garages</p>
                                            <span>(15 properties)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="common_btn d-flex flex-wrap justify-content-between" href="#">
                                            <p>Bath Beds</p>
                                            <span>(74 properties)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_details_right_header">
                                <h3>Popular Tags</h3>
                                <ul class="blog_details_tag d-flex flex-wrap mb-0">
                                    <li><a class="common_btn" href="#">House Build</a></li>
                                    <li><a class="common_btn" href="#">Apartment</a></li>
                                    <li><a class="common_btn" href="#">House design</a></li>
                                    <li><a class="common_btn" href="#">Real</a></li>
                                    <li><a class="common_btn" href="#">Luxury</a></li>
                                    <li><a class="common_btn" href="#">House rental</a></li>
                                    <li><a class="common_btn" href="#">Estate</a></li>
                                    <li><a class="common_btn" href="#">Modern house</a></li>
                                    <li><a class="common_btn" href="#">House tree</a></li>
                                    <li><a class="common_btn" href="#">House sell</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
