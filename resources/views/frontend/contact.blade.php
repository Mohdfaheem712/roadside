@extends('frontend.layouts.master')
@section('title','Contact Us')
@section('main-section')

<!-- Contact
    ================================================== -->
    <section class="about-sec contact-sec parallax-section py-lg-5 py-4" id="contact">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <div class="choose-main row">
                    <div class="col-md-6">
                        <h3>Contact Us</h3>
                            <div class="map mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161128.30294199585!2d80.97920088785848!3d26.825123190139273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd49fc60a843%3A0x92fc72e19b623f6a!2sGomti%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1649054858585!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-contact">
                            <form action="{{ route('postContact') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" name="phone" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder="" name="message"></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" data-blast="bgColor" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection