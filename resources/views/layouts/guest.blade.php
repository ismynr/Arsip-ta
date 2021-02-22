<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title }} - PGSI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('stisla/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('selecao/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
      
      <div class="logo mr-auto">
          <h1 class="text-light"><a href="/">PGSI</a></h1>
      </div>

      @include('layouts.guest.navigation')
  </div>
  </header><!-- End Header -->

  <!-- ======= Main ======= -->
  <main id="main">
    
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2> {{ $title }} </h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li> {{ $title }} </li>
          </ol>
        </div>
      </div>
    </section>

    <section class="inner-page p-0">
      {{ $slot }}
    </section>
    
  </main><!-- End #main -->

  @include('layouts.guest.footer')

  <!-- JS Scripts -->
  <script src="{{ asset('stisla/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('stisla/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('stisla/js/scripts.js') }}"></script>
  <script src="{{ asset('selecao/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('selecao/js/main.js') }}"></script>
</body>
</html>
