@extends('layouts.master')

@section('title', '5ª Essência')

@section('content')

@include('layouts.header')

<section class="hero" id="hero">
  <div class="hero-content-area">
    <a href="menus.html" class="btn">Cardápios</a>
    <a href="#" class="btn">Serviços</a>
  </div>
  <div id="slider">
    <figure>
      <img src="{{ asset('img/vcover1.jpg')}}">
      <img src="{{ asset('img/vcover2.jpg')}}">
      <img src="{{ asset('img/dinner-table.jpg')}}">
      <img src="{{ asset('img/vcover4.jpg')}}">
      <img src="{{ asset('img/vcover1.jpg')}}">
    </figure>
  </div>
</section>

<section class="greeting" id="greeting">
  <div class="grid">
    <div class="greeting-text">
      <h3 class="title">Bem vindos a 5ª Essência</h3>
      <hr>
      <p>
      @foreach($companies as $company)
        @if(isset($company->description))
          {{$company->description}}
        @else
          Descrição da empresa.
        @endif
      @endforeach
    </p>
    </div>
    <div class="greeting-img">
      <img src="{{ asset('img/logo.png')}}">
    </div>
  </div>
</section>

<section class="image-fixed first-image"></section>

<section class="best-sellers" id="best-sellers">
  <h3 class="title">Alguns dos nossos best-sellers</h3>
  <hr>
  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsum animi aut repellendus, deserunt quo libero praesentium tenetur soluta maiores!</p>

  <ul class="grid">
    <li class="small" style="background-image: url({{ asset('img/shrimp.jpg')}});"></li>
    <li class="large" style="background-image: url({{ asset('img/red-rice.jpg')}});"></li>
    <li class="large" style="background-image: url({{ asset('img/rice.jpg')}});"></li>
    <li class="small" style="background-image: url({{ asset('img/food.jpg')}});"></li>
  </ul>
</section>

<section class="image-fixed second-image"></section>

<section class="menus" id="menus">
  <div class="menus-img">
    @foreach($menus as $menu)
    <img src="{{asset($menu->image)}}" alt="{{$menu->name}}">
    @endforeach
  </div>
  <div class="menus-text">
    <div>
      <h3 class="title">Cardápios</h3>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis consectetur sint enim libero, labore qui, nesciunt, itaque animi tenetur ipsa ea odio recusandae corrupti ipsam quasi fugiat, totam modi. Officia nostrum, illo aspernatur voluptates accusamus, id provident, sequi voluptatem molestiae sapiente autem, expedita debitis ducimus sit quibusdam fugit harum corporis?</p>
    </div>
    <div>
      <a href="/categories" class="anim">Mais</a>
    </div>
  </div>
</section>

<section class="image-fixed third-image"></section>

<section class="services" id="services">
  <div class="services-text">
    <div>
      <h3 class="title">Serviço Customizado</h3>
      <hr>
      <p>The private dining facilities are ideal for small, intimate lunch and dinner parties, private celebrations and corporate dining for up to 16 guests.</p>
    </div>
    <div>
      <a href="/services" class="anim">Mais</a>
    </div>
  </div>
  <div class="services-img">
    @foreach($services as $service)
    <img src="{{asset($service->image)}}" alt="{{$service->name}}">
    @endforeach
  </div>
</section>

<section class="image-fixed forth-image"></section>

<section class="gallery" id="gallery">
  <h3 class="title">Galerias</h3>
  <hr>
  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque adipisci molestiae, quam repellendus eos molestias amet ducimus, cumque tempore. </p>

  <ul class="grid">
  <a href="">
    <li>
      <i class=" fa fa-cutlery fa-4x"></i>
      <h4>Receitas</h4>
      <p>Looking for the complete experience? Take a tour with one of our experts. They'll show you secrets that you're likely to miss otherwise.</p>
    </li>
  </a>
  <a href="/gallery-photos">
    <li>
      <i class="fa fa-camera-retro fa-4x"></i>
      <h4>Fotos</h4>
      <p>Want to experience nature's beauty without all of that annoying exercise? Take a photo tour on one of our mountain buses.</p>
    </li>
  </a>
  </ul>
</section>

<section class="image-fixed fifth-image"></section>

<section class="news">
  <h3 class="title">Notícias Recentes</h3>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aspernatur nostrum distinctio ipsam obcaecati amet. </p>
  <div class="thumbnail">
    <div class="card">
      <a href=""><img src="{{ asset('img/guardanapo.jpg')}}" alt=""></a>
      <p>Title</p>
    </div>
    <div class="card">
      <a href=""><img src="{{ asset('img/guardanapo.jpg')}}" alt=""></a>
      <p>Title</p>
    </div>
    <div class="card">
      <a href=""><img src="{{ asset('img/guardanapo.jpg')}}" alt=""></a>
      <p>Title</p>
    </div>
  </div>
  <a href="" class="more anim">Mais</a>
</section>

<section class="image-fixed sixth-image"></section>

<section class="contact" id="contact">
	<h3 class="title">Formas de Contato</h3>
  <hr>
  <div class="social">
    <a href="https://www.facebook.com/vessencia/">
      <i class="fa fa-facebook-square fa-4x"></i>facebook.com/vessencia</a>
    <a href="#"><i class="fa fa-whatsapp fa-4x"></i> (55) 9955-9990</a>
    <a href="#"><i class="fa fa-envelope-o fa-4x"></i> vessencia@outlook.com</a>
    <!-- <a href="#"><i class="fa fa-commenting-o fa-4x"></i>Nos diga um Oi</a> -->
  </div>
</section>

<script>
  if (document.documentElement.style.scrollBehavior === undefined) { smoothScroll.init(); }

  window.onscroll = function() {
    var greeting = document.getElementById("greeting");
    var greetingImg = document.querySelector(".greeting .greeting-img");
    var greetingPosition = greeting.offsetTop - 500;
    var greetingEnd = greeting.scrollHeight + greetingPosition + 300;

    slide(greetingImg, greetingPosition, greetingEnd);

    var services = document.getElementById("services");
    var servicesImg = document.querySelector(".services .services-img");
    var servicesPosition = services.offsetTop - 500;
    var servicesEnd = services.scrollHeight + servicesPosition + 300;

    slide(servicesImg, servicesPosition, servicesEnd);

    var menus = document.getElementById("menus");
    var menusImg = document.querySelector(".menus .menus-img");
    var menusPosition = menus.offsetTop - 500;
    var menusEnd = menus.scrollHeight + menusPosition + 300;

    slide(menusImg, menusPosition, menusEnd);

    navScroll();
  };

  function slide(element, elementPosition, elementEnd) {
    if (window.pageYOffset >= elementPosition) {
      element.classList.add("move")
    } else {
      element.classList.remove("move");
    }

    if (window.pageYOffset > elementEnd){
      element.classList.remove("move");
    }
  }

  function navScroll(){
    const menu = document.querySelector('#navbar');

    if (window.pageYOffset >= (window.innerHeight/2)){
      menu.classList.add("navbar-background");
    } else {
      menu.classList.remove("navbar-background");
    }
  }
</script>

@endsection
