<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about-company', function () {
    return view('about-company');
});
Route::get('/index-2', function () {
    return view('index-2');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/book-taxi', function () {
    return view('book-taxi');
});
Route::get('/our-taxi', function () {
    return view('our-taxi');
});
Route::get('/taxi-details', function () {
    return view('taxi-details');
});
Route::get('/our-drivers', function () {
    return view('our-drivers');
});
Route::get('/driver-details', function () {
    return view('driver-details');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/blog-grid', function () {
    return view('blog-grid');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
