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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-contact">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder=""></textarea>
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