<!DOCTYPE html>
<head>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') | {{ config('app.name', 'Admin Dashboard') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!! HTML::style('dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! HTML::style('dist/css/skins/_all-skins.min.css') !!}
    <!-- iCheck -->
    {!! HTML::style('plugins/iCheck/flat/blue.css') !!}
    <!-- Morris chart -->
    {!! HTML::style('plugins/morris/morris.css') !!}
    <!-- jvectormap -->
    {!! HTML::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    <!-- Date Picker -->
    {!! HTML::style('plugins/datepicker/datepicker3.css') !!}
    <!-- Daterange picker -->
    {!! HTML::style('plugins/daterangepicker/daterangepicker.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! HTML::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
    <!--partial css -->
    @stack('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('backend.partial.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('backend.partial.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
@include('backend.partial.copyright')
    <!-- Control Sidebar -->
@include('backend.partial.controlsidebar')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
{!! HTML::script('plugins/jQuery/jquery-2.2.3.min.js') !!}
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
{!! HTML::script('plugins/morris/morris.min.js') !!}
<!-- Sparkline -->
{!! HTML::script('plugins/sparkline/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! HTML::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}

{!! HTML::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
{!! HTML::script('plugins/knob/jquery.knob.js') !!}
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
{!! HTML::script('plugins/daterangepicker/daterangepicker.js') !!}
<!-- datepicker -->
{!! HTML::script('plugins/datepicker/bootstrap-datepicker.js') !!}
<!-- Bootstrap WYSIHTML5 -->
{!! HTML::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
<!-- Slimscroll -->
{!! HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! HTML::script('plugins/fastclick/fastclick.js') !!}
<!-- AdminLTE App -->
{!! HTML::script('dist/js/app.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! HTML::script('dist/js/pages/dashboard.js') !!}
<!-- AdminLTE for demo purposes -->
{!! HTML::script('dist/js/demo.js') !!}
<!--partial js -->
@stack('js')
</body>
</html>
