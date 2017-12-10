@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main id="admin-menu">

  <section>
    <button type="button" name="button">Novo Cardápio</button>
    <ul>
      <li>
          <a href="#">
            <div class="cards">
              <img src="{{asset('img/shrimp.jpg')}}" alt="card">
              <div class="cards-content">
                <h3 class="cards-title">Cardápio 1</h3>
                <hr>
                <button type="button" name="button">Editar</button>
                <button type="button" name="button">Deletar</button>
              </div>
            </div>
          </a>
      </li>
    </ul>
  </section>
</main>
