<?php $ctrl = Request::segment(2); ?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user() ? Auth::user()->name : 'Demo'}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <!--<li class="header">MAIN NAVIGATION</li>-->
            <li class="treeview{{ $ctrl=='dashboard' ? ' active' : '' }}">
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview{{ $ctrl=='services' ? ' active' : '' }}"><a href="{{ URL::to('admin/service') }}" ><i class="fa fa-wrench"></i> <span>Service</span></a></li>
            <li class="treeview{{ $ctrl=='project' ? ' active' : '' }}"><a href="{{ URL::to('admin/project') }}" ><i class="fa fa-flag"></i> <span>Project</span></a></li>
            <li class="treeview{{ $ctrl=='feature' ? ' active' : '' }}"><a href="{{ URL::to('admin/feature') }}" ><i class="fa fa-industry"></i> <span>Feature</span></a></li>
            <li class="treeview{{ $ctrl=='testimonial' ? ' active' : '' }}"><a href="{{ URL::to('admin/testimonial') }}" ><i class="fa fa-user"></i> <span>Testimonial</span></a></li>
            <li class="treeview{{ $ctrl=='contact' ? ' active' : '' }}"><a href="{{ URL::to('admin/contact') }}" ><i class="fa fa-users"></i> <span>Contact</span></a></li>
            <li class="treeview{{ $ctrl=='site-setting' ? ' active' : '' }}"><a href="{{ URL::to('admin/site-setting') }}" ><i class="fa fa-gears"></i> <span>Settings</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>