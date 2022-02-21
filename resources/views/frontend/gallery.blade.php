@extends('frontend.layouts.master')

@section('main-section')
<!-- Gallery
    ================================================== -->
    <section class="banner-bottom-wthree py-md-5 py-3" id="gallery">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span data-blast="color">Latest</span> Photos</h3>
                <div class="row gallery_grid-more project-grids">
                    <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 personal_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g1.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g1.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 personal_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g2.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g2.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 p-0 col-sm-6 col-12 pt-sm-0 pt-2 personal_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g3.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g3.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gallery_grid-more">
                    <div class="col-md-6 p-0 col-sm-6 col-12 pt-sm-0 pt-2 personal_gallery_grid1 view_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g4.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g4.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 pt-2 pl-2 p-0 col-sm-3 col-6 personal_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g5.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g5.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 pt-2 pl-2 p-0 col-sm-3 col-6 personal_gallery_grid1 hover14 column">
                        <div class="personal_gallery_effect">
                            <a href="images/g6.jpg') }}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure>
                                    <img src="{{ asset('images/g6.jpg') }}" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
    </section>

@endsection
    