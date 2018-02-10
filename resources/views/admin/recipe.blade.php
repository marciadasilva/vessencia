@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
    onclick="window.location.href='/admin/recipe/create'">
      Nova Receita
  </button>

  <div class="show-card">
    @foreach($recipes as $recipe)
    <div class="card-items">
      <img class="card_img" src="{{ asset($recipe->image) }}" alt="{{ asset($recipe->title) }}">
      <div class="card_description">
        <h2>{{ $recipe->title }}</h2>
        <p>{{ $recipe->subtitle }}</p>
        <p>{!! $recipe->body !!}</p>
        <!-- fazer o tratamendo com o Purifier -->
      </div>

      <div class="card_buttons">
        <a href="/admin/recipe/edit/{{ $recipe->id }}">
          <i class="fa fa-pencil"></i>
        </a>

        <a href="#">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>

    </div>
    @endforeach
  </div>


</main>
