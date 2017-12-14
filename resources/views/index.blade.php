@extends('layouts.master')
@section('title', '5ª Essência')

@section('content')

<div class="modal simpleModal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeBtn">&times;</span>
      <h2>5ª Essência Gastronomia e Eventos</h2>
    </div>
    <div class="modal-body">
      <p>Entre em contato conosco</p>
      <p>Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.</p>
    </div>
    <div class="modal-footer">
      <h3>5ª Essência Gastronomia e Consultoria</h3>
    </div>
  </div>
</div>

<div class="modal simpleModal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeBtn">&times;</span>
      <h2>5ª Essência Gastronomia e Eventos</h2>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
      <h3>5ª Essência Gastronomia e Consultoria</h3>
    </div>
  </div>
</div>

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
          <p>Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.</p>
          <p>Empresa especializada em eventos, festas, corporativos, serviços de alimentação e elaboração de menus especiais, treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.</p>
        </div>
      </div>
    </section>


  <section id="section-b" class="grid">
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
                  {{--<a href="">--}}
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
                  {{--</a>--}}
                @endforeach
              </ul>
  </section>

    <!-- Section C -->
    <section id="section-c" class="grid">
      <div class="content-wrap">
        <h2 class="content-title">Treinamentos e Consultorias</h2>
        <p>Treinamentos e consultorias sob a coordenação do Chef Internacional André Pinheiro Machado. Experiência em Cozinha do Mundo, Alta Gastronomia e Excelência no atendimento das áreas gastronômicas.</p>
        <img src="img/workshop-carne-e-molho.jpg" alt="treinamentos">
      </div>
    </section>

    <!-- Section D -->
    <section id="section-d" class="grid">
      <div class="content-wrap">
        <h4>Ristretto Grãos e Gastronomia</h4>
        <a href="#"><img src="img/ristretto.jpg" alt="ristretto"></a>
      </div>
    </section>

    <!-- Section E -->
    <section id="section-e" class="grid">
      <div class="box">
        <button id="modalBtn"><h2 class="content-title">Contate-nos</h2></button>
        <p>Ligar (55) 9955-9990
        @vessencia<p>
        <p>vessencia@outlook.com</p>
      </div>
      <div class="box">
        <h2 class="content-title">Sobre a nossa Empresa</h2>
        <p>Empresa especializada na realização de eventos, festas, produção de alimentos, treinamentos, oficinas e consultoria em gastronomia.</p>
      </div>
    </section>
  </main>
@endsection
