<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{asset('/img/logotipo.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=League+Script|Monsieur+La+Doulaise" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Montserrat|Open+Sans|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- <link rel="stylesheet" href="{{ asset('css/lightbox.min.css')}}"> -->
  <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/script.css')}}" type="text/css">
  <title>@yield('title')</title>
</head>
  <body>

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/lightbox-plus-jquery.min.js')}}"></script>
    @include('sweet::alert')
  </body>
</html>
