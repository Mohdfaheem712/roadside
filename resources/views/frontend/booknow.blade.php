@extends('frontend.layouts.master')
@section('title','Book Now')
@section('main-section')
<!-- Booking Form
    ================================================== -->
    <section class="about-sec parallax-section py-lg-5 py-4" id="book">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <div class="choose-main">
                    <div id="search_form" class="search_top text-center">
                        <form action="#" method="post" class="booking-form row">
                            <div class="col-md-3 banf">
                                <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-3 banf">
                                <input class="form-control" type="text" name="Phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="col-md-3 banf">
                                <select id="country13" class="form-control">
                                    <option>
Choose Service</option>
                                    <option>Puppy Program</option>
                                    <option>Dog Walking</option>
                                    <option>Pet Sitting</option>
                                </select>
                            </div>
                            <div class="col-md-3 banf">
                                <input class="form-control" data-blast="bgColor" type="submit" value="Book Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection