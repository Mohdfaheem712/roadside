@extends('frontend.layouts.master')
@section('title','Services')
@section('main-section')

<!-- Blog
    ================================================== -->
    <section class="banner-bottom-wthree py-md-5 py-3" id="services">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                <span data-blast="color"></span>{{ $blog->title }}</h3>
                <div class="row choose-main mb-lg-4">
                    <div class="col-lg-6 galsses-grid-right">
                        <h5>
                        <span class="post-color">
                        {{ \Carbon\Carbon::parse($blog->posted_at)->format('d') }}
                        </span>  
                        {{ \Carbon\Carbon::parse($blog->posted_at)->format('M Y') }}
                        </h5>
                        <h4 class="post mt-3">{{ $blog->title }}</h4>
                        <div class="line" data-blast="bgColor"></div>
                        <p class="mt-3">{{ $blog->description }}</p>
                    </div>
                    <div class="col-lg-6 galsses-grid-right">
                        <div class="galsses-grid-left">
                            <figure class="effect-lexi">
                                <img src="{{ Storage::url($blog->image_url) }}" alt="" class="img-fluid">
                                
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection