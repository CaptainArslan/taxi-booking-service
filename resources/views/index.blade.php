@extends('layouts.app')
@section('title', 'Taxi Booking system')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')
<div class="slider-section">
    <div class="main-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-img"></div>
                <div class="car-holder">
                    <!-- <img src="assets/img/car-1.png" alt="car" data-animation="car-animation" data-duration="1.5s"> -->
                    <div class="shape">
                        <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                        <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                        <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                    </div>
                </div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="slider-caption medium">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                    </div>
                                </div>
                            </div>
                            <div class="slider-caption big">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from
                                        <br>anywhare today!
                                    </div>
                                </div>
                            </div>
                            <div class="slider-caption small">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                        Everything your taxi business needs is already here! <br>Ridek made for taxi
                                        service companies!</div>
                                </div>
                            </div>
                            <div class="slider-btn">
                                <a href="book-taxi" class="default-btn" data-animation="fade-in-bottom" data-delay="0.9s">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-img"><img src="assets/img/slider-bg.jpg" alt="img" class="kenburns" style="animation-duration: 12000ms; "></div>
                <div class="car-holder">
                    <img src="assets/img/car-1.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                    <div class="shape">
                        <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                        <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                        <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                    </div>
                </div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="slider-caption medium">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                    </div>
                                </div>
                            </div>
                            <div class="slider-caption big">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from
                                        <br>anywhare today!
                                    </div>
                                </div>
                            </div>
                            <div class="slider-caption small">
                                <div class="inner-layer">
                                    <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                        Everything your taxi business needs is already here! <br>Ridek made for taxi
                                        service companies!</div>
                                </div>
                            </div>
                            <div class="slider-btn">
                                <a href="book-taxi" class="default-btn" data-animation="fade-in-bottom" data-delay="0.9s">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider navigation buttons -->
        <div class="slider-controls">
            <div class="slider-control slider-button-prev"><span><i class="las la-long-arrow-alt-left"></i></span>Prev</div>
            <div class="slider-pagination"></div>
            <div class="slider-control slider-button-next">Next<span><i class="las la-long-arrow-alt-right"></i></span>
            </div>
        </div>
    </div>
</div>
<!--/.slider-section-->

@include('partials.about-section')

@include('partials.service-section')

@include('partials.testimonial-section')

@include('partials.booking-section')

@include('partials.pricing-section')

<section class="download-section bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading wow fade-in-left" data-wow-delay="200ms">
                    <h4><span></span>Online Booking</h4>
                    <h2>Get the Black Limo Mobile app and Start Your Journey!</h2>
                    <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and
                        regularly master technologies.</p>
                    <ul class="app-feature">
                        <li>
                            <i><img class="feature-icon" src="assets/img/icon-navigator.svg" alt="icon"></i>
                            <h3>Easy to Search <br> Ridek Taxi!</h3>
                        </li>
                        <li>
                            <i><img class="feature-icon" src="assets/img/icon-clock.svg" alt="icon"></i>
                            <h3>Quick Pickups To <br> Save Time!</h3>
                        </li>
                        <li>
                            <i><img class="feature-icon" src="assets/img/icon-docs.svg" alt="icon"></i>
                            <h3>Inclusive Rates To<br> Enjoy Ride!</h3>
                        </li>
                    </ul>
                    <div class="download-btn">
                        <a href="#"><img src="assets/img/google-play.svg" alt="PlayStore"></a>
                        <a href="#"><img src="assets/img/app-store.svg" alt="AppStore"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="taxi-holder">
                    <div class="taxi wow fade-in-left" data-wow-delay="300ms"></div>
                    <div class="mockup wow fade-in-bottom" data-wow-delay="400ms"></div>
                    <div class="charecter wow fade-in-right" data-wow-delay="500ms"></div>
                    <img class="location-marker" src="assets/img/location-marker.png" alt="location">
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.download-section-->

@include('partials.cta-section')

@include('partials.blog-section')


@endsection
@section('page-js')

@endsection