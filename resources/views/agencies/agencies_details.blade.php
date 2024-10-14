@extends('layouts.app')

@section('title', 'Agent')

@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Agencies Details</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.agencies_details') }}">Agencies Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agencies_details pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="agencies_details_area">
                        <div class="agencies_details_img">
                            <img src="{{ asset('assets/images/blog_details_1_img.jpg') }}" alt="Agencies"
                                class="img-fluid w-100">
                        </div>
                        <div class="agencies_details_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="{{ asset('assets/images/agencies_logo_2.jpg') }}" alt="Agencies"
                                    class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h2>Realestate Company</h2>
                                <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                            </div>
                        </div>
                        <div class="agencies_details_text">
                            <h3>Contact Infomation</h3>
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
                            <h3>About Lorem House</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus leo, blandit vitae
                                diam a, vestibulum viverra nisi. Vestibulum ullamcorper velit eget mattis aliquam. Proin
                                dapibus luctus pulvinar. Integer et libero ut purus bibendum gravida non ac tellus.
                                Proin sed tellus porttitor, varius mauris vitae, tincidunt augue. Sed consectetur magna
                                elit, sit amet faucibus tortor sodales vitae. Maecenas quis arcu est. Nam sit amet neque
                                vestibulum, fringilla elit sit amet, volutpat nunc.</p>
                            <p>Aliquam non lorem consequat, luctus dui et, auctor nisi. Aenean placerat sapien at augue
                                lacinia, non semper urna tempor. Mauris sit amet elit orci.</p>
                            <h3>Location</h3>
                            <div class="agent_map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25931.28479282575!2d139.65360479183258!3d35.66689057521135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2sShibuya%20City%2C%20Tokyo%2C%20Japan!5e0!3m2!1sen!2sbd!4v1702236153749!5m2!1sen!2sbd"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="row mt_115 xs_mt_95">

                            <ul class="nav nav-pills agencies_tabs" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Properties</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Agents</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-6">
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
                                                        <a class="item_title"
                                                            href="{{ route('user.property_details') }}">Hermosa Casa
                                                            al Norte</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                8 Beds
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                6 Baths
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/squre.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                2400 Sq Ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                        <div class="col-md-6">
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
                                                        <a class="item_title "
                                                            href="{{ route('user.property_details') }}">Leisure
                                                            Beautiful Health</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
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
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                        <div class="col-md-6">
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
                                                        <a class="item_title"
                                                            href="{{ route('user.property_details') }}">South Side
                                                            Garden House</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                5 Beds
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                4 Baths
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/squre.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                2300 Sq Ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                        <div class="col-md-6">
                                            <div class="single_property">
                                                <div class="single_property_img">
                                                    <img src="assets/images/property_4.jpg" alt="img"
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
                                                        <a class="item_title "
                                                            href="{{ route('user.property_details') }}">Stunning
                                                            mansion in Reno</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                6 Beds
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                4 Baths
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/squre.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                2500 Sq Ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                        <div class="col-md-6">
                                            <div class="single_property">
                                                <div class="single_property_img">
                                                    <img src="assets/images/property_5.jpg" alt="img"
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
                                                        <a class="item_title"
                                                            href="{{ route('user.property_details') }}">Beautiful
                                                            Condo in London</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                4 Beds
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                3 Baths
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/squre.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                2200 Sq Ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                        <div class="col-md-6">
                                            <div class="single_property">
                                                <div class="single_property_img">
                                                    <img src="assets/images/property_6.jpg" alt="img"
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
                                                        <a class="item_title"
                                                            href="{{ route('user.property_details') }}">Kolte Patil
                                                            Life Republic</a>
                                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                                            London
                                                        </p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bad.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                3 Beds
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/bathtab.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                3 Baths
                                                            </li>
                                                            <li>
                                                                <span><img src="{{ asset('assets/images/squre.png') }}"
                                                                        alt="img" class="img-fluid w-100"></span>
                                                                2100 Sq Ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="single_property_bottom d-flex flex-wrap justify-content-between">
                                                        <a class="read_btn"
                                                            href="{{ route('user.property_details') }}">More Details<i
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
                                    <div class="row mt_50">
                                        <div class="col-12">
                                            <div id="pagination_area">
                                                <nav aria-label="...">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link" href="#"><i
                                                                    class="far fa-angle-double-left"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li class="page-item"><a class="page-link active"
                                                                href="#">01</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">02</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">03</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#"><i
                                                                    class="far fa-angle-double-right"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="{{ asset('assets/images/agent_1.jpg') }}" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>4 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Theodore
                                                            Handle</a>
                                                        <span>Salesperson</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li><a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li><a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="assets/images/agent_2.jpg" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>03 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Nathaneal
                                                            Down</a>
                                                        <span>Real Estate Broker</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li>
                                                            <a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="assets/images/agent_3.jpg" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>6 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Hugh
                                                            Saturation</a>
                                                        <span>Buying Agent</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li><a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li><a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="assets/images/agent_4.jpg" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>10 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Lance Bogrol</a>
                                                        <span>Sales Executive</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li><a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li><a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="assets/images/agent_3.jpg" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>6 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Hugh
                                                            Saturation</a>
                                                        <span>Buying Agent</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li><a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li><a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="single_agent">
                                                <div class="single_agent_img">
                                                    <img src="{{ asset('assets/images/agent_1.jpg') }}" alt="img"
                                                        class="img-fluid w-100">
                                                    <div class="single_agent_overly">
                                                        <p>4 listings</p>
                                                        <ul class="d-flex flex-wrap">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="agent_text">
                                                    <div class="agent_name">
                                                        <a class="item_title"
                                                            href="{{ route('user.agent_details') }}">Theodore
                                                            Handle</a>
                                                        <span>Salesperson</span>
                                                    </div>
                                                    <ul class="agent_contact">
                                                        <li><a href="callto:1234567890"><i
                                                                    class="fas fa-phone-alt"></i>(+88) 587 -
                                                                5643</a>
                                                        </li>
                                                        <li><a href="mailto:example@gmail.com"><i
                                                                    class="fas fa-envelope"></i>example@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <img src="{{ asset('assets/images/popular_blog_1.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="{{ asset('assets/images/calender.png') }}" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 23, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.property_details') }}">The Best
                                            Delicious Coffee
                                            Shop In Bangkok
                                            China.</a>
                                    </div>
                                </div>
                                <div class="popular_blog d-flex flex-wrap">
                                    <div class="popular_blog_img">
                                        <img src="{{ asset('assets/images/popular_blog_2.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="{{ asset('assets/images/calender.png') }}" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 24, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.property_details') }}">Luxury
                                            top-floor properties
                                            available for
                                            purchase.</a>
                                    </div>
                                </div>
                                <div class="popular_blog d-flex flex-wrap">
                                    <div class="popular_blog_img">
                                        <img src="{{ asset('assets/images/popular_blog_3.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="popular_blog_text">
                                        <p>
                                            <span><img src="{{ asset('assets/images/calender.png') }}" alt="icon"
                                                    class="img-fluid w-100"></span>
                                            March 25, 2024
                                        </p>
                                        <a class="item_title" href="{{ route('user.property_details') }}">Skills that you
                                            can learn the
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
