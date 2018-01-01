@extends('layouts.master')
@section('title', 'Cardápios - 5ª Essência')

@section('content')
@include('layouts.header')

<section class="all-cards bread-crumbs">
  <header>

    @if(isset($category))
        {{$category->name}}
      @else
        <a href="/">Home</a> / <a class="active" href="/menus">Cardápios</a>
    @endif

  </header>
<div class="show-card">
  @foreach($menus as $menu)
    <div class="card-items">
      <img class="card_img" src="{{asset($menu->image)}}" alt="{{$menu->name}}">
      <div class="card_description">
          <h2>{{$menu->name}}</h2>
          <hr>
          <p>{{$menu->description}}</p>
          <p>{{$menu->category->name}}</p>
      </div>

    </div>
  @endforeach

</div>

</section>

<section>
  {{ $menus->links() }}
</section>
@endsection
