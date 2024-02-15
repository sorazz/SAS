@extends('frontend.includes.app')
@section('content')

<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image: url('{{ asset('frontend/uploads/parallax_12.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="big-tagline">
                    {!!$setting->site_info!!}
                </div>
            </div>

            <div class="app_iphone_02 wow slideInUp hidden-xs hidden-sm" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="uploads/rocket.png" alt="" class="img-responsive">
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
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

<div id="about" class="section wb nopadtop">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{asset('uploads/setting/about/image/'.$setting->about_image)}}" alt="" class="img-responsive img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="col-md-6 m40">

                {!!$setting->about_caption!!}
                {!! substr($setting->site_description,0,800) !!}...
                <button class="btn-btn-primary"><a href="{{url('/page/about')}}">Read More</a></button>
            </div><!-- end messagebox -->
        </div><!-- end row -->
        </div><!-- end how-its-work -->
    </div><!-- end container -->
</div><!-- end section -->


<div id="services" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Services</h3>
            {!! $setting->service_description !!}
        </div><!-- end title -->
        <div class="row text-center">
            @foreach($services->take(3) as $service)

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <img src="{{asset('uploads/service/'.$service->image)}}" alt="" class="img-responsive img-rounded">
                    </div>
                    <h3><a href="{{url('/page/'.$service->id .'/service')}}">{{$service->title}}</a></h3>
                    {!! substr($service->caption,0,200) !!}...
                </div><!-- end service -->
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->

        <hr class="invis">

        <div class="row text-center">

            @foreach($services->skip(3) as $service)

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <img src="{{asset('uploads/service/'.$service->image)}}" alt="" class="img-responsive img-rounded">
                    </div>
                    <h3><a href="{{url('/page/'.$service->id .'/service')}}">{{$service->title}}</a></h3>
                    {!! substr($service->caption,0,200) !!}...
                </div><!-- end service -->
            </div><!-- end col -->
            @endforeach


        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->


<div class="parallax section lb">
    <div class="container">
        <div class="row text-center stat-wrap">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                <p class="stat_count">1200</p>
                <h3>Complated Projects</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                <p class="stat_count">3210</p>
                <h3>Happy Clients</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                <p class="stat_count">3781</p>
                <h3>Customer Services</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span>
                <p class="stat_count">4300</p>
                <h3>Answered Questions</h3>
            </div><!-- end col -->
        </div><!-- end row -->
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