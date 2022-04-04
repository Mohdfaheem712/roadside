@extends('frontend.layouts.master')
@section('title','Services')
@section('main-section')

<!-- Blogs
    ================================================== -->
    <section class="banner-bottom-wthree py-md-5 py-3" id="services">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span data-blast="color">Our</span>Blogs</h3>
                @foreach($blogs as $key => $blog)
                <div class="row choose-main mb-lg-4">
                    @if($key % 2 == 0)
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
                        <div class="log-in mt-md-4 mt-3">
                            <a class="btn text-uppercase" data-blast="bgColor" href="{{ route('blog',$blog->slug) }}">
                             Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 galsses-grid-right">
                        <div class="galsses-grid-left">
                            <figure class="effect-lexi">
                                <img src="{{ Storage::url($blog->image_url) }}" alt="" class="img-fluid">
                                <figcaption>
                                    <h3>
                                        <span data-blast="color"></span>
                                    </h3>
                                    <h3>
                                        Pet
                                        <span data-blast="color">Goorming</span>
                                    </h3>
                                    <p data-blast="color"> ReadMore</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-6 galsses-grid-right mt-lg-4">
                        <div class="galsses-grid-left">
                            <figure class="effect-lexi">
                                <img src="{{ Storage::url($blog->image_url) }}" alt="" class="img-fluid">
                                <figcaption>
                                    <h3><span data-blast="color"></span></h3>
                                    <p data-blast="color"> ReadMore</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 galsses-grid-right mt-4">
                        <h5>
                        <span class="post-color">
                        {{ \Carbon\Carbon::parse($blog->posted_at)->format('d') }}
                        </span>  
                        {{ \Carbon\Carbon::parse($blog->posted_at)->format('M Y') }}
                        </h5>
                        <h4 class="post mt-3">{{ $blog->title }}</h4>
                        <div class="line" data-blast="bgColor"></div>
                         <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                        <div class="log-in mt-md-4 mt-3">
                            <a class="btn text-uppercase" data-blast="bgColor" href="#">
                             Read More</a>
                        </div>

                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection