@extends('layouts.app')
@section('title', 'Book Taxi')
<!-- start page title -->
@section('page-css')

@endsection
@section('content')
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Get Your Cab!</h4>
            <h2>Book Your <span>Ride</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<!--/.page-header-->

<div class="taxi-booking bg-grey padding">
    <div class="container">
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-lg-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2><strong>Reservations</strong></h2>
                        <p>Book a trip or request a quote by filling out the form below.</p>
                        <div class="row">
                            <div class="col-md-12 mx-0 taxi-booking-form offset-lg-1">
                                <form id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Trip Details</strong></li>
                                        <li id="personal"><strong>Choose Vehicle</strong></li>
                                        <li id="payment"><strong>Confirm</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Service Details</h2>
                                            <div class="form-field">
                                                <!-- <i class="las la-tags"></i> -->
                                                <select name="package-type" id="package-type" class="niceSelect">
                                                    <option value="standard">Airport Pickup</option>
                                                    <option value="business">Airport Dropoff</option>
                                                    <option value="economy">Distance</option>
                                                    <option value="vip-spacial">Hourly</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="form-field col-lg-6 pe-3">
                                                    <i class="las la-calendar"></i>
                                                    <label for="ride-date">PickUp Date</label>
                                                    <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                                                </div>
                                                <div class="form-field col-lg-6 ps-3">
                                                    <i class="las la-clock"></i>
                                                    <label for="ride-time">PickUp Time</label>
                                                    <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 d-flex">
                                                <div class="form-field col-lg-6 pe-3">
                                                    <i class="las la-user-friends"></i>
                                                    <label for="passengers">Passengers</label>
                                                    <select name="passengers" id="passengers" class="niceSelect">
                                                        <option value="1">1 Person</option>
                                                        <option value="2">2 Person</option>
                                                        <option value="3">3 Person</option>
                                                        <option value="4">4 Person</option>
                                                        <option value="5">5 Person</option>
                                                        <option value="6">6 Person</option>
                                                        <option value="7">7 Person</option>
                                                        <option value="8">8 Person</option>
                                                        <option value="9">9 Person</option>
                                                        <option value="10">10 Person</option>
                                                        <option value="11">11 Person</option>
                                                    </select>
                                                </div>
                                                <div class="form-field col-lg-6 ps-3">
                                                    <!-- <i class="las la-user-friends"></i> -->
                                                    <label for="luggage">Luggage</label>
                                                    <select name="luggage" id="luggage" class="niceSelect">
                                                        <option value="">0 Luggage</option>
                                                        <option value="">1 Luggage</option>
                                                        <option value="">2 Luggage</option>
                                                        <option value="">3 Luggage</option>
                                                        <option value="">4 Luggage</option>
                                                        <option value="">5 Luggage</option>
                                                        <option value="">6 Luggage</option>
                                                        <option value="">7 Luggage</option>
                                                        <option value="">8 Luggage</option>
                                                        <option value="">9 Luggage</option>
                                                        <option value="">10 Luggage</option>
                                                        <option value="">11 Luggage</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-field">
                                                <!-- <i class="las la-user-friends"></i> -->
                                                <label for="pickup_airport">Pickup Airport</label>
                                                <select name="pickup_airport" id="pickup_airport" class="niceSelect">
                                                    <option value="TPIA">Toronto Pearson International Airport</option>
                                                    <option value="TCCA">Toronto City Centre Airport</option>
                                                    <option value="BBTCA">Billy Bishop Toronto City Airport</option>
                                                    <option value="JMHIA">John C. Munro Hamilton International Airport</option>
                                                    <option value="BNIA">Buffalo Niagara International Airport</option>
                                                    <option value="BMA">Buttonville Municipal Airport</option>
                                                </select>
                                            </div>
                                            <div class="form-field col-lg-12 d-flex">
                                                <div class="col-lg-6 pe-3">
                                                    <!-- <i class="las la-user-friends"></i> -->
                                                    <label for="airline">Airline</label>
                                                    <select name="airline" id="airline" class="niceSelect">
                                                        <option value="">Airline</option>
                                                        <option value="">Airline</option>
                                                        <option value="">Airline</option>
                                                        <option value="">Airline</option>
                                                        <option value="">Airline</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 ps-3">
                                                    <!-- <i class="las la-user-tie"></i> -->
                                                    <label for="flight_num">Flight No</label>
                                                    <input type="number" id="flight_num" name="flight_num" class="form-control" placeholder="Flight#(e.g:123)" required>
                                                </div>
                                            </div>


                                            <div class="form-field">
                                                <!-- <i class="las la-user-tie"></i> -->
                                                <label for="stops">Stops</label>
                                                <!-- <input type="text" id="stops" name="stops" class="form-control" placeholder="Your Name" required> -->
                                            </div>
                                            <div class="form-field">
                                                <!-- <i class="las la-user-tie"></i> -->
                                                <label for="dropoff_address">Dropoff Address</label>
                                                <input type="text" id="dropoff_address" name="dropoff_address" class="form-control" placeholder="Dropoff Address" required>
                                            </div>

                                            <!-- <input type="email" name="email" placeholder="Email Id" />
                                            <input type="text" name="uname" placeholder="UserName" />
                                            <input type="password" name="pwd" placeholder="Password" />
                                            <input type="password" name="cpwd" placeholder="Confirm Password" /> -->
                                        </div>

                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Personal Information</h2>
                                            <input type="text" name="fname" placeholder="First Name" />
                                            <input type="text" name="lname" placeholder="Last Name" />
                                            <input type="text" name="phno" placeholder="Contact No." />
                                            <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Payment Information</h2>
                                            <div class="radio-group">
                                                <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                                <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                            <label class="pay">Card Holder Name*</label>
                                            <input type="text" name="holdername" placeholder="" />
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="pay">Card Number*</label>
                                                    <input type="text" name="cardno" placeholder="" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="pay">CVC*</label>
                                                    <input type="password" name="cvcpwd" placeholder="***" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="pay">Expiry Date*</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="list-dt" id="month" name="expmonth">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <select class="list-dt" id="year" name="expyear">
                                                        <option selected>Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Signed Up</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="book-ride.php" id="book-taxi-ride">
                    <div class="taxi-booking-form">
                        <div class="form-field">
                            <i class="las la-user-tie"></i>
                            <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-envelope-open"></i>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-tags"></i>
                            <select name="package-type" id="package-type" class="niceSelect">
                                <option value="standard">Standard</option>
                                <option value="business">Business</option>
                                <option value="economy">Economy</option>
                                <option value="vip-spacial">VIP Spacial</option>
                                <option value="comfort">Comfort</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <i class="las la-user-friends"></i>
                            <select name="passengers" id="passengers" class="niceSelect">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-calendar"></i>
                            <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-clock"></i>
                            <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                        </div>
                        <div class="form-field">
                            <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                        </div>
                    </div>
                    <div id="form-messages" class="alert" role="alert"></div>
                </form> <!-- Booking Form -->
            </div>
        </div>
    </div>
</div>
<!--/.booking-form-->
@endsection
@section('page-js')

@endsection