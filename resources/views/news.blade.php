@extends('layouts.master')

@section('title', 'Notícias Recentes - 5ª Essência')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="index.html">Home /</a>
        <a href="#" class="active"> Notícias Recentes</a>
      </div>
    </section>

    <section class="recipes">
        <!-- <div class="recipes"> -->
          <div class="recipes-item">
            <a href="news-detail.html">
              <img src="assets/img/peixe.jpg" alt="example">
              <h4>Lorem ipsum dolor sit amet!</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
          </div>

        <!-- </div> -->
        <!-- <div class="more">
          <a href="#" class="anim">Mais</a>
        </div> -->
    </section>

@endsection
