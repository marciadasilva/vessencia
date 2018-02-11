@extends('layouts.master')

@section('title', 'Galeria de Receitas')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="/">Home /</a>
        <a href="#" class="active"> Galeria de Receitas</a>
      </div>
    </section>

    <section class="recipes">
        <!-- <div class="recipes"> -->
        @foreach($recipes as $recipe)
          <div class="recipes-item">
            <a href="/gallery-recipes/detail/{{ $recipe->id }}">
              @if($recipe->image)
                <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}">
              @elseif($recipe->video)
                <iframe
                   src="{{ asset($recipe->video) }}">
               </iframe>
              @endif
              <h4>{{ $recipe->title }}</h4>
              <p>{{ $recipe->subtitle }}</p>
            </a>
          </div>
          @endforeach
        <!-- </div> -->
        <!-- <div class="more">
          <a href="#" class="anim">Mais</a>
        </div> -->
    </section>

    @endsection
