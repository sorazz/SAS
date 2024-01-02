@extends('frontend.includes.app')
@section('content')
<div class="all-page-title" style="background-image:url(images/pattern-4.png);">
    <div class="container text-center">
        <h1>Feature</h1>
    </div>
    <!--Page -->
    <div class="page-info">
        <div class="container">
            <div class="inner-container">
                <ul class="bread-crumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Feature</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Page-->
</div><!-- end section -->

<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
    <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
    </path>
</svg>
<div id="case-study-box" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <small>Our Awesome Clients</small>
            <h3>Case Study</h3>
            <p class="lead">We offer unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
        </div><!-- end title -->

        <div id="da-thumbs" class="da-thumbs portfolio">
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('frontend/uploads/version_01.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_01.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat2">
                <a href="{{asset('frontend/uploads/version_02.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_02.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('frontend/uploads/version_03.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_03.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>

            <div class="post-media pitem item-w1 item-h1 cat3">
                <a href="{{asset('frontend/uploads/version_04.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_04.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat2">
                <a href="{{asset('frontend/uploads/version_05.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_05.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('frontend/uploads/version_06.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('frontend/uploads/version_06.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Web Design Project</h3>
                        <p>Landing Page</p>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
        </div><!-- end portfolio -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="testimonials" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Happy Clients</h3>
            <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Landigoo website template!</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_01.png')}}" alt="" class="img-responsive alignleft">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_02.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_03.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_01.png')}}" alt="" class="img-responsive alignleft">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_02.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('frontend/uploads/testi_03.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div><!-- end testimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="support" class="section db">
    <div class="container">
        <div class="section-title text-center">
            <h3>Clients Logo</h3>
        </div><!-- end title -->

        <div class="row">
            <div id="logo-carousel" class="owl-carousel">
                <div> <img src="{{asset('frontend/uploads/logo_01.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_02.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_03.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_04.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_05.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_06.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_01.png')}}" alt=""> </div>
                <div> <img src="{{asset('frontend/uploads/logo_02.png')}}" alt=""> </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection