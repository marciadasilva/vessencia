@extends('layouts.master')
@section('title', '5ª Essência - Menus')

@section('content')
@include('layouts.header')

<section id="cardapios">
  <ul>
      <li>
        <div class="cards">
          <img src="img/shrimp.jpg" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">Categoria 1</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Velit, officiis, cumque.</p>
          </div>
        </div>
      </li>

      <li>
        <div class="cards">
          <img src="img/shrimp.jpg" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">Categoria 1</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Velit, officiis, cumque.</p>
          </div>
        </div>
      </li>

      <li>
        <div class="cards">
          <img src="img/shrimp.jpg" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">Categoria 1</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Velit, officiis, cumque.</p>
          </div>
        </div>
      </li>

      <li>
        <div class="cards">
          <img src="img/shrimp.jpg" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">Categoria 1</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Velit, officiis, cumque.</p>
          </div>
        </div>
      </li>

      <li>
        <div class="cards">
          <img src="img/shrimp.jpg" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">Categoria 1</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Velit, officiis, cumque.</p>
          </div>
        </div>
      </li>
    </ul>
</section>

<section id="pagination">
  Este é o pagination
</section>
@endsection
