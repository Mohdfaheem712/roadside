@extends('frontend.layouts.master')
@section('title', core()->getConfigData('title'))
@section('main-section')

    @section('slider-section')
        <div class="swiper-container main-slider" id="myCarousel" data-blast="bgColor">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-bg-position" style="background:url({{ asset('images/1.jpg') }})" data-hash="slide1">
                    <div class="ban-info" data-blast="bgColor">
                        <h2>We Make Pets Happy</h2>
                        <p>Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem</p>
                    </div>
                </div>
                <div class="swiper-slide slider-bg-position" style="background:url({{ asset('images/2.jpg') }})" data-hash="slide2">
                    <div class="ban-info" data-blast="bgColor">
                        <h2>We'r Happy to Pamper</h2>
                        <p> Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
        </div>
    @endsection
    <section class="grids-bottom-w3ls bg-light py-md-5 py-3">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-3 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-home" aria-hidden="true" data-blast="color"></i>
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <div class="line" data-blast="bgColor"></div>
                            <p class="card-text mt-3">{{ $service->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="banner-bottom-wthree py-lg-5 py-4" id="test">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span data-blast="color">Customer Reviews </span>What Clients Say</h3>
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                @foreach($reviews as $key => $reviews_array)
                                <li data-target="#blogCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">

                            @foreach($reviews as $key => $reviews_array)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach($reviews_array as $review)
                                        <div class="col-md-3 reviews-box">
                                            <a href="#">
                                            <img src="{{ Storage::url($review->image_url) }}" alt="Image" style="max-width:100%;">
                                            </a>
                                            <p class="my-4 text-left"><i class="fa fa-quote-right" aria-hidden="true"></i>{{ $review->message }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection