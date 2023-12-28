<header class="main-header">
    <!-- Logo -->
    <a href="{{ URL::to('admin/dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="{{ asset('images/logo-40x40.png') }}" class="img-circle" width="40" alt="Site Logo">
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SAS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        @yield('search')
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Auth::user() ? Auth::user()->name : 'Demo'}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <p>{{Auth::user() ? Auth::user()->email : 'Demo'}}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-7 text-left">
                                    <a href="#">Change Password&nbsp;&nbsp;<i class="fa fa-key"></i></a>
                                </div>
                                <div class="col-xs-5 text-right">
                                    <a href="{{ URL::to('/') }}" target="_blank">Visit Site&nbsp;&nbsp;<i class="fa fa-globe"></i></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
<!--                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>-->
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="{{ URL::to('admin/site-setting') }}"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>