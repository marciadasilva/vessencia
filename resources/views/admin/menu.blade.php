@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main id="admin-menu">

  <section>
    <button type="button" name="button" class="btn-new-menu">Novo Cardápio</button>
    <ul>
      <li>
            <div class="cards">
              <img src="{{asset('img/shrimp.jpg')}}" alt="card">
              <div class="cards-content">
                <h3 class="cards-title">Cardápio 1</h3>
                <hr>
                <button type="button" name="btnEditar">Editar</button>
                <button type="button" name="btnDeletar">Deletar</button>
              </div>
            </div>
      </li>
    </ul>
  </section>
</main>
