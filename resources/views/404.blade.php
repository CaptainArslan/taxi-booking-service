@extends('layouts.app')
@section('title', '404')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')
<section class="page-header error">
    <div class="container">
        <div class="page-header-info text-center mt-40">
            <h4>Oops! Where are we?</h4>
            <h2>404 Page <span>Not Found!</span></h2>
            <p>Page not Found! The page you are looking for was moved, <br>removed, renamed or might never existed.</p>
            <a href="index" class="default-btn mt-30">Back To Homepage</a>
        </div>
    </div>
</section>
<!--/.page-header-->
@endsection
@section('page-js')

@endsection