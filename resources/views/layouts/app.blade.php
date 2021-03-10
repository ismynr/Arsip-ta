<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title }} - {{ Auth::user()->myRole() }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('tempelate/stisla/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('tempelate/stisla/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('tempelate/stisla/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            <!-- ======= Navbar ======= -->
            @include('layouts.app.navigation')

            <!-- ======= Sidebar ======= -->
            @include('layouts.app.sidebar')

            <!-- ======= Main ======= -->
            <div class="main-content">
                <section class="section">
                <div class="section-header">
                    <h1> {{ $title }} </h1>
                </div>

                {{ $slot }}
                </section>
            </div>

            <!-- ======= Main ======= -->
            @include('layouts.app.footer')
        </div>
    </div>

  <!-- JS Scripts -->
  <script src="{{ asset('tempelate/stisla/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/popper.min.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/moment.min.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/stisla.js') }}"></script>
  <script src="{{ asset('tempelate/stisla/js/scripts.js') }}"></script>
</body>
</html>