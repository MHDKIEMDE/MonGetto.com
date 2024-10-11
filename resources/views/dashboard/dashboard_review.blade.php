@extends('dashboard.layouts.appAdmin')
@section('tilte')
    Reviews
@endsection
@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Reviews</h2>
        @foreach ($contacts as $contact)
        <div class="dashboard_reviews wow fadeInUp" data-wow-duration="1.5s">
            <div class="single_review">
                <div class="single_review_img">
                    <img src="{{ asset('assets/images/comment_1.png') }}" alt="img" class="img-fluid w-100">
                </div>
                <div class="single_review_text">
                    <h3>
                        <a href="#">{{ $contact->last_name }}</a>
                        <span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </h3>
                    <h6>{{ \Carbon\Carbon::parse($contact->created_at)->format('d F Y') }}</h6>
                    <p> {{ $contact->message }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt_50 wow fadeInUp" data-wow-duration="1.5s">
        <div class="col-12">
            <div id="pagination_area">
                <nav aria-label="...">
                    {{ $contacts->links('vendor.pagination.custom') }}
                </nav>
            </div>
        </div>
    </div>
 
@endsection


