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
    <script src="{{asset('assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
      <script src="{{asset('assets/vendor/timepicker/jquery.timepicker.min.js')}}"></script>
      <script src="{{asset('assets/vendor/datepair/datepair.min.js')}}"></script>
      <script src="{{asset('assets/vendor/datepair/jquery.datepair.min.js')}}"></script>
      
    <script src="{{asset('assets/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('assets/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('assets/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('assets/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{asset('assets/vendor/marked/marked.js')}}"></script>
    <script src="{{asset('assets/vendor/to-markdown/to-markdown.js')}}"></script>

        <!-- <script src="../assets/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../assets/js/Plugin/jt-timepicker.js"></script> -->
        <!-- <script src="../assets/js/Plugin/datepair.js"></script> -->
    
    <!-- Scripts -->
    <script src="{{asset('assets/js/Component.js')}}"></script>
    <script src="{{asset('assets/js/Plugin.js')}}"></script>
    <script src="{{asset('assets/js/Base.js')}}"></script>
    <script src="{{asset('assets/js/Config.js')}}"></script>
    
    <script src="{{asset('assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/menu.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/jt-timepicker.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/datepair.js')}}"></script>    
    <!-- Config -->
    <script src="{{asset('assets/js/config/colors.js')}}"></script>
    <script src="{{asset('assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="{{asset('assets/js/Site.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/switchery.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/aspieprogress.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/bootstrap-select.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('assets/js/BaseApp.js')}}"></script>
    <script src="{{asset('assets/js/App/Forum.js')}}"></script>
	<!-- <script src="{{asset('assets/examples/js/apps/forum.js')}}"></script> -->
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
