@extends('layouts.app')
@section('title', 'Our Services')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')

<section class="page-header" style="background-image: url(../img/texture.jpg);">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Our Services!</h4>
            <h2>Visit the <span>Services areas</span><br> with Airport Black Limo!</h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="cta-section-2 footer-mid-wrap padding">
    <div class="widget-title">
        <h2 style="color: black;">Airport Limo Services</h2>
        <span></span>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <!-- <div class="cta-content">
                    <h4>Airport Limo Services!</h4>
                    <h2>Feel your journey with Ridek!</h2>
                    <a href="book-taxi" class="default-btn">Book a Taxi</a>
                </div> -->
                <ul class="check-list">
                    <li><i class="las la-arrow-right"></i>Ajax</li>
                    <li><i class="las la-arrow-right"></i>Ancaster</li>
                    <li><i class="las la-arrow-right"></i>Aurora</li>
                    <li><i class="las la-arrow-right"></i>Barrie</li>
                    <li><i class="las la-arrow-right"></i>Brampton</li>
                    <li><i class="las la-arrow-right"></i>Brantford</li>
                    <li><i class="las la-arrow-right"></i>Burlington</li>
                    <li><i class="las la-arrow-right"></i>Caledon</li>
                    <li><i class="las la-arrow-right"></i>Cambridge</li>
                    <li><i class="las la-arrow-right"></i>Courtice</li>
                    <li><i class="las la-arrow-right"></i>Guelph</li>
                    <li><i class="las la-arrow-right"></i>Hamilton</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="check-list">
                    <li><i class="las la-arrow-right"></i>Kitchener</li>
                    <li><i class="las la-arrow-right"></i>Kingston</li>
                    <li><i class="las la-arrow-right"></i>London</li>
                    <li><i class="las la-arrow-right"></i>Milton</li>
                    <li><i class="las la-arrow-right"></i>Markham</li>
                    <li><i class="las la-arrow-right"></i>Mississauga</li>
                    <li><i class="las la-arrow-right"></i>Muskoka</li>
                    <li><i class="las la-arrow-right"></i>Niagra Falls</li>
                    <li><i class="las la-arrow-right"></i>Newmarket</li>
                    <li><i class="las la-arrow-right"></i>Oakville</li>
                    <li><i class="las la-arrow-right"></i>Oshawa</li>
                    <li><i class="las la-arrow-right"></i>Port Hope</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <!-- <div class="cta-men"></div> -->
                <ul class="check-list">
                    <li><i class="las la-arrow-right"></i>Peterborough</li>
                    <li><i class="las la-arrow-right"></i>Pickering</li>
                    <li><i class="las la-arrow-right"></i>Port Perry</li>
                    <li><i class="las la-arrow-right"></i>Richmond Hill</li>
                    <li><i class="las la-arrow-right"></i>Stouffville</li>
                    <li><i class="las la-arrow-right"></i>St Cathreen</li>
                    <li><i class="las la-arrow-right"></i>Toronto</li>
                    <li><i class="las la-arrow-right"></i>Uxbridge</li>
                    <li><i class="las la-arrow-right"></i>Vaughan</li>
                    <li><i class="las la-arrow-right"></i>Waterloo</li>
                    <li><i class="las la-arrow-right"></i>Whitby</li>
                    <li><i class="las la-arrow-right"></i>Windsor</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/.cta-section-->

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


{{--@include('partials.blog-section')--}}

@endsection
@section('page-js')

@endsection