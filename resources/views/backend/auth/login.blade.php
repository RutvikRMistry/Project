<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<title>{{general_setting()->title}} | Login</title>--}}
    {{--<link rel="shortcut icon" href="{{general_setting()->favicon}}">--}}
    	
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.min.css')}}"">
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}"">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/examples/css/pages/login-v3.css')}}">
    `
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
	
</head>
<body class="animsition page-login-v3 layout-full">

 <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
          <div class="panel-body">
            <div class="brand">
              <img class="brand-img" src="{{asset('assets/images/logo.png')}}" alt="...">
              <h2 class="brand-text font-size-18">Admin Login</h2>
            </div>
            <form  action="{{route('admin.login.post')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="form-group form-material floating" data-plugin="formMaterial">
				   <input type="text" class="form-control" name="username" required />
				   <label class="floating-label">Username</label>
				</div>
				<div class="form-group form-material floating" data-plugin="formMaterial">
					<input type="password" class="form-control" name="password" required />
					<label class="floating-label">Password</label>
				</div>
              <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                  <input type="checkbox" id="inputCheckbox" name="remember">
                  <label for="inputCheckbox">Remember me</label>
                </div>
                <!--<a class="float-right" href="forgot-password.html">Forgot password?</a>-->
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
            </form>
            
          </div>
        </div>

      </div>
    </div>
    <!-- End Page -->

  <!--  
<div class="login-wrap">
    <div class="login-html"  style="text-align: center;">

<div class="logo"  style="margin-bottom: 40px;">
<img src="{{asset('assets/logo.png')}}" alt="logo" style="max-width: 100%;">
</div>

        <input id="tab-1" type="radio" name="tab" class="sign-in"  checked><label for="tab-1" class="tab">Admin Login</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

        <div class="login-form" style="margin-top: 40px;">
            <div class="sign-in-htm">


                <form  action="{{route('admin.login.post')}}" method="post">@csrf
                    <div class="group">
                        <input type="text" class="input" id="username"  name="username"  placeholder="Username" >
                    </div>
                    <div class="group">
                        <input type="password" class="input" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="group">
                        <input type="submit" class="button" value="Log In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 -->
 
 <!-- Core  -->
    <script src="{{asset('assets/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('assets/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('assets/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('assets/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('assets/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('assets/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('assets/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Scripts -->
    <script src="{{asset('assets/js/Component.js')}}"></script>
    <script src="{{asset('assets/js/Plugin.js')}}"></script>
    <script src="{{asset('assets/js/Base.js')}}"></script>
    <script src="{{asset('assets/js/Config.js')}}"></script>
    
    <script src="{{asset('assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/menu.js')}}"></script>
    
    <!-- Config -->
    <script src="{{asset('assets/js/config/colors.js')}}"></script>
    <script src="{{asset('assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="{{asset('assets/js/Site.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/switchery.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/jquery-placeholder.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/material.js')}}"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
</body>
</html>

