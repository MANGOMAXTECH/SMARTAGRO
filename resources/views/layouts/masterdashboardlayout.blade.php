<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'AGROAGRO')</title>

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('layouts.partials._navbar')

  @include('layouts.partials._sidebar')

  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('layouts.partials._footer')

</div>

@include('layouts.partials._scripts')
@stack('scripts')

</body>
</html>
