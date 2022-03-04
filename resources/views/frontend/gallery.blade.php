@extends('frontend.layouts.master')
@section('title','Gallery')
@push('css')
<style>
    .img-fluid{
        max-height: 325px;
    }
</style>
@endpush
@section('main-section')
<!-- Gallery
    ================================================== -->
    <section class="banner-bottom-wthree py-md-5 py-3" id="gallery">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span data-blast="color">Latest</span> Photos</h3>
                    @foreach($images as $gallery_images)
                    <div class="row gallery_grid-more project-grids mb-2">
                        @foreach($gallery_images as $key => $image)
                        @php
                        $imagesize = getimagesize(Storage::url($image->image_url));
                        @endphp
                        @if($imagesize[0] < 500)
                        <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 personal_gallery_grid1 hover14 column">
                            <div class="personal_gallery_effect">
                                <a href="{{ Storage::url($image->image_url) }}" data-lightbox="example-set" data-title="{{ $image->name }}">
                                    <figure>
                                        <img src="{{ Storage::url($image->image_url) }}" alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="col-md-6 p-0 pr-2 col-sm-6 col-12 personal_gallery_grid1 hover14 column">
                            <div class="personal_gallery_effect">
                                <a href="{{ Storage::url($image->image_url) }}" data-lightbox="example-set" data-title="{{ $image->name }}">
                                    <figure>
                                        <img src="{{ Storage::url($image->image_url) }}" alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection
    