@extends('layouts.app')
@section('title', 'About Us')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>About Us!</h4>
            <h2>Feel your journey <br> with <span>Ridek!</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

@include('partials.about-section')

@include('partials.service-section')

@include('partials.testimonial-section')

@include('partials.team-section')

<section class="cta-section padding">
    <div class="cta-men"></div>
    <div class="container">
        <div class="cta-content">
            <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
            <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new technologies.</p>
            <div class="cta-call">
                <i class="las la-phone-volume"></i>
                <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
            </div>
        </div>
    </div>
</section>
<!--/.cta-section-->

@include('partials.blog-section')

@endsection
@section('page-js')

@endsection