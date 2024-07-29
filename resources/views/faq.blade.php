@extends('layouts.app')
@section('contente')

    <section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
        <div class="breadcrumbs_overly">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                            <h1>FAQ</h1>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="{{ route('user.home') }}"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="{{ route('user.faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq_area pt_115 xs_pt_95 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center text-align-center">
                <div class="col-xxl-6 col-lg-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_35">
                        <h2>Frequently Asked Questions (FAQ) On MaxLand </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="faq_accordion accordion accordion-flush" id="accordionFlushExample">
                        <div class=" accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button show" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How can i get MaxLand aid to live off campus?</button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What the first step of the home buying process?</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    How should I prepare my house before selling it?</button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What is an agent’s commission fee?</button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    What is the first step in buying a home?</button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Should I sell my current property before buying a new one?</button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    How many houses should I view before purchasing one?</button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nullam metus metus, imperdiet ut ex quis, ultrices
                                    feugiat neque. Etiam vitae accumsan neque, id gravida ligula. Donec ut tincidunt
                                    velit. Sed gravida erat nunc, ac vehicula orci dignissim id. Praesent diam
                                    magna. Sed tincidunt mi libero.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
