<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SMARTAGRO</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!-- Custom Authentication CSS -->
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    </head>
    <body class="hold-transition {{ $bodyClass ?? 'login-page' }}">
        {{ $slot }}

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <!-- Custom Authentication JS -->
        <script src="{{ asset('js/auth.js') }}"></script>
    </body>
</html>
