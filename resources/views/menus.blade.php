@extends('layouts.master')
@section('title', '5ª Essência - Menus')

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
  <ul>
    @foreach($menus as $menu)
      <li>
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

<section id="pagination">
  {{ $menus->links() }}
</section>
@endsection
