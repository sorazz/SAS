<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <base href='{{ Request::root() }}/admin/' />
        <link href="favicon.ico" rel="shortcut icon" type="image/ico" />

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/flat/blue.css')}}">
        @stack('style')
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
        
        <link rel="stylesheet" href="{{asset('admin/dist/css/skins/skin-blue.css')}}">

        <!--lightbox-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin/css/lumos.css')}}">


        <link href="{{asset('admin/css/my.css')}}" rel="stylesheet" type="text/css"/>
      
    </head>
    <body class="hold-transition skin-blue sidebar-mini fixed">
        <!-- Site wrapper -->
        <div class="wrapper">

            @include('admin.partials.header')

            <!-- =============================================== -->

            @include('admin.partials.side')

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @section('main-title')
                    <h1>
                        <a href="{{ URL::to(Request::segment(1).'/'.Request::segment(2)) }}">
                            {{ ucfirst($title?:Request::segment(2)) }}
                        </a><small>{{ is_numeric(Request::segment(3)) ? Request::segment(4): Request::segment(3) }}</small>
                    </h1>
                    @show
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                        @if(isset($bredcrumb))
                        {!! $bredcrumb !!}
                        @endif
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> {!! Session::get('error') !!}
                    </div>
                    @endif
                    @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> {!! Session::get('message') !!}
                    </div>
                    @endif
                    @yield('content')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('admin.partials.footer')

            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="{{asset('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

  

        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- SlimScroll -->
        <script src="{{asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('admin/plugins/fastclick/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('admin/dist/js/demo.js')}}"></script>
        <!-- include lightbox j query-->
        <script src="{{asset('admin/js/lumos.js')}}"></script>
        <script src="{{asset('admin/js/common_admin.js')}}" type="text/javascript"></script>

        @stack('script')

        <!--custom js-->
        <script src="{{asset('admin/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
