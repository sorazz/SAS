<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>{{ SITE_TITLE }} | Log in</title>

        <!-- Tell the browser to be responsive to screen width -->

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <base href='{{ Request::root() }}/' />

        <link href="admin/favicon.ico" rel="shortcut icon" type="image/ico" />

        <!-- Bootstrap 3.3.6 -->

        <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">

        <!-- Font Awesome -->

        <link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">



        <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">

        <link href="admin/css/my.css" rel="stylesheet" type="text/css"/>

      

    </head>

    <body class="hold-transition login-page" style="background: url(images/login-bg.jpg); background-size: cover; opacity: 0.9; background-color: cadetblue;">

        <div class="overlay" style="background: rgba(0, 0, 0, 0.7); height: 100%">

            <div class="login-logo">

                <a href="{{ URL::to('/') }}"><b>{{ SITE_TITLE }} </b></a>

            </div>

            <div class="login-box">

                <!-- /.login-logo -->

                <div class="login-box-body">

                    <h4 class="text-center">Administrator Login</h4>

                    @if(Session::has('error'))

                    <div class="alert alert-danger alert-dismissible">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        <i class="fa fa-ban"></i> {!! Session::get('error') !!}

                    </div>

                    @endif

                    @if(Session::has('status'))

                    <div class="alert alert-info alert-dismissible">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        <i class="fa fa-check"></i> {!! Session::get('status') !!}

                    </div>

                    @endif

                    {{ Form::open(array('autocomplete'=>'off')) }}

                    {{ csrf_field() }}

                    <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">

                        {{ Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'Email')) }}

                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                        @if ($errors->has('username'))

                        <span class="help-block">

                            <strong>{{ $errors->first('username') }}</strong>

                        </span>

                        @endif

                    </div>

                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">

                        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}

                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        @if ($errors->has('password'))

                        <span class="help-block">

                            <strong>{{ $errors->first('password') }}</strong>

                        </span>

                        @endif

                    </div>

                    <div class="row">

                        
                        <!-- /.col -->
                        <div class="col-md-8">
                          <div class="form-group has-feedback{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                    <div class="img-responsive captcha">
                                        <span id="captcha_image">
                                            {!! captcha_img() !!}
                                        </span>
                                            <a href="javascript:void(0);" onclick="reloadCaptcha();"> <span id="captcha_reload"><i class="fa fa-refresh"></i></span> Reload</a>
                                    </div>
                                    {{ Form::text('captcha', null, array('class'=>'form-control captcha','placeholder'=>'Enter Code')) }}
                                    {!! $errors->first('captcha', '<div class="err">:message</div>') !!}
                                      <script>
                                          function reloadCaptcha(){
                                              $('#captcha_reload').html('<i class="fa fa-refresh fa-spin"></i>');
                                              $.post("ajax/reload-captcha", {_token: '{!!csrf_token()!!}'}, function (data){
                                                  if (data != '' || data != undefined || data != null){
                                                      $('#captcha_image').html(data);
                                                      $('#captcha_reload').html('<i class="fa fa-refresh"></i>');
                                                  }
                                              });
                                          }
                                      </script>  
                                </div>  
                        </div>

                        <div class="col-xs-4">
                            <br><br>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">

                                <i class="fa fa-btn fa-sign-in"></i> Login

                            </button>

                        </div>

                        <!-- /.col -->

                    </div>

                    {{ Form::close() }}

                </div>

                <!-- /.login-box-body -->

            </div>

        </div>

    
       

    </body>

</html>

