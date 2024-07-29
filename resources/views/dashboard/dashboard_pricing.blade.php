@extends('dashboard.layouts.appAdmin')
@section('tilte')
pricing plan
@endsection
@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">pricing plan</h2>
        <div class="dashboard_pricing">
            <div class="row">
                <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_pricing">
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
                        <a class="common_btn" href="checkout.html">Choose This Pack</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_pricing">
                        <h5>Professional</h5>
                        <p>Basic listing submission, active for 60 days</p>
                        <h2>$699.00</h2>
                        <ul>
                            <li>All Operating Supported</li>
                            <li>30 Property Listings</li>
                            <li>60 Days Availability</li>
                            <li>Feature Properties</li>
                            <li>24/7 Full support</li>
                        </ul>
                        <a class="common_btn" href="{{ route('user.checkout') }}">Choose This Pack</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_pricing">
                        <h5>Business</h5>
                        <p>Basic listing submission, active for 30 days</p>
                        <h2>$999.00</h2>
                        <ul>
                            <li>All Operating Supported</li>
                            <li>40 Property Listings</li>
                            <li>90 Days Availability</li>
                            <li>Feature Properties</li>
                            <li>24/7 Full support</li>
                        </ul>
                        <a class="common_btn" href="checkout.html">Choose This Pack</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--=========================
            DASHBOARD INFO END
        ==========================-->
@endsection
