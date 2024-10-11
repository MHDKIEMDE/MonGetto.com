@extends('layouts.app')
@section('title', 'Blog')
@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Blog Details</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_details pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="blog_details_left">
                        <div class="blog_details_img_1">
                            <img src="{{ asset('assets/images/blog_details_1_img.jpg') }}" alt="img"
                                class="img-fluid w-100">
                        </div>
                        <ul class="blog_details_engage d-flex flex-wrap">
                            <li>
                                <span><img src="{{ asset('assets/images/calender_2.png') }}" alt="icon"
                                        class="img-fluid w-100"></span>
                                March 28,2024
                            </li>
                            <li>
                                <span><img src="{{ asset('assets/images/user_icon_2.png') }}" alt="icon"
                                        class="img-fluid w-100"></span>
                                By Douglas Lyphe
                            </li>
                            <li>
                                <span><img src="{{ asset('assets/images/massage_2.png') }}" alt="icon"
                                        class="img-fluid w-100"></span>
                                3 Comment
                            </li>
                        </ul>
                        <h2>Maximize Room in Petite Bedroom Spaces.</h2>
                        <p>Many individuals and institutions invest in real estate for potential appreciation in value,
                            rental income combination both. Real estate investment can be done directly by buying
                            properties or indirectly through real estate investment trusts (REITs) and other investment
                            vehicles.</p>
                        <div class="blog_details_review">
                            <p>"Partnering with Interior was a delightful experience. Their designers showcased immense
                                skill, ensuring I was always in the loop and actively participating in decision-making.
                                I look forward to the opportunity to work with them again."</p>
                        </div>
                        <div class="blog_details_img_2">
                            <img src="{{ asset('assets/images/blog_details_2_img.jpg') }}" alt="img"
                                class="img-fluid w-100">
                        </div>
                        <h2>Embracing a sophisticated yet minimalist aesthetic.</h2>
                        <p>This includes single-family homes, condominiums, townhouses, and apartment buildings.
                            Residential real estate is often classified by the number of dwelling units, such as
                            single-family (one unit), duplex (two units), triplex (three units), or multi-family (four
                            or more units).</p>
                        <ul class="blog_explaine">
                            <li>Real estate development involves the process of purchasing, improving.</li>
                            <li>This can include constructing buildings, roads, utilities, and other infrastructure.
                            </li>
                            <li>Real estate markets can experience fluctuations in property values & demand.</li>
                        </ul>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="blog_shear_area">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="blog_shear_area_left d-flex flex-wrap">
                                                <h5>Post Tags:</h5>
                                                <ul class="blog_details_tag d-flex flex-wrap">
                                                    <li><a class="common_btn" href="#">House Build</a></li>
                                                    <li><a class="common_btn" href="#">Estate</a></li>
                                                    <li><a class="common_btn" href="#">Apartment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="blog_shear_area_right d-flex flex-wrap">
                                                <h5>Share:</h5>
                                                <ul class="d-flex flex-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>2 Comments</h2>
                        <div class="blog_comment d-flex flex-wrap">
                            <div class="blog_comment_img">
                                <img src="{{ asset('assets/images/comment_1.png') }}" alt="img"
                                    class="img-fluid w-100">
                            </div>
                            <div class="blog_comment_text">
                                <h4>Douglas Lyphe</h4>
                                <span>march 26,2024 at 10:47 pm</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis turpis,
                                    maximus ut augue et, imperdiet tempor nisi. Fusce at lacus a risus viverra suscipit.
                                </p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="blog_comment blog_comment_reply d-flex flex-wrap">
                            <div class="blog_comment_img">
                                <img src="{{ asset('assets/images/comment_2.png') }}" alt="img"
                                    class="img-fluid w-100">
                            </div>
                            <div class="blog_comment_text">
                                <h4>Lance Bogrol</h4>
                                <span>march 26,2024 at 10:47 pm</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis turpis,
                                    maximus ut augue et, imperdiet tempor nisi. Fusce at lacus a risus viverra suscipit.
                                </p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="blog_comment d-flex flex-wrap">
                            <div class="blog_comment_img">
                                <img src="{{ asset('assets/images/comment_1.png') }}" alt="img"
                                    class="img-fluid w-100">
                            </div>
                            <div class="blog_comment_text">
                                <h4>Douglas Lyphe</h4>
                                <span>march 26,2024 at 10:47 pm</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis turpis,
                                    maximus ut augue et, imperdiet tempor nisi. Fusce at lacus a risus viverra suscipit.
                                </p>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <form action="#">
                            <h2>Laisser un commentaire</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog_form_input">
                                        <input type="text" placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog_form_input">
                                        <input type="email" placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog_form_input">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog_form_input">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="blog_form_input">
                                        <textarea rows="5" placeholder="Your Comment Here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-check blog_checkbox">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            créer un compte pour publier des propriétés</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn">Soumettre</button>
                                </div>
                            </div>
                        </form>
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
                                <h3>Popular Blog</h3>
                                @foreach ($blogs as $blog)
                                    <div class="popular_blog d-flex flex-wrap">
                                        <div class="popular_blog_img">


                                           


                                            @if ($blog->images && $blog->images->isNotEmpty())
                                                <img src="{{ asset('images/blog_images/' . $blog->images->first()->url) }}"
                                                    alt="property" class="img-fluid w-100">
                                            @else
                                                <img src="{{ asset('assets/images/popular_blog_1.jpg') }}" alt="img"
                                                    class="img-fluid w-100">
                                            @endif

                                        </div>
                                        <div class="popular_blog_text">
                                            <p>
                                                <span><img src="{{ asset('assets/images/calender.png') }}" alt="icon"
                                                        class="img-fluid w-100"></span>
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}
                                            </p>
                                            <a class="item_title" href="blog_details.html"> {{ $blog->name }} </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="blog_details_right_header">
                                <h3>Property Categories</h3>
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
                                <ul class="blog_details_tag d-flex flex-wrap">
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

                            <div class="blog_details_right_header">
                                <div class="blog_state">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/blog_logo.jpg') }}" alt="logo"
                                            class="img-fluid w-100">
                                    </a>
                                    <p>Helping you Craft The <b>Best Houses.</b></p>
                                    <a class="read_btn" href="agencies_details.html">Read More<i
                                            class="fas fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
