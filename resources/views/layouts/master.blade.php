<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="5ª Essência" />
  <meta property="og:description"   content="Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas." />
  <meta property="og:image"         content="{{ asset('img/logo.png')}}" />

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
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
        CKEDITOR.replace( 'instructions' );
    </script>
    @include('sweet::alert')
  </body>
</html>
