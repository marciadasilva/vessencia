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

      @if(isset($recipe->video))
        <iframe
          width="560"
          height="315"
          src="{{ asset($recipe->video) }}"
          frameborder="0"
          allowfullscreen
        ></iframe>
      @else
        <!-- <img src="{{asset($recipe->image)}}" alt="{{asset($recipe->title)}}"> -->
      @endif

      <div>
        <h4>Instruções</h4>
        <p>{!! $recipe->instructions !!}</p>
      </div>
    </div>
  </div>

  <iframe
    src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F159.65.65.38/gallery-recipes/detail/{{$recipe->id}}&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId"
    width="88"
    height="20"
    style="border:none;overflow:hidden;margin-bottom:1em;"
    scrolling="no"
    frameborder="0"
    allowTransparency="true">
  </iframe>
</section>

@endsection
