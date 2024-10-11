@extends('layouts.app')

@section('title', 'About us')

@section('contente')
    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>About us</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.apropos') }}">A propos</a></li>
                            </ul>
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
                                <img src="{{ asset('assets/images/about_1.jpg') }}" alt="img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="about_area_img_2 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="{{ asset('assets/images/about_2.jpg') }}" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="about_area_img_3 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="{{ asset('assets/images/about_3.jpg') }}" alt="img" class="img-fluid w-100">
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
                                    <img src="{{ asset('assets/images/about_icon_1.png') }}" alt="icon"
                                        class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Sell your home</h6>
                                    <span>Free Services</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="{{ asset('assets/images/about_icon_2.png') }}" alt="icon"
                                        class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Buy a home</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="{{ asset('assets/images/about_icon_3.png') }}" alt="icon"
                                        class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Free Appraisal</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="{{ asset('assets/images/about_icon_3.png') }}" alt="icon"
                                        class="img-fluid w-100">
                                </div>
                                <div class="about_description">
                                    <h6>Free Photoshoot</h6>
                                    <span>Professional services</span>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="common_btn">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="amenities_area mt_120 xs_mt_100 pt_115 xs_pt_95 pb_110 xs_pb_90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9 col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_50">
                        <h2>Discover your ideal home based on amenities</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <ul class="single_amenites d-flex flex-wrap justify-content-center">
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_1.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Smart TV
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_4.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Swimming Pool
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_3.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Elevator
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_4.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Walk In Closets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_5.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Solar Panel
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_11.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                CC Camera
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_6.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Air Conditioner
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_7.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Fireplace
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_12.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Garage
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_8.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Fireplace
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_10.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Garden
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><img src="{{ asset('assets/images/amenities_img_9.png') }}" alt="img"
                                        class="img-fluid w-100"></span>
                                Jacuzzi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <div class="amenities_area_btn mt_50">
                        <a class="common_btn_2" href="#">prowse property<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agent_area pt_115 xs_pt_95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_25">
                        <h2>Meet the Realty Professionals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_agent">
                            <div class="single_agent_img">

                                <img src="assets/images/agent_1.jpg" alt="img" class="img-fluid w-100">

                                <div class="single_agent_overly">
                                    <p>{{ $user->propriete_count }} Proprietes</p>
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
                                    <li><a href="callto:07443112"><i class="fas fa-phone-alt"></i>
                                            {{ $user->number }}
                                        </a>
                                    </li>
                                    <li><a href="mailto:mongetto@gmail.com"><i class="fas fa-envelope"></i>
                                            {{ $user->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonial pt_115 xs_pt_95 pb_120 xs_pb_100 mt_120 xs_mt_100">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-xxl-4 col-lg-5 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="section_heading section_heading_left">
                        <h2>Feedback From Satisfied Customers.</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <p class="client_feedback_text_right">Client Feedback</p>
                </div>
            </div>
            <div class="row mt_40 slider-for">
                <div class="col-12">
                    <div class="testimonial_item">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="testimonial_item_tetle">
                                    <h4>Douglas Lyphe</h4>
                                    <p>Operations Manager - Static Mania</p>
                                </div>
                            </div>
                            <div class="col-lg-8 wow fadeInRight" data-wow-duration="1.5s">
                                <div class="testimonial_description">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam amet
                                        impedit ab odit. Omnis doloribus libero obcaecati, nihil aliquam perspiciatis
                                        facilis deleniti reprehenderit velit voluptate amet ab hic nesciunt ipsa
                                        delectus recusandae provident? Deleniti minus mollitia provident quo dolore?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="testimonial_item">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="testimonial_item_tetle">
                                    <h4>Douglas Lyphe</h4>
                                    <p>Operations Manager - Static Mania</p>
                                </div>
                            </div>
                            <div class="col-lg-8 wow fadeInRight" data-wow-duration="1.5s">
                                <div class="testimonial_description">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam amet
                                        impedit ab odit. Omnis doloribus libero obcaecati, nihil aliquam perspiciatis
                                        facilis deleniti reprehenderit velit voluptate amet ab hic nesciunt ipsa
                                        delectus recusandae provident? Deleniti minus mollitia provident quo dolore?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="testimonial_item">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="testimonial_item_tetle">
                                    <h4>Douglas Lyphe</h4>
                                    <p>Operations Manager - Static Mania</p>
                                </div>
                            </div>
                            <div class="col-lg-8 wow fadeInRight" data-wow-duration="1.5s">
                                <div class="testimonial_description">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam amet
                                        impedit ab odit. Omnis doloribus libero obcaecati, nihil aliquam perspiciatis
                                        facilis deleniti reprehenderit velit voluptate amet ab hic nesciunt ipsa
                                        delectus recusandae provident? Deleniti minus mollitia provident quo dolore?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none d-lg-block wow fadeInLeft" data-wow-duration="1.5s">
                <div class="col-xl-3">
                    <div class="testimonial_img_area">
                        <div class="row slider-nav">
                            <div class="col-xl-4">
                                <div class="testimonial_img_item">
                                    <img src="{{ asset('assets/images/testimonial_img_1.png') }}" alt="testimonail"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="testimonial_img_item">
                                    <img src="{{ asset('assets/images/testimonial_img_2.png') }}" alt="testimonail"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="testimonial_img_item">
                                    <img src="{{ asset('assets/images/testimonial_img_3.png') }}" alt="testimonail"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="testimonial_img_item">
                                    <img src="{{ asset('assets/images/testimonial_img_4.png') }}" alt="testimonail"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_area pt_115 xs_pt_95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_15">
                        <h2>Latest News & Articles</h2>
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
                                    <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="img"
                                        class="img-fluid w-100">
                                </a>
                            @endif
                            <div class="blog_text">

                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span><img src="{{ asset('assets/images/calender.png') }}" alt="icon"
                                                class="img-fluid w-100"></span>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('assets/images/massage.png') }}" alt="icon"
                                                class="img-fluid w-100">
                                        </span>
                                        3 Comments
                                    </li>
                                </ul>
                                <a class="item_title" href="{{ route('blog.show', $blog->id) }}">{{ $blog->name }}</a>
                                <a class="read_btn" href="{{ route('blog.show', $blog->id) }}">En savoir plus
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="partner_area pt_60 pb_60">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="marquee_animi">
                        <ul class="single_partner">
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_1.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_10.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_3.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_4.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_5.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_6.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_7.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_8.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_9.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                            <li><a href="{{ route('user.agencies_details') }}"><img
                                        src="{{ asset('assets/images/partner_10.png') }}" alt="img"
                                        class="img-fluid w-100"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
