@include('frontend.includes.header')

<body class="seo_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="cupcake" class="box">
            <span class="letter">L</span>
            <div class="cupcakeCircle box">
                <div class="cupcakeInner box">
                    <div class="cupcakeCore box"></div>
                </div>
            </div>
            <span class="letter box">A</span>
            <span class="letter box">D</span>
            <span class="letter box">I</span>
            <span class="letter box">N</span>
            <span class="letter box">G</span>
        </div>
    </div>
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('frontend/images/logos/logo-seo.png')}}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/page/about')}}">About Us </a></li>
                        <li><a href="{{url('/page/services')}}">Services</a></li>
                        <li><a href="{{url('/page/feature')}}">Feature</a></li>
                        <li><a href="{{url('/page/project')}}">Project</a></li>
                        <li><a href="{{url('/page/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image: url('{{ asset('frontend/uploads/parallax_12.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>Increase Your Ranking<br> on Search Engines</h2>
                        <p class="lead">With FLaxSEO responsive landing page template, you can showcase your awesome seo services!</p>
                        <a href="#support" class="btn btn-light btn-radius btn-brd ban-btn">Free SEO Analysis</a>
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
    @yield('content')
    <script src="{{asset('frontend/js/jquery-3.6.4.min.js')}}"></script>
    <script>
       $(document).ready(function() {
        // Get the current path
        var currentPath = window.location.pathname;

        // Remove "active" class from all links
        $('#navbar ul.navbar-nav li a').removeClass('active');

        // Add "active" class to the link corresponding to the current route
        $('#navbar ul.navbar-nav li a').each(function() {
            var linkPath = new URL($(this).attr('href'), window.location.origin).pathname;

            // Check if the current path matches the link path
            if (currentPath === linkPath) {
                $(this).addClass('active');
            }
        });
    });
    </script>
    @include('frontend.includes.footer')