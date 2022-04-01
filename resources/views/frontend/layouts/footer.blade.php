<footer class="action-sec py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row">
            <div class="col-lg-5 footer-grid">
                <h3 class="mb-4">About Us</h3>
                <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3 class="text-uppercase mb-3 ">Connect With Social</h3>
                        <a href="{{ core()->getConfigData('twitter_url') }}"><span class="fa fa-twitter"></span></a>
                        <a href="{{ core()->getConfigData('instagram_url') }}"><span class="fa fa-instagram"></span></a>
                        <a href="{{ core()->getConfigData('facebook_url') }}"><span class="fa fa-facebook"></span></a>
                        <a href="{{ core()->getConfigData('youtube_url') }}"><span class="fa fa-youtube"></span></a>
                        <a href="{{ core()->getConfigData('facebook_url') }}" class="facebook-footer mr-2"><span class="fa fa-facebook mr-1"></span> Facebook</a>
                        <br>
                        <a href="{{ core()->getConfigData('twitter_url') }}" class="twitter-footer"><span class="fa fa-twitter mr-1"></span> Twitter</a>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mb-4">Address</h3>
                        <address class="mb-0">
                        <p class="mb-2"><i class="fas fa-map-marker-alt"></i>{{ core()->getConfigData('address') }}<br> India</p>
                        <p><i class="fa fa-phone mr-1"></i>{{ core()->getConfigData('phone') }}</p>
                        <p><i class="fa fa-envelope-open  mr-1"></i> <a href="mailto:{{ core()->getConfigData('email') }}">{{ core()->getConfigData('email') }}</a></p>
                    </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 footer-grid">
                <h3 class="mb-4">Instagram</h3>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href="single.html">
                        <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="">
                    </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
                            <i class="far fa-clock"></i> 10 Sep, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href="single.html">
                        <img src="{{ asset('images/4.jpg') }}" class="img-fluid" alt="">
                    </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
                            <i class="far fa-clock"></i> 22 Sep, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href="single.html">
                        <img src="{{ asset('images/6.jpg') }}" class="img-fluid" alt="">
                    </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
                            <i class="far fa-clock"></i> 23 Sep, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid">
                <h3 class="mb-4">We Offer</h3>
                <ul>
                    <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                    <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                    <li><i class="fa mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet.</li>
                </ul>
                <h3 class="mt-4 mb-4">Newsletter</h3>
                <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <button class="btn1" data-blast="bgColor"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright mt-md-5 mt-4 text-center">
        <p>© 2022 {{ core()->getConfigData('title') }}. All Rights Reserved</p>
    </div>
</footer>
