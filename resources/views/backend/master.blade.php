<!doctype html>
<html lang="en">
@include('backend.partials.head')
<body class="animsition site-navbar-small page-aside-left site-menubar-hide" style="animation-duration: 800ms; opacity: 1;">
@include('backend.partials.top_header')
@include('backend.partials.nav')
@yield('content')
@include('backend.partials.footer')
@include('backend.partials.scripts.general')
@include('backend.partials.msg')
</body>
</html>