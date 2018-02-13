@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    @if(isset($category))
      <a href="/menus">Cardápios /</a>
      <a href="#" class="active">{{$category->name}} </a>
    @else
      <a href="/menus" class="active">Cardápios </a>
    @endif
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section class="new-gallery">
  <!--  Caso onde é pra mostrar pratos de uma categoria só -->
  @if(isset($category))
    <h3 class="title"> {{$category->name}}</h3>
    <hr>
    <div class="grid-menu-cards">
      @foreach($menus as $menu)
        <div class="item" style="background-image: url({{asset($menu->image)}});">
          <div class="item__details">
            <span>{{$menu->name}}</span>
          </div>
        </div>
      @endforeach
    </div>
    <!-- <div class="menu-cards">
      @foreach($menus as $menu)
        <div class="card">
          <img src="{{asset($menu->image)}}" alt="">
          <div class="card-content">
            <h4>{{$menu->name}}</h4>
            <p>{{$menu->description}}</p>
          </div>
      </div>
      @endforeach
    </div> -->
    <!--  pagination só mostra quando é para uma única categoria -->
    <!-- {{ $menus->links() }} -->
  @else
  <!--  Caso onde é pra mostrar pratos de todas as categorias -->
    @foreach($categories as $category)
      <h3 class="title"><a href="/menus/{{$category->id}}">{{$category->name}}</a></h3>
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

<script>
  window.onload = gallery();

  function gallery() {
    const sizes = [
      'item--medium',
      'item--large'
    ];

    const items = Array.from(document.querySelectorAll('.grid-menu-cards .item'));
    items.forEach((item)=>(setSize(item, sizes)));

  };

  function setSize(item, sizes) {
    let random = Math.floor(Math.random() * sizes.length + 1);

    if (random !== sizes.length + 1){
      item.classList.add(sizes[random]);
    }

    item.addEventListener('click', function (){
      item.classList.toggle('item--full');
    });

  };

</script>

@endsection
