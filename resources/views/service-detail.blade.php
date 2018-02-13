@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/services">Serviços /</a>
    <a href="/services" class="active">{{$service->name}}</a>
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section class="service-detail">
  <div>
    <img src="{{asset($service->image)}}" alt="{{$service->name}}">
  </div>
  <div class="service-detail-text">
    <h3 class="title">{{$service->name}}</h3>
    <hr>
    <p>{{$service->description}}</p>
    <p class="click-here">
      <span>Para contratar este serviço &nbsp</span>
      <a href="/contact">Entre em Contato.</a>
    </p >
  </div>

    <div class="related-news">
      <h3 class="title"> Notícias relacionadas</h3>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, a!</p>

      <div class="related-news-items">
        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>

        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>

        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>
      </div>
        <a href="#" class="anim">Mais</a>
      </div>
    </div>
  </section>
@endsection
