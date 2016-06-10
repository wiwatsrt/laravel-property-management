<!-- Left side column. contains the sidebar -->
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/default-avatar.png') }}" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ (Request::is('admin/dashboard*') ? 'active' : '') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('general.dashboard') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/locations*') ? 'active' : '') }}">
                <a href="{{ route('admin.locations.index') }}">
                    <i class="fa fa-globe"></i> <span>{{ trans('general.locations') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/users*') ? 'active' : '') }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-user"></i> <span>{{ trans('general.users') }}</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->