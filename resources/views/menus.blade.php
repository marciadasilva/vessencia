@extends('layouts.master')
@section('title', 'Cardápios - 5ª Essência')

@section('content')
@include('layouts.header')

<section class="all-cards bread-crumbs">
  <header>

    @if(isset($category))
      <a href="/">Home</a> /
      <a href="/menus">Cardápios</a> /
      <a class="active" href="/menus">{{$category->name}}</a>
      @else
        <a href="/">Home</a> / <a class="active" href="/menus">Cardápios</a>
    @endif

  </header>
<div class="show-card">
  @foreach($menus as $menu)
    <div class="card-items">
        <a href="/menus/{{$menu->category->id}}/{{$menu->id}}">
            <img class="card_img" src="{{asset($menu->image)}}" alt="{{$menu->name}}">
        </a>
      <div class="card_description">
          <h2>{{$menu->name}}</h2>
          <hr>
          <p>{{$menu->description}}</p>
          <p><a href="/menus/{{$menu->category->id}}">{{$menu->category->name}}</a></p>
      </div>

    </div>
  @endforeach

</div>

</section>

<section>
  {{ $menus->links() }}
</section>
@endsection
