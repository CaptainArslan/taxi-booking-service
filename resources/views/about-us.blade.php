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

@include('partials.cta-section')

@include('partials.blog-section')

@endsection
@section('page-js')

@endsection