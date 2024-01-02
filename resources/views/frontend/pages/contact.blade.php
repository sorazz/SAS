@extends('frontend.includes.app')
@section('content')
<div class="all-page-title" style="background-image:url(images/pattern-4.png);">
    <div class="container text-center">
        <h1>Contact</h1>
    </div>
    <!--Page -->
    <div class="page-info">
        <div class="container">
            <div class="inner-container">
                <ul class="bread-crumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Contact</span></li>
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
<!-- Add this inside the head section of your HTML -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div id="support" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Get In Touch</h3>
            <p class="lead">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true generator<br> on the Internet. It uses a dictionary of over..</p>
        </div><!-- end title -->
        <div id="success-alert">

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact_form">

                    <form id="contactForm">
                        @csrf
                        <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Contact">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Your Address">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Le3gj4pAAAAAOgpDhY5oN9C1fszr9PTah7hBdsi" style="margin-left:15px;"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                                <button type="button" onclick="submitForm()" id="submitBtn" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="margin-top: 110px;">Submit</button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="map-box">
                    <div id="custom-places" class="small-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23436.89940574073!2d-105.39972447381122!3d42.75425160415188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87614abac7859949%3A0x57f91da338d437e3!2sDouglas%2C%20WY%2082633%2C%20USA!5e0!3m2!1sen!2snp!4v1703739294510!5m2!1sen!2snp" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<section class="section nopad cac text-center">
    <a href="#">
        <h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3>
    </a>
</section>

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
<script src="{{asset('frontend/js/jquery-3.6.4.min.js')}}"></script>
<script>
    function submitForm() {
        $('#submitBtn').prop('disabled', true);
        var recaptchaResponse = grecaptcha.getResponse();

        if (!recaptchaResponse) {
            // Handle reCAPTCHA validation error
            alert('Please complete the reCAPTCHA validation.');
            grecaptcha.reset();
            $('#submitBtn').prop('disabled', false);
            return;
        }

        var formData = {
            _token: '{!! csrf_token() !!}',
            fname: $('#fname').val(),
            lname: $('#lname').val(),
            email: $('#email').val(),
            contact: $('#contact').val(),
            address: $('#address').val(),
            comments: $('#comments').val(),
            recaptchaResponse: recaptchaResponse
        };

        $.ajax({
            type: 'POST',
            url: '/contactUs',
            data: formData,
            success: function(response) {
                $('#contactForm')[0].reset();
                setTimeout(function() {
                    var successMessage = '<div id="success-alert" class="alert alert-success alert-dismissible" role="alert">' +
                        '<strong>Success!</strong> ' + response.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                        '</div>';

                    $('#success-alert').append(successMessage);
                }, 3000);
                $('#submitBtn').prop('disabled', false);
                grecaptcha.reset();
            },
            error: function(error) {
                if (error.responseJSON && error.responseJSON.error === 'reCAPTCHA validation failed') {
                    alert('reCAPTCHA validation failed. Please try again.');
                } else {
                    grecaptcha.reset();
                    $('#submitBtn').prop('disabled', false);
                }
            }
        });

        $('#success-alert').on('click', '.alert .btn-close', function() {
            $(this).closest('.alert').remove();
        });
    }
</script>