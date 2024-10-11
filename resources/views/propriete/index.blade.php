@extends('layouts.app')

@section('contente')

    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>property grid view</h1>
                            <ul class=" d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="#">property grid view</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="property_grid_view pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-duration="1.5s">
                <div class=" col-xl-11 col-lg-12">
                    <div class="banner_search">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Buy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Sell</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Rent</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <form action="#">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <label>Location</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Location</option>
                                                <option value="">Japan</option>
                                                <option value="">Korea</option>
                                                <option value="">Thailan</option>
                                                <option value="">Singapore</option>
                                                <option value="">Garmany</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Type</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Type</option>
                                                <option value="">Appartment</option>
                                                <option value="">House</option>
                                                <option value="">Villa</option>
                                                <option value="">Office</option>
                                                <option value="">Factory</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Price</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Price</option>
                                                <option value="">$1000 to $5000</option>
                                                <option value="">$6000 to $10000</option>
                                                <option value="">$11000 to $15000</option>
                                                <option value="">$16000 to $20000</option>
                                            </select>
                                        </li>
                                        <li>
                                            <input type="text" placeholder="Enter Keyword...">
                                        </li>
                                    </ul>
                                    <button class="common_btn banner_input_btn" type="submit">search</button>
                                    <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                    </div>
                                    <div class="adv_search_area">
                                        <div class="adv_search_close adv_search_close_1"><i class="fal fa-times"></i>
                                        </div>
                                        <h3>aminities</h3>
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                        laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt_15">
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Bedroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Barthroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Built Year</option>
                                                    <option value="">2015</option>
                                                    <option value="">2016</option>
                                                    <option value="">2017</option>
                                                    <option value="">2018</option>
                                                    <option value="">2019</option>
                                                    <option value="">2020</option>
                                                    <option value="">2021</option>
                                                    <option value="">2022</option>
                                                    <option value="">2024</option>
                                                    <option value="">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">built-up Area</option>
                                                    <option value="">Adana</option>
                                                    <option value="">Ankara</option>
                                                    <option value="">Antalya</option>
                                                    <option value="">Bursa</option>
                                                    <option value="">Bodrum</option>
                                                    <option value="">Gaziantep</option>
                                                    <option value="">İstanbul</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <form action="#">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <label>Location</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Location</option>
                                                <option value="">Japan</option>
                                                <option value="">Korea</option>
                                                <option value="">Thailan</option>
                                                <option value="">Singapore</option>
                                                <option value="">Garmany</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Type</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Type</option>
                                                <option value="">Appartment</option>
                                                <option value="">House</option>
                                                <option value="">Villa</option>
                                                <option value="">Office</option>
                                                <option value="">Factory</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Price</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Price</option>
                                                <option value="">$1000 to $5000</option>
                                                <option value="">$6000 to $10000</option>
                                                <option value="">$11000 to $15000</option>
                                                <option value="">$16000 to $20000</option>
                                            </select>
                                        </li>
                                        <li>
                                            <input type="text" placeholder="Enter Keyword...">
                                        </li>
                                    </ul>
                                    <button class="common_btn banner_input_btn" type="submit">search</button>
                                    <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                    </div>
                                    <div class="adv_search_area">
                                        <div class="adv_search_close adv_search_close_2"><i class="fal fa-times"></i>
                                        </div>
                                        <h3>aminities</h3>
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault22">
                                                    <label class="form-check-label" for="flexCheckDefault22">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault23">
                                                    <label class="form-check-label" for="flexCheckDefault23">
                                                        gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault24">
                                                    <label class="form-check-label" for="flexCheckDefault24">
                                                        laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault25">
                                                    <label class="form-check-label" for="flexCheckDefault25">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault26">
                                                    <label class="form-check-label" for="flexCheckDefault26">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault27">
                                                    <label class="form-check-label" for="flexCheckDefault27">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault28">
                                                    <label class="form-check-label" for="flexCheckDefault28">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault29">
                                                    <label class="form-check-label" for="flexCheckDefault29">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault30">
                                                    <label class="form-check-label" for="flexCheckDefault30">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault31">
                                                    <label class="form-check-label" for="flexCheckDefault31">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt_15">
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Bedroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Barthroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Built Year</option>
                                                    <option value="">2015</option>
                                                    <option value="">2016</option>
                                                    <option value="">2017</option>
                                                    <option value="">2018</option>
                                                    <option value="">2019</option>
                                                    <option value="">2020</option>
                                                    <option value="">2021</option>
                                                    <option value="">2022</option>
                                                    <option value="">2024</option>
                                                    <option value="">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">built-up Area</option>
                                                    <option value="">Adana</option>
                                                    <option value="">Ankara</option>
                                                    <option value="">Antalya</option>
                                                    <option value="">Bursa</option>
                                                    <option value="">Bodrum</option>
                                                    <option value="">Gaziantep</option>
                                                    <option value="">İstanbul</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <form action="#">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <label>Location</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Location</option>
                                                <option value="">Japan</option>
                                                <option value="">Korea</option>
                                                <option value="">Thailan</option>
                                                <option value="">Singapore</option>
                                                <option value="">Garmany</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Type</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Type</option>
                                                <option value="">Appartment</option>
                                                <option value="">House</option>
                                                <option value="">Villa</option>
                                                <option value="">Office</option>
                                                <option value="">Factory</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Price</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Price</option>
                                                <option value="">$1000 to $5000</option>
                                                <option value="">$6000 to $10000</option>
                                                <option value="">$11000 to $15000</option>
                                                <option value="">$16000 to $20000</option>
                                            </select>
                                        </li>
                                        <li>
                                            <input type="text" placeholder="Enter Keyword...">
                                        </li>
                                    </ul>
                                    <button class="common_btn banner_input_btn" type="submit">search</button>
                                    <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                    </div>
                                    <div class="adv_search_area">
                                        <div class="adv_search_close adv_search_close_3"><i class="fal fa-times"></i>
                                        </div>
                                        <h3>aminities</h3>
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault40">
                                                    <label class="form-check-label" for="flexCheckDefault40">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault41">
                                                    <label class="form-check-label" for="flexCheckDefault41">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault42">
                                                    <label class="form-check-label" for="flexCheckDefault42">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault43">
                                                    <label class="form-check-label" for="flexCheckDefault43">
                                                        gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault44">
                                                    <label class="form-check-label" for="flexCheckDefault44">
                                                        laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault45">
                                                    <label class="form-check-label" for="flexCheckDefault45">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault46">
                                                    <label class="form-check-label" for="flexCheckDefault46">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault47">
                                                    <label class="form-check-label" for="flexCheckDefault47">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault48">
                                                    <label class="form-check-label" for="flexCheckDefault48">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault49">
                                                    <label class="form-check-label" for="flexCheckDefault49">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault50">
                                                    <label class="form-check-label" for="flexCheckDefault50">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault51">
                                                    <label class="form-check-label" for="flexCheckDefault51">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt_15">
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Bedroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Barthroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Built Year</option>
                                                    <option value="">2015</option>
                                                    <option value="">2016</option>
                                                    <option value="">2017</option>
                                                    <option value="">2018</option>
                                                    <option value="">2019</option>
                                                    <option value="">2020</option>
                                                    <option value="">2021</option>
                                                    <option value="">2022</option>
                                                    <option value="">2024</option>
                                                    <option value="">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">built-up Area</option>
                                                    <option value="">Adana</option>
                                                    <option value="">Ankara</option>
                                                    <option value="">Antalya</option>
                                                    <option value="">Bursa</option>
                                                    <option value="">Bodrum</option>
                                                    <option value="">Gaziantep</option>
                                                    <option value="">İstanbul</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt_95 xs_mt_75">
                @foreach ($proprietes as $pro)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" single_property">
                            <div class="single_property_img">
                                @if ($pro->images && $pro->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $pro->images->first()->url) }}" alt="property"
                                        class="img-fluid w-100">
                                @else
                                    <img src="{{ asset('assets/images/property_1.jpg') }}" alt="img"
                                        class="img-fluid w-100">
                                @endif
                                <a class="feature_link" href="#">à louer</a>
                                <a class="feature_link feature" href="#">À la une</a>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class="item_title" href="#">
                                        KIEMDE MOHAMED
                                    </a>
                                    <p>
                                        <i class="fas fa-map-marker-alt">
                                        </i> {{ $pro->ville->name }} /
                                        {{ $pro->ville->pays->name }}
                                    </p>
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
                                <span class="property_price">{{ number_format($pro->loyers, 0, ',', ' ') }}
                                    FCFA</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        
        <div class="row mt_50 wow fadeInUp" data-wow-duration="1.5s">
            <div class="col-12">
                <div id="pagination_area">
                    <nav aria-label="...">
                        {{ $proprietes->links('vendor.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>

    </section>

@endsection
