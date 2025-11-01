<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Solid State Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
  </head>
  <body class="is-preload">
    <div id="page-wrapper">
      @include('partials.nav')
      @yield('content')
      @include('partials.footer')
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
