@extends('layouts.app')
@section('title', 'Our Services')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')

<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Our Services!</h4>
            <h2>Start your journey with <br><span>Ridek Taxi</span> Company!</h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="service-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-1.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">Regular Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-2.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">Airport Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-3.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">Luggage Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-4.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">City Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-5.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">Business Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-item">
                    <div class="service-thumb">
                        <img src="assets/img/service-5.jpg" alt="img">
                        <div class="service-shape-wrap">
                            <div class="service-shape"></div>
                        </div>
                        <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details">Local Transport</a></h3>
                        <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                        <a class="read-more" href="service-details">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.service-section-->

<section class="cta-section-2 padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="cta-content">
                    <h4>Ridek Taxi Services!</h4>
                    <h2>Feel your journey with Ridek!</h2>
                    <a href="book-taxi" class="default-btn">Book a Taxi</a>
                </div>
            </div>
            <div class="col-lg-5">
                <ul class="check-list">
                    <li><i class="las la-arrow-right"></i>Easy payment systems.</li>
                    <li><i class="las la-arrow-right"></i>Make safety a top priority.</li>
                    <li><i class="las la-arrow-right"></i>First and quick pickups.</li>
                    <li><i class="las la-arrow-right"></i>Access Ridek globally.</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="cta-men"></div>
            </div>
        </div>
    </div>
</section>
<!--/.cta-section-->

@include('partials.blog-section')

@endsection
@section('page-js')

@endsection