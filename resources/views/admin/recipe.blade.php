@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
    onclick="window.location.href='/admin/recipe/create'">
      Nova Receita
  </button>

</main>
