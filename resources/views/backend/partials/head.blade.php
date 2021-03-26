<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">    
    {{--<title>{{general_setting()->title}} | @yield('title','admin')</title>--}}
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/flag-icon-css/flag-icon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-markdown/bootstrap-markdown.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-select/bootstrap-select.css')}}">
	<link rel="stylesheet" href="{{asset('assets/examples/css/apps/forum.css')}}">
	<link rel="stylesheet" href="{{asset('assets/examples/css/forms/advanced.css')}}">
	<link rel="stylesheet" href="{{asset('assets/examples/css/widgets/chart.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/chartist/chartist.css')}}">
	<link rel="stylesheet" href="{{asset('assets/examples/css/dashboard/team.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/chartist/chartist.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/fullcalendar/fullcalendar.css')}}">
	<!-- <link rel="stylesheet" href="../assets/examples/css/apps/calendar.css"> -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/asscrollable/asScrollable.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/chartist/chartist.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/tablesaw/tablesaw.css')}}">
	<link rel="stylesheet" href="{{asset('assets/examples/css/dashboard/v2.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">    
    <!-- Fonts -->        
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/examples/css/uikit/icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
	<link rel="stylesheet" href="{{asset('assets/examples/css/pages/site-map.css')}}">    
    <!--[if lt IE 9]>
    <script src="{{asset('assets/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{asset('assets/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('assets/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    @stack('styles')
    <!-- Scripts -->
    <script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
  </head>