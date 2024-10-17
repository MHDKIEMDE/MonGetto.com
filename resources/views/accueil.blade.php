@extends('layouts.app')

@section('title', 'Accueil')

@section('contente')
    <section class="banner_area" style="background: url(./assets/images/banner_bg.jpg);">
        <div class="container container_large">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-11 col-xxl-9">
                    <div class="banner_contant">
                        <div class="banner_text">
                            <h1 style="color: white">Building houses that feel like home - with us.</h1>
                            <p style="color: white">Through a combination of lectures, readings, and discussions, students
                                will gain a solid
                                foundation in educational psychology.</p>
                        </div>
                        <div class="banner_search">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Location</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Vendez</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Acheter</button>
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
                                                    <option value="">Choisir un lieu</option>
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
                                                    <option value="">Choisir le type</option>
                                                    <option value="">Appartment</option>
                                                    <option value="">House</option>
                                                    <option value="">Villa</option>
                                                    <option value="">Office</option>
                                                    <option value="">Factory</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label>Prix</label>
                                                <select class="select_2" name="state">
                                                    <option value="">Choisir le prix</option>
                                                    <option value="">10 000F a 20 000F</option>
                                                    <option value="">21 000f a 30 0000F</option>
                                                    <option value="">31 000 a 40 000F</option>
                                                    <option value="">41 000 a 50 000F</option>
                                                </select>
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Enter votre rech...">
                                            </li>
                                        </ul>
                                        <button class="common_btn banner_input_btn" type="submit">Validé</button>
                                        <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                        </div>
                                        <div class="adv_search_area">
                                            <div class="adv_search_close adv_search_close_1"><i class="fal fa-times"></i>
                                            </div>
                                            <h3>Equipement</h3>
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
            </div>
        </div>
    </section>

    <section class="about_area pt_120 xs_pt_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-sm-6 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="about_area_img_1">
                                <img src="assets/images/about_1.jpg" alt="img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="about_area_img_2 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="assets/images/about_2.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="about_area_img_3 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="assets/images/about_3.jpg" alt="img" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="about_text">
                        <div class="section_heading section_heading_left">
                            <h2>We help clients buy and Sell houses since 2001</h2>
                        </div>
                        <p>Through a combination of lectures, readings, and discussions, students will gain a solid
                            foundation in educational psychology With over $3 Billion in sales, due to our unparalleled
                            results, expertise and dedication.</p>
                        <ul class="d-flex flex-wrap pt_15">
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_1.png" alt="icon" class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Sell your home</h6>
                                    <span>Free Services</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_2.png" alt="icon" class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Buy a home</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_3.png" alt="icon" class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Free Appraisal</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_4.png" alt="icon" class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Free Photoshoot</h6>
                                    <span>Professional services</span>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('user.apropos') }}" class="common_btn">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="destination_area pt_115 xs_pt_110 pb_110 xs_pb_90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_50">
                        <h2>Explorer votre quatier</h2>
                    </div>
                </div>
            </div>
            <div class="row destination_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="{{ asset('assets/images/destination_1.jpg') }}" alt="img" class="img-fluid w-100">
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>New York</h5>
                                <p>04 Properties</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="property_area pt_115 xs_pt_95 pb_115 xs_pb_95">
        <div class="container">
            <div class="row justify-content-center text-align-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_25">
                        <h2>Consultez les dernières annonces</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($proprietes as $pro)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_property">
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
                                    <a class="item_title" href="{{ route('propriete.show', $pro->id) }}">
                                        KIEMDE MOHAMED
                                    </a>
                                    <p>
                                        <i class="fas fa-map-marker-alt">
                                        </i> {{ $pro->ville->name }} /
                                        {{ $pro->ville->pays->name }}
                                    </p>
                                    <ul class="list-unstyled d-flex flex-wrap">
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class="read_btn" href="{{ route('propriete.show', $pro->id) }}">En savoir plus<i
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
                <div class="text-center mt_50 wow fadeInUp" data-wow-duration="1.5s">
                    <a class="common_btn" href="{{ route('propriete.index') }}">Voir Plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="agent_area pt_115 xs_pt_95 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_25">
                        <h2>Rencontrer les bailleurs </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_agent">
                            <div class="single_agent_img">

                                @if ($user->images && $user->images->isNotEmpty())
                                    <a href="{{ route('blog.show', $user->id) }}" class="blog_img">
                                        <img src="{{ asset('storage/' . $user->images->first()->url) }}" alt="img"
                                            class="img-fluid w-100">
                                    </a>
                                @else
                                    <div class="img">
                                        <img src="{{ asset('assets/images/default_img.jpg') }}" alt="img-fluid w-100"
                                            class="img-fluid w-100">
                                    </div>
                                @endif

                                <div class="single_agent_overly">
                                    <p>{{ $user->proprieteCount }} 4 Proprietes</p>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="agent_text">
                                <div class="agent_name">
                                    <a class="item_title" href="{{ route('admin.user.show', $user->id) }}">

                                        {{ $user->prenom }} {{ $user->name }}</a>
                                    <span> {{ $user->status }} </span>
                                </div>
                                <ul class="agent_contact">
                                    <li><a href="callto:1234567890"><i class="fas fa-phone-alt"></i> {{ $user->number }}
                                        </a>
                                    </li>
                                    <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i>
                                            {{ $user->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="find_state" style="background: url(./assets/images/find_state.jpg);">
        <div id="vbg12" data-vbg-loop="true" data-vbg="https://youtu.be/tGntcmNJWPI?si=phoJuQEhsIKRtJxF">
        </div>
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <div class="find_state_text">
                        <h2>Residential</h2>
                        <a href="#">Découvrez le projet<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area pt_115 xs_pt_95 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_15">
                        <h2>Dernières nouvelles et articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_blog">
                            @if ($blog->images && $blog->images->isNotEmpty())
                                <a href="{{ route('blog.show', $blog->id) }}" class="blog_img">
                                    <img src="{{ asset('storage/' . $blog->images->first()->url) }}" alt="img"
                                        class="img-fluid w-100">
                                </a>
                            @else
                                <a href="{{ route('blog.show', $blog->id) }}" class="blog_img">
                                    <img src="assets/images/blog_1.jpg" alt="img" class="img-fluid w-100">

                                </a>
                            @endif

                            <div class="blog_text">
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span>

                                            <img src="assets/images/calender.png" alt="icon"
                                                class="img-fluid w-100"></span>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}
                                    </li>
                                    <li>
                                        <span><img src="assets/images/massage.png" alt="icon"
                                                class="img-fluid w-100"></span>
                                        3 Commentaires
                                    </li>
                                </ul>
                                <a class="item_title" href="{{ route('blog.show', $blog->id) }}">
                                    {{ $blog->name }}</a>
                                <a class="read_btn" href="{{ route('blog.show', $blog->id) }}">En savoir plus<i
                                        class="fas fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
