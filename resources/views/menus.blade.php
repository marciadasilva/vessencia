@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/menus">Cardápios </a>
    @if(isset($category))
    <a href="#" class="active">{{$category->name}} </a>
    @else

    @endif
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section>
  <!--  Caso onde é pra mostrar pratos de uma categoria só -->
  @if(isset($category))
    <h3 class="title"> {{$category->name}}</h3>
    <hr>
    <div class="menu-cards">
      @foreach($menus as $menu)
        <div class="card">
          <img src="{{asset($menu->image)}}" alt="">
          <div class="card-content">
            <h4>{{$menu->name}}</h4>
            <p>{{$menu->description}}</p>
          </div>
      </div>
      @endforeach
    </div>
    <!--  pagination só mostra quando é para uma única categoria -->
    {{ $menus->links() }}
  @else
  <!--  Caso onde é pra mostrar pratos de todas as categorias -->
    @foreach($categories as $category)
      <h3 class="title"> {{$category->name}}</h3>
      <hr>
      <div class="menu-cards">
        @foreach($menus as $menu)
          <div class="card">
            <img src="{{asset($menu->image)}}" alt="">
            <div class="card-content">
              <h4>{{$menu->name}}</h4>
              <p>{{$menu->description}}</p>
            </div>
        </div>
        @endforeach
      </div>
    @endforeach
  @endif
</section>



@endsection
