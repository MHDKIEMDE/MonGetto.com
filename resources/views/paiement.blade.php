@extends('layouts.app')
@section('contente')

    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Login</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-6 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class=" payment_area">
                        <h5>how would you like to pay?</h5>
                        <div class="row">
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_1.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_2.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_3.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_4.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_5.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_6.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_7.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_8.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-4 col-6 col-md-6">
                                <a href="#" class="single_payment" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="assets/images/pay_icon_9.png" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-5 wow fadeInRight" data-wow-duration="1.5s">
                    <div class=" single_pricing mt-0">
                        <h5>Basic</h5>
                        <p>Basic listing submission, active for 30 days</p>
                        <h2>$259.00</h2>
                        <ul>
                            <li>All Operating Supported</li>
                            <li>20 Property Listings</li>
                            <li>30 Days Availability</li>
                            <li>Feature Properties</li>
                            <li>24/7 Full support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="payment_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="pay_modal_info">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora cum optio
                                cumque rerum dolor impedit exercitationem? Eveniet suscipit repellat, quae natus hic
                                assumenda.</p>
                            <ul>
                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                <li>Dolor sit amet consectetur adipisicing elit tempora cum </li>
                            </ul>
                            <form>
                                <input type="text" placeholder="Enteer Something">
                                <textarea rows="4" placeholder="Enter Something"></textarea>
                                <select class="select_js">
                                    <option value="">Select Something</option>
                                    <option value="">bangladesh</option>
                                    <option value="">nepal</option>
                                    <option value="">japan</option>
                                    <option value="">korea</option>
                                    <option value="">thailand</option>
                                </select>
                                <div class="payment_btn_area">
                                    <button type="button" class="btn btn-danger common_btn"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success common_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
