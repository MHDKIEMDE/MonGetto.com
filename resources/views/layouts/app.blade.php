<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonGetto - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll_button.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.simple-bar-graph.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container container_large">
            <a class="navbar-brand" href="{{ route('user.home') }}">
                <img src="{{ asset('assets/images/logo_2.png') }}" alt="MaxLand" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars bar_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.apropos') }}">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('propriete.index') }}">Propriété</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="{{ route('user.agencies') }}">Agencies</a></li>
                            <li><a href="{{ route('user.agencies_details') }}">Agencies Details</a></li>
                            <li><a href="{{ route('user.agent') }}">Agent</a></li>
                            <li><a href="{{ route('user.agent_details') }}">Agent Details</a></li>
                            <li><a href="{{ route('user.pricing') }}">pricing plan</a></li>
                            <li><a href="{{ route('user.checkout') }}">checkout</a></li>
                            <li><a href="{{ route('user.paiement') }}">paiement</a></li>
                            <li><a href="{{ route('user.error') }}">error</a></li>
                            <li><a href="{{ route('user.faq') }}">FAQ's</a></li>
                            <li><a class="active" href="{{ route('login') }}">sign in</a></li>
                            <li><a href="{{ route('register') }}">sign up</a></li>
                            <li><a href="{{ route('user.forgot_password') }}">forgot password</a></li>
                            <li><a href="{{ route('user.privacy_policy') }}">privacy policy</a></li>
                            <li><a href="{{ route('user.pricing') }}">terms and condition</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.create') }}">contact</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        <ul class="menu_right d-flex align-items-center">
                            @auth
                                <li>
                                    <a class="user_icon" href="{{ route('admin.user.index') }}">
                                        <span>
                                            <img src="{{ asset('assets/images/user_icon_3.png') }}" alt="user"
                                                class="img-fluid w-100">
                                        </span>
                                        {{ auth()->user()->name }}
                                    </a>
                                </li>
                                <li class="manu_btn">
                                    <a class="common_btn" href="{{ route('admin.propriete.create') }}">Add Listing</a>
                                </li>
                            @else
                                <li>
                                    <a class="user_icon" href="{{ route('login') }}">
                                        <span>
                                            <img src="{{ asset('assets/images/user_icon_3.png') }}" alt="user"
                                                class="img-fluid w-100">
                                        </span>
                                        CONNEXION
                                    </a>
                                </li>
                            @endauth
                            <li>
                                <div class="toggol_bar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">
                                    <span class="toggol_bar_1"></span>
                                    <span class="toggol_bar_2"></span>
                                    <span class="toggol_bar_1"></span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                @endif
            </div>
        </div>
    </nav>

    <div class="menu_offcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
        style="background: url(assets/images/offcanvas_bg.jpg);">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="far fa-times"></i></button>
        <div class="offcanvas-body">
            <a class="offcanvas_logo" href="{{ asset('/') }}">
                <img src="{{ asset('assets/images/logo_1.png') }}" alt="MaxLand" class="img-fluid w-100">
            </a>
            <p class="short_description">Through a combination of lectures, readings, and discussions, students will
                gain.</p>
            {{--                 
            <div class="offcanvas_blog">
                <h3>Featured Listings</h3>
                @foreach ($proprietes as $pro)
                    <ul>
                        <li>
                            <div class="img">
                                @if ($pro->images && $pro->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $pro->images->first()->url) }}" alt="property"
                                        class="img-fluid w-100">
                                @else
                                    <img src="{{ asset('assets/images/offcanvas_img_3.jpg') }}" alt="blog"
                                        class="img-fluid w-100">
                                @endif
                            </div>
                            <div class="text">
                                <p><i class="far fa-clock"></i>
                                    {{ \Carbon\Carbon::parse($pro->created_at)->format('d F Y') }}</p>
                                <a class="title" href="#">{{ $pro->ville->name }} /
                                    {{ $pro->ville->pays->name }}</a>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div> --}}

            <div class="offcanvas_contact">
                <h3>contact information</h3>
                <a class="call" href="callto:07443112">+(226) 07443112</a>
                <a class="mail" href="mailto:mkiemde00@gmail.com">mkiemde00@gmail.com</a>
                <ul class="d-flex flex-wrap">
                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('contente')

    <footer class="footer">
        <div class="container container_large">
            <div class="row">
                <div class="col-xl-7">
                    <div class="footer_left pt_100 pb_80">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-sm-10 col-md-4 wow fadeInLeft" data-wow-duration="2s">
                                <div class="footer_description">
                                    <a class="footer_logo" href="{{ route('user.home') }}">
                                        <img src="{{ asset('assets/images/footer_logo.png') }}" alt="logo"
                                            class="img-fluid w-100">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Aenean quis orci sit amet
                                        odio maximus sagittis et eu odio.</p>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1.5s">
                                <div class="footer_link">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="{{ route('user.home') }}">Home One</a></li>
                                        <li><a href="{{ route('user.proprietes_rs') }}">Properties Right</a></li>
                                        <li><a href="{{ route('user.propriete_l') }}">Properties List</a></li>
                                        <li><a href="{{ route('propriete.index') }}">Property Details</a></li>
                                        <li><a href="{{ route('user.agent') }}">Agents Listing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s">
                                <div class="footer_link">
                                    <h4>Important Link</h4>
                                    <ul>
                                        <li><a href="{{ route('admin.home.index') }}">Dashboard</a></li>
                                        <li><a href="{{ route('admin.wishlist') }}">Wishlist</a></li>
                                        <li><a href="{{ route('admin.home.index') }}">Change Password</a></li>
                                        <li><a href="{{ route('user.apropos') }}">About Us</a></li>
                                        <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="footer_right">
                        <h4>Contactez-nous</h4>
                        <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer_form_input">
                                        <input type="text" name="name" id="name"
                                            placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer_form_input">
                                        <input type="text" name="last_name" id="last_name"
                                            placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer_form_input">
                                        <input type="email" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer_form_input">
                                        <input type="text" name="number" id="number"
                                            placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="footer_form_input">
                                        <textarea rows="2" name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn footer_btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="copy_right wow fadeInUp" data-wow-duration="1.5s">
            <div class="container container_large">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="copyright_area d-flex flex-wrap justify-content-between">
                            <p>© 2024 MonGetto.com Tous droits réservés</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="{{ route('user.privacy_policy') }}">Politique de confidentialité </a>
                                </li>
                                <li><a href="{{ route('user.pricing') }}">Conditions d'utilisation </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!--jquery library js-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('assets/js/Font-Awesome.js') }}"></script>
    <!--nice-select js-->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!--select-2 js-->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--marquee js-->
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <!--YTPlayer js-->
    <script src="{{ asset('assets/js/jquery.youtube-background.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!--animated barfiller js-->
    <script src="{{ asset('assets/js/animated_barfiller.js') }}"></script>
    <!--simple-bar-graph js-->
    <script src="{{ asset('assets/js/jquery.simple-bar-graph.min.js') }}"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('assets/js/sticky_sidebar.js') }}"></script>
    <!--summernote js-->
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <!--scroll button js-->
    <script src="{{ asset('assets/js/scroll_button.js') }}"></script>
    <!--main/custom js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
