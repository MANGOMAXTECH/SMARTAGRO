<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'SmartAgro — Connecting Farmers, Markets and Communities')</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-icons/font/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
  @include('partials.topbar')

  @include('partials.header')

  @include('partials.navbar')

  <div class="sa-mobile-overlay"></div>

  @hasSection('content')
    @yield('content')
  @endif
  

  @include('partials.footer')

  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/frontend.js') }}"></script>
  <script src="{{ asset('js/navbar.js') }}"></script>
  @stack('scripts')
</body>
</html>
