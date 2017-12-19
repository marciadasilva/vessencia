@extends('layouts.master')
@section('title', 'Cardápios - 5ª Essência')

@section('content')
@include('layouts.header')

<section id="cardapios">
  <header>

    @if(isset($category))
        {{$category->name}}
      @else
        Todas as Categorias
    @endif

  </header>

    @if(sizeof($menus) <= 3)
      <ul class = "cardapio-3">
    @elseif(sizeof($menus)== 4 || (sizeof($menus) % 4) == 0)
      <ul class = "cardapio-4">
    @elseif(sizeof($menus)== 5 || (sizeof($menus) % 5) == 0)
      <ul class = "cardapio-5">
    @elseif((sizeof($menus) % 3) == 0)
      <ul class = "cardapio-6">
    @else
      <ul class = "cardapio-4">
    @endif
    @foreach($menus as $menu)
      <li class="menus-li">
        <div class="cards">
          <img src="{{asset($menu->image)}}" alt="card">
          <div class="cards-content">
            <h3 class="cards-title">{{$menu->name}}</h3>
            <hr>
            <p>{{$menu->description}}</p>
          </div>
        </div>
      </li>
    @endforeach
    </ul>
</section>

<section>
  {{ $menus->links() }}
</section>
@endsection
