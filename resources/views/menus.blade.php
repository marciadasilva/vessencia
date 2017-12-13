@extends('layouts.master')
@section('title', '5ª Essência - Menus')

@section('content')
@include('layouts.header')

<section id="cardapios">
  <ul>
    @foreach($menus as $menu)
      <li>
        <div class="cards">
          <img src="{{$menu->image}}" alt="card">
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
  Este é o pagination
</section>
@endsection
