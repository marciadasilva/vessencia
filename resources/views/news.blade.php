@extends('layouts.master')

@section('title', 'Notícias Recentes - 5ª Essência')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="/">Home /</a>
        <a href="#" class="active"> Notícias Recentes</a>
      </div>
    </section>

    <section class="news-section">
        <!-- <div class="News"> -->
          <a class="article">
            <figure class="article-image">
              <img src="{{ asset('img/guardanapo.jpg')}}" alt="example">
            </figure>
            <div class="article-body">
              <h2 class="article-title">
                Título da Notícia
              </h2>
              <p class="article-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto molestias illum, eius harum ratione doloremque.
              </p>
              <footer class="article-info">
                data
              </footer>
            </div>
          </a>

        <!-- </div> -->
        <!-- <div class="more">
          <a href="#" class="anim">Mais</a>
        </div> -->
    </section>

@endsection
