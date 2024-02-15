@include('frontend.includes.header')

<body class="seo_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="cupcake" class="box">
            <span class="letter box">I</span>
            <span class="letter box">T</span>
            <span class="letter box">C</span>
            <span class="letter box">C</span>
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
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('uploads/setting/logo/'.$setting->site_logo)}}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/page/about')}}">About Us </a></li>
                        <li><a href="{{url('/page/services')}}">Services</a></li>
                        <!-- <li><a href="{{url('/page/feature')}}">Feature</a></li>
                        <li><a href="{{url('/page/project')}}">Project</a></li> -->
                        <li><a href="{{url('/page/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
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