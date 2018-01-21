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
    <h3 class="title">Buffet</h3>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nihil ut totam corporis rem pariatur fuga veritatis officiis beatae sed laboriosam iste error voluptatum numquam, harum molestias dolore debitis aspernatur repudiandae quam rerum eligendi itaque animi. Veniam similique quae magnam!</p>
  </div>
  <div>
    <form action="/" method="post">
      <div class="group-custom">
        <div>
          <h1>Entre em contato conosco</h1>
        </div>
        <div class="field">
          <label for="nome">Nome</label>
          <input type="nome" name="nome" id="nome" value="">
        </div>
        <div class="field">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="">
        </div>
        <div class="field">
          <label for="subject">Assunto</label>
          <input type="text" name="subject" id="subject" value="">
        </div>
        <div class="field">
          <label for="message">Mensagem</label>
          <input type="message" name="message" id="message" value="">
        </div>
        <div class="btn-form">
          <button type="submit">Entrar</button>
        </div>
      </div>
    </form>
  </div>
  <div class="related-news">
    <h3 class="title"> Noticias relacionadas</h3>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, a!</p>
  </div>
</section>
@endsection
