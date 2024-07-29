@extends('layouts.app')
@section('title', 'Blog')
@section('contente')

    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>Blog's</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('blog.index') }}">Blog's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area pt_95 xs_pt_75 pb_120 xs_pb_100">
        <div class="container">
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
            <div class="row mt_50 wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-12">
                    <div id="pagination_area">
                        <nav aria-label="...">
                            {{ $blogs->links('vendor.pagination.custom') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
