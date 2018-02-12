@extends('layouts.master')

@section('title', 'Galeria de Receitas')

@section('content')

@include('layouts.header')

<section class="recipe">
  <div class="recipe-card">
    <p>Tempo de Preparo: {{ $recipe->time_preparation }}</p>
    <hr>
    <p>Rendimento: {{ $recipe->yield }}</p>
  </div>
  <div class="recipe-img">
    <img src="{{asset($recipe->image)}}" alt="{{asset($recipe->title)}}">
  </div>


  <div class="recipe-content">
    <div class="recipe-content-ingredients">
      <h4>Ingredientes</h4>
      <hr>
      <p>{!! $recipe->body !!}</p>

    </div>
    <div class="recipe-instructions">
      <h3 class="title">{!! $recipe->title !!}</h3>
      <hr>

      <iframe
        width="560"
        height="315"
        src="{{ asset($recipe->video) }}"
        frameborder="0"
        allowfullscreen
      ></iframe>

      <div>
        <h4>Instruções</h4>
        <p>{!! $recipe->instructions !!}</p>

      </div>
    </div>
  </div>
</section>

@endsection
