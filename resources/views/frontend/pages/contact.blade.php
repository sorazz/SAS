@extends('frontend.includes.app')
@section('content')
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