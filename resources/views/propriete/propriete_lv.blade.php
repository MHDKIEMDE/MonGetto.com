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
                            <h1>property list view</h1>
                            <ul class=" d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="#">property list view</a></li>
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
                    PROPERTY LIST VIEW START
                ==============================-->
    <section class="property_list_view pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-7 order-2 order-xl-0">
                    <div class="property_sidebar sticky_sidebar">
                        <div class="sidebar_search sidebar_wizerd">
                            <h3>search</h3>
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Type</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Type</option>
                                <option value="">Sell</option>
                                <option value="">Rent</option>
                                <option value="">Buy</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Location</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Location</option>
                                <option value="">Japan</option>
                                <option value="">Kanada</option>
                                <option value="">Singapore</option>
                                <option value="">London</option>
                                <option value="">Korea</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Category</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Category</option>
                                <option value="">House</option>
                                <option value="">Lobby</option>
                                <option value="">Office</option>
                                <option value="">Restaurent</option>
                                <option value="">Resort</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Price</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Price</option>
                                <option value="">$1000 to $5000</option>
                                <option value="">$6000 to $10000</option>
                                <option value="">$11000 to $15000</option>
                                <option value="">$16000 to $20000</option>
                            </select>
                        </div>
                        <div class="sidebar_amenities sidebar_wizerd ">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Amenities
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        Gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                        Laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="common_btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 property_sm_margin">
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_1.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">Hermosa Casa al Norte</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                    </div>
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_2.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">Leisure Beautiful Health</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                    </div>
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_3.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">South Side Garden House</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                                    <span class="property_price">$17,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_4.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">Stunning mansion in Reno</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                                    <span class="property_price">$31,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_5.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">Beautiful Condo in London</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="assets/images/property_6.jpg" alt="img" class="img-fluid w-100">
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="property_details.html">Kolte Patil Life Republic</a>
                                        <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                6 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="property_details.html">More Details<i
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
                                    <span class="property_price">$45,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt_50 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" col-12">
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
        </div>
    </section>
@endsection
