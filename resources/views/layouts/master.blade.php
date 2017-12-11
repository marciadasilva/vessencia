<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
  <title>@yield('title')</title>
</head>
<body>

  @yield('content')

  @include('layouts.footer')

  <script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
