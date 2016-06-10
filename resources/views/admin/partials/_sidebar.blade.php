<!-- Left side column. contains the sidebar -->
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE-2.3.3/dist/img/user2-160x160.jpg') }}" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ route('admin.dashboard') }}"><span>{{ trans('admin.dashboard') }}</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->