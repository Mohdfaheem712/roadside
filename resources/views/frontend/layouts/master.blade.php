<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Club Animals Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Pet Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/blast.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/lightbox.css') }}">
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

</head>

<body>
    <div class="main">
        <div class="blast-box">
            <div class="blast-frame">
                <p>Color schemes</p>
                <div class="blast-colors d-flex justify-content-center">
                    <div class="blast-color">#00a8e0</div>
                    <div class="blast-color">#ff322e</div>
                    <div class="blast-color">#ff9900</div>
                    <div class="blast-color">#34bf49</div>
                </div>
                <p class="blast-custom-colors">Select Color</p>
                <input type="color" name="blastCustomColor" value="#cf2626">
            </div>
            <div class="blast-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>

        </div>
        <div id="page">
            <div id="home" class="banner" data-blast="bgColor">

                <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--blw">
                    <div class="container">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        </button>
                        <a class="navbar-brand mx-auto" href="{{ route('index') }}">Pet <span data-blast="color">Club</span></a>
                        <div class="collapse navbar-collapse" id="navbarCollapse1">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('index') }}">Home</a> </li>
                                <li class="nav-item {{ (request()->is('services')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('services') }}">Services</a> </li>
                                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('about') }}">About</a> </li>
                                <li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('gallery') }}">Gallery</a> </li>
                                <li class="nav-item {{ (request()->is('booknow')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('booknow') }}">Book Now</a> </li>
                                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('contact') }}">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('slider-section')
            </div>
        </div>
    </div>

    @yield('main-section')
    
    {{-- footer --}}
    @section('footer')
        @include('frontend.layouts.footer')
    @endsection


    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/boost.js') }}"></script>
    <script src="{{ asset('frontend/js/blast.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox-plus-jquery.min.js') }}">
    </script>
    <script>
        $('#blogCarousel').carousel({
            interval: 5000
        });
    </script>
    <script src="{{ asset('frontend/js/move-top.js') }}"></script>
    <script src="{{ asset('frontend/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
</body>
</html>
