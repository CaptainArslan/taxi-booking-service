@extends('layouts.app')
@section('title', 'Faqs')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Help &amp; Faqs!</h4>
            <h2>Frequently Asked <br> <span>Questions!</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="blog-section blog-page bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sm-padding">
                <div class="accordion faq-accordion" id="faq-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What makes a good taxi service?</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is the purpose of a taxi service? </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> How to download the ridek taxi app online? </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What Should I be Asking For first ride? </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> How Many cars does ridek taxi service Have? </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sm-padding">
                <div class="sidebar-widget">
                    <form action="" class="search-form">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!--Search Form-->
                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Categories</h3>
                    </div>
                    <ul class="category-list">
                        <li><a href="blog-grid">Business Strategy</a><span>23</span></li>
                        <li><a href="blog-grid">Project Management</a><span>05</span></li>
                        <li><a href="blog-grid">Digital Marketing</a><span>18</span></li>
                        <li><a href="blog-grid">Customer Experience</a><span>04</span></li>
                        <li><a href="blog-grid">Partnership System</a><span>15</span></li>
                    </ul>
                </div>
                <!--Categories-->
                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Recent Articles</h3>
                    </div>
                    <ul class="thumb-post">
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-thumb-1.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details">How To Go About Initiating An Startup In Few Days.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-thumb-2.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details">Financial Experts Support Help You To Find Out.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="assets/img/post-thumb-3.jpg" alt="thumb">
                            </div>
                            <div class="thumb-post-info">
                                <h3><a href="blog-details">Innovative Helping Business All Over The World.</a></h3>
                                <a href="#" class="date">Jan 01 2022</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Recent Thumb Post-->
                <div class="sidebar-widget">
                    <div class="widget-title">
                        <h3>Tags</h3>
                    </div>
                    <ul class="tags">
                        <li><a href="#">business</a></li>
                        <li><a href="#">marketing</a></li>
                        <li><a href="#">startup</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">consulting</a></li>
                        <li><a href="#">strategy</a></li>
                        <li><a href="#">development</a></li>
                        <li><a href="#">tips</a></li>
                        <li><a href="#">Seo</a></li>
                    </ul>
                </div>
                <!--Tags-->
            </div>
            <!--Sidebar-->
        </div>
    </div>
</section>
<!--Blog Section-->

@endsection
@section('page-js')

@endsection