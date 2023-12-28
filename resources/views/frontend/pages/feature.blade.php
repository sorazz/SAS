@extends('frontend.includes.app')
@section('content')
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