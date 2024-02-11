<svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <img src="{{asset('frontend/images/logos/logo-light.png')}}" alt="">
                        <small>{{$setting->site_name}}</small>
                    </div>
                    {!! $setting->goal!!}
                </div><!-- end clearfix -->
            </div><!-- end col -->


            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:{{$setting->contact_email}}">{{$setting->contact_email}}</a></li>
                        <li><a href="{{url('/')}}">{{$setting->site_name}}</a></li>
                        <li>{{$setting->contact_no}}</li>
                        <li>{{$setting->contact_address}}</li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/services'}}">Service</a></li>
                        <li><a href="{{'/project'}}">Project</a></li>
                        <li><a href="{{'/testimonial'}}">Testimonial</a></li>
                        <li><a href="{{'/contact'}}">Contact</a></li>

                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Social</h3>
                    </div>
                    <ul class="footer-links social-md">
                        <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a class="gi" href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; 2024 <a href="{{url('/')}}">ICTS</a></p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{asset('frontend/js/all.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

</body>

</html>