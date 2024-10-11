@extends('layouts.app')

@section('contente')

    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>checkout</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.checkout') }}">checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout_area pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="checkout_left">
                        <h4 class="checkout_heading">Billing Details</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>First name *</label>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>Email address *</label>
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>Phone *</label>
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>Company name (optional)</label>
                                        <input type="text" placeholder="Company name (optional)">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>Country / Region *</label>
                                        <select class="select_2" name="state">
                                            <option value="">Select Counrty</option>
                                            <option value="">Bangladesh</option>
                                            <option value="">Korea</option>
                                            <option value="">Thailand</option>
                                            <option value="">russia</option>
                                            <option value="">canada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>Town / City *</label>
                                        <select class="select_2" name="state">
                                            <option value="">Select City</option>
                                            <option value="">Bangladesh</option>
                                            <option value="">Korea</option>
                                            <option value="">Thailand</option>
                                            <option value="">russia</option>
                                            <option value="">canada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>State *</label>
                                        <select class="select_2" name="state">
                                            <option value="">Selecr State</option>
                                            <option value="">dhaka</option>
                                            <option value="">seoul</option>
                                            <option value="">bangkok</option>
                                            <option value="">mosque</option>
                                            <option value="">torento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout_left_input">
                                        <label>ZIP Code *</label>
                                        <input type="text" placeholder="ZIP Code">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout_left_input">
                                        <label>Street address *</label>
                                        <input type="text" placeholder="House number and street name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout_left_input">
                                        <label>Adinional Info</label>
                                        <textarea rows="5" placeholder="Type here"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sticky_sidebar">
                        <div class="checkout_right">
                            <div class="reservation_details">
                                <h4>Booking Details</h4>
                                <ul>
                                    <li>
                                        <p>Date</p>
                                        <span>24 March 2024</span>
                                    </li>
                                    <li>
                                        <p>Time</p>
                                        <span>11am 12am</span>
                                    </li>
                                    <li>
                                        <p>Form</p>
                                        <span>14Jun</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="reservation_details mt_40">
                                <h4>Pricing Details</h4>
                                <ul>
                                    <li>
                                        <p>Dining</p>
                                        <span>$150</span>
                                    </li>
                                    <li>
                                        <p>Reservation</p>
                                        <span>$60</span>
                                    </li>
                                    <li>
                                        <p>Tax</p>
                                        <span>$53</span>
                                    </li>
                                    <li>
                                        <p>Total Cost</p>
                                        <span>$263</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('user.payment') }}" class="common_btn">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
