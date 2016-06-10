<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phuket Tourist Police</title>
    <!-- Bootstrap -->
    <link href="{{ asset('AdminLTE-2.3.3/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.3/plugins/select2/select2.min.css') }}">
    <!-- DateTime Picker -->
    <link href="{{ asset('AdminLTE-2.3.3/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2.3.3/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
@include('admin.partials._head')

@include('admin.partials._sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @yield('content-header')
    </section>
    <!-- Content Wrapper. Contains page content -->
    <section class="content">
        @yield('content')
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016 <a href="http://www.srisattha.com">Wiwat Srisattha</a>.</strong> All rights reserved.
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('AdminLTE-2.3.3/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('AdminLTE-2.3.3/plugins/select2/select2.full.min.js') }}"></script>
<!-- DateTime Picker -->
<script src="{{ asset('AdminLTE-2.3.3/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('AdminLTE-2.3.3/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminLTE-2.3.3/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-2.3.3/dist/js/app.min.js') }}"></script>
@yield('javascript')
<!-- Custom Js -->
@yield('custom_js')
</body>
</html>