@extends('layouts.app')

@section('titre', 'Contact')

@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif˝
                            <h1>Contact Us</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_area pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-4 col-lg-5 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="contact_address">
                        <h4>Get In Touch</h4>
                        <ul>
                            <li>
                                <span><img src="{{ asset('assets/images/location.png') }}" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Office address</p>
                                    <a class="item_title" href="#">New York, NY 10128, United States</a>
                                </div>
                            </li>
                            <li>
                                <span><img src="{{ asset('assets/images/call.png') }}" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Request a call back</p>
                                    <a class="item_title" href="#">+(088) 777 548 - 5643</a>
                                </div>
                            </li>
                            <li>
                                <span><img src="{{ asset('assets/images/massage_3.png') }}" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Email with us</p>
                                    <a class="item_title" href="#">example@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-7 wow fadeInRight" data-wow-duration="1.5s">
                        <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="text" name="name" id="name"  placeholder="Your Name">
                                    <span class="contact_input_icon">
                                        <img src="{{ asset('assets/images/user_icon_3.png') }}" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="email" name="email" id="email" placeholder="Entre votre Email">
                                    <span class="contact_input_icon">
                                        <img src="{{ asset('assets/images/massage_4.png') }}" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="text" name="number" id="number" placeholder="Entre votre Numero">
                                    <span class="contact_input_icon">
                                        <img src="{{ asset('assets/images/call_2.png') }}" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="contact_input">
                                    <textarea rows="6" name="message" id="message" placeholder="Write Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_input">
                                    <button class="common_btn">Send Message</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="contact_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124715.59322427757!2d-1.619244965112921!3d12.358647353802702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e95ecceaa44cd%3A0x799f67799c743b8b!2sOuagadougou!5e0!3m2!1sfr!2sbf!4v1720526981352!5m2!1sfr!2sbf"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
