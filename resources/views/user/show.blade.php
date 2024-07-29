@extends('layouts.app')

@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Agent Profile</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.agencies') }}">Agent Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="agent_details pt_120 xs_pt_100 pb_120 xs_pb_100">

                <div class="container">
                    <div class="agent_details_area">
                        <div class="row">
                            <div class="col-xl-4 col-md-7 col-lg-5 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="agent_details_area_img">

                                    <img src="{{ asset('assets/images/default_img.jpg') }}" alt="agent"
                                        class="img-fluid w-100">
                                    <div class="agent_details_img_overly">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-12 col-lg-7 wow fadeInRight" data-wow-duration="1.5s">
                                <div class="agent_details_area_text">
                                    <h2>Hanson Deck</h2>
                                    <span>Sales Executive</span>
                                    <p><b>Hello! This is Hanson Deck.</b> Morbi a nunc, et rutrum libero. In posuere velit
                                        sed
                                        velit
                                        maximus eu enenatis sem rhoncus. Praesent quam augue, egestas vitae tempus non
                                        posuere
                                        almiqui ex Aenean hendrerit dui et diam gravida, in ultricies lorem mollis.</p>
                                    <h5>Personalized Information</h5>
                                    <ul class="agent_info d-flex flex-wrap">
                                        <li>Current Listings : 6</li>
                                        <li>Experience Since : 2015</li>
                                        <li>Locales : Oakland</li>
                                        <li>Language : English</li>
                                    </ul>
                                    <ul class="agent_social_media d-flex flex-wrap">
                                        <li><a class="common_btn" href="#"><i class="fas fa-envelope"></i>Send
                                                Email</a>
                                        </li>
                                        <li><a class="common_btn" href="#"><i class="fas fa-phone-alt"></i>(+88) 587 -
                                                5643</a>
                                        </li>
                                        <li><a class="common_btn" href="#"><i class="fab fa-whatsapp"></i>WhatsApp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent_property_list pt_115 xs_pt_95">
                        <div class="row align-items-end">
                            <div class="col-xl-6 col-sm-6 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="section_heading">
                                    <h2>Propriété du courtier</h2>
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-6 wow fadeInRight" data-wow-duration="1.5s">
                                <div class="agent_property_quantity">
                                    <p>6 Properties </p>
                                </div>
                            </div>

                        </div>

                        <div class="row mt_25">
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_1.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for rent</a>
                                        <a class="feature_link feature" href="#">Featured</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title" href="#">Hermosa Casa al
                                                Norte</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    8 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    6 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    2400 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$12,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_2.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for sale</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title " href="#">Leisure
                                                Beautiful
                                                Health</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    1500 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$8,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_3.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for rent</a>
                                        <a class="feature_link feature" href="#">Featured</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title" href="#">South Side
                                                Garden
                                                House</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    1500 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$29,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_4.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for sale</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title " href="#">Stunning
                                                mansion in
                                                Reno</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    1500 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$24,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_5.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for rent</a>
                                        <a class="feature_link feature" href="#">Featured</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title" href="#">Beautiful Condo
                                                in
                                                London</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    1500 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$9,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_property">
                                    <div class="single_property_img">
                                        <img src="{{ asset('assets/images/property_6.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                        <a class="feature_link" href="#">for rent</a>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="single_property_text">
                                        <div class="single_property_top">
                                            <a class="item_title" href="#">Kolte Patil
                                                Life
                                                Republic</a>
                                            <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                            <ul class="d-flex flex-wrap">
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                            class="img-fluid w-100"></span>
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('assets/images/squre.png') }}"
                                                            alt="img" class="img-fluid w-100"></span>
                                                    1500 Sq Ft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                            <a class="read_btn" href="#">More Details<i
                                                    class="fas fa-arrow-right"></i></a>
                                            <p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </p>
                                        </div>
                                        <span class="property_price">$11,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt_50 wow fadeInUp" data-wow-duration="1.5s">
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
                </div>
        </section>
    </section>
@endsection
