@extends('layouts.master')
@section('title', '5ª Essência')

@section('content')

@include('layouts.modal')

<!-- Header Showcase -->
<header id="showcase" class="grid">
  <div class="bg-image"></div>
  <div class="content-wrap">
    <a href="/menus" class="button">Conheça nosso cardápio</a>
  </div>
</header>

<!-- Main Area -->
<main id="main">
  <!-- Section A -->
  <section id="section-a" class="grid">
    <div class="content-wrap">
      <h2 class="content-title">5ª Essência Gastronomia e Eventos</h2>
      <div class="content-text">
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
  </section>

  <section id="section-b" class="">
    <h1>Especialidades do Chef</h1>

    @if(sizeof($categories) <= 3)
    <ul class = "cardapio-3">
    @elseif(sizeof($categories)== 4 || (sizeof($categories) % 4) == 0)
    <ul class = "cardapio-4">
    @elseif(sizeof($categories)== 5 || (sizeof($categories) % 5) == 0)
    <ul class = "cardapio-5">
    @elseif((sizeof($categories) % 3) == 0)
    <ul class = "cardapio-6">
    @else
    <ul class = "cardapio-4">
    @endif
    @foreach($categories as $category)
      <a href="/menus/{{$category->id}}">
        <li>
          <div class="cards">
            <img src="{{$category->image}}" alt="card">
            <div class="cards-content">
              <h3 class="cards-title">{{$category->name}}</h3>
              <hr>
              <p>{{$category->description}}</p>
            </div>
          </div>
        </li>
      </a>
    @endforeach
    </ul>
  </section>

  <!-- Section C -->
  <section id="section-c" class="grid">
    <div class="content-wrap">
      <h1>Contrate um dos serviços da 5ª Essência</h1>
      @foreach($services as $service)
        <div class="card-service">
          <div class="description-service">
            <h1>{{$service->name}}</h1>
            <P>{{$service->description}}</P>
          </div>
          <div class="image-service">
            <a href="/services"><img src="{{asset($service->image)}}" alt=""></a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Section D -->
  <section id="section-d" class="grid">
    <div class="content-wrap">
      <h4>Ristretto Grãos e Gastronomia</h4>
      <a href="https://www.facebook.com/ristrettograosegastronomia/" target="_blank">
        <img src="img/ristretto.jpg" alt="ristretto">
      </a>
    </div>
  </section>

  <!-- Section E -->
  <section id="section-e" class="grid">
    <div class="box">
      <div> <h2 class="content-title">Contate-nos</h2> </div>
      <div id="two-col">
        <p>
          <i class="fa fa-whatsapp" aria-hidden="true"></i> (55) 9 9955-9990
        </p>

        <p>
          <a
            @foreach($companies as $company)
              @if(isset($company->facebook))
                href="{{$company->facebook}}"
              @else
                href="https://www.facebook.com/vessencia/"
              @endif
            @endforeach
            target="_blank"
          >  <!-- fecha <a> -->
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            @foreach($companies as $company)
              @if(isset($company->facebook))
                {{str_replace("https://www.", "",$company->facebook)}}
              @else
                facebook.com/vessencia/
              @endif
            @endforeach
          </a>
        </p>

        <p>
          <a href="/contact">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            @foreach($companies as $company)
              @if(isset($company->email))
                {{$company->email}}
              @else
                vessencia@outlook.com
              @endif
            @endforeach
          </a>
        </p>

        <p>Aberto de segunda à sabado</p>

        <p>Horário de Atendimento:
          @foreach($companies as $company)
            @if(isset($company->address))
              {{$company->address}}
            @else
              08:00 às 18:00
            @endif
          @endforeach
        </p>
      </div>
    </div>

    <div class="box">
      <div id="center-col">
        <button id="modalBtn"><h2 class="content-title">Sobre a nossa Empresa</h2>
        <p>
          @foreach($companies as $company)
            @if(isset($company->about))
              {{$company->about}}
            @else
              Empresa especializada na realização de eventos, festas, produção de alimentos,
              treinamentos, oficinas e consultoria em gastronomia.
            @endif
          @endforeach
        </p>
        </button>
      </div>
    </div>
  </section>
</main>
@endsection
