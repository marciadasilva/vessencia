@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
    onclick="window.location.href='/admin/recipe/create'">
      Nova Receita
  </button>

  <div class="show-card">
    <div class="card-items">
      <img class="card_img" src="#" alt="example">
      <div class="card_description">
        <h2>Batata</h2>
        <p>Batata recheada</p>
        <p>Batata recheada com bastante queijo</p>
      </div>

      <div class="card_buttons">
        <a href="#">
          <i class="fa fa-pencil"></i>
        </a>

        <a href="#">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>

    </div>
  </div>

  <div class="show-card">
    <div class="card-items">
      <img class="card_img" src="#" alt="example">
      <div class="card_description">
        <h2>Batata</h2>
        <p>Batata recheada</p>
        <p>Batata recheada com bastante queijo</p>
      </div>

      <div class="card_buttons">
        <a href="#">
          <i class="fa fa-pencil"></i>
        </a>

        <a href="#">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>

    </div>
  </div>

  <div class="show-card">
    <div class="card-items">
      <img class="card_img" src="#" alt="example">
      <div class="card_description">
        <h2>Batata</h2>
        <p>Batata recheada</p>
        <p>Batata recheada com bastante queijo</p>
      </div>

      <div class="card_buttons">
        <a href="#">
          <i class="fa fa-pencil"></i>
        </a>

        <a href="#">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>

    </div>
  </div>

</main>
