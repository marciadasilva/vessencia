@extends('layouts.master')

@section('title', 'Galeria de Receitas')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="index.html">Home /</a>
        <a href="#" class="active"> Galeria de Receitas</a>
      </div>
    </section>

    <section class="recipes">
        <!-- <div class="recipes"> -->
          <div class="recipes-item">
            <a href="gallery-recipes-detail.html">
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
