<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mongetto - @yield('tilte') </title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <section class="dashboard">
        <div class="dashboard_sidebar">
            <div class="sidebar_menu_icon">
                <i class="fas fa-bars dash_bar_icon"></i>
                <i class="far fa-times dash_close_icon"></i>
            </div>

            <a class="dashboard_sidebar_logo" href="{{ route('admin.home.index') }}">
                {{-- <img src="{{ asset('assets/images/logo_1.png') }}" alt="MonGetto" class="img-fluid w-100"> --}}
                <h3 style="color: white">MonGetto.com</h3>
            </a>
            <div class="dashboard_sidebar_user">

                @if (Auth::user()->profile_image)
                    <div class="img">
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="dashboard"
                            class="img-fluid w-100">
                        {{-- <label for="profile_photo"><i class="far fa-camera"></i></label>
                        <input type="file" id="profile_photo" hidden> --}}
                    </div>
                @else
                    <div class="img">
                        <img src="{{ asset('assets/images/default_img.jpg') }}" alt="dashboard"
                            class="img-fluid w-100">
                        {{-- <label for="profile_photo"><i class="far fa-camera"></i></label>
                        <input type="file" id="profile_photo" hidden> --}}
                    </div>
                @endif
                <h3>{{ Auth::user()->prenom }} {{ Auth::user()->name }}</h3>
                <p>{{ Auth::user()->ville }}, {{ Auth::user()->pays }}</p>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul>
                    <li>
                        <a class="active" href="{{ route('admin.home.index') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_1.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            dashboard
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_2.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Profil
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('admin.propriete.index') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_3.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Propriété
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.pricing') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_4.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Pricing Plan
                        </a>
                    </li> --}}

                    <li>
                        <a href="{{ route('admin.propriete.liste') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_7.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                           Liste
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ route('blog.create') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_7.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Add Blog
                        </a>
                    </li> --}}


                    {{-- <li>
                        <a href="{{ route('admin.wishlist') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_6.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            favoris
                        </a>
                    </li>  --}}
{{-- 
                    <li>
                        <a href="{{ route('admin.review') }}">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_5.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Commentaires
                        </a>
                    </li> --}}

                    <li>
                        <a
                            href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>
                                <img src="{{ asset('assets/images/dashboard_icon_8.png') }}" alt="icon"
                                    class="img-fluid w-100">
                            </span>
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </div>
        @yield('contents')
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
