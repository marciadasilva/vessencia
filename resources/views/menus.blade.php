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
  <!-- <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div> -->

  <div class="search">
    <input type="text" name="filter" id="filter">
    <label for="filter"> <i class="fa fa-search fa-2x"></i></label>
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
    {{ $menus->links() }}
  @else
  <!--  Caso onde é pra mostrar pratos de todas as categorias -->
    @foreach($categories as $category)
      <h3 class="title"><a href="/menus/{{$category->id}}">{{$category->name}}</a></h3>
      <hr>
      <div class="menu-cards">
        @foreach($menus as $menu)
          @if($menu->category_id === $category->id)
            <div class="card">
              <img src="{{asset($menu->image)}}" alt="">
              <div class="card-content">
                <h4>{{$menu->name}}</h4>
                <p>{{$menu->description}}</p>
              </div>
          </div>
          @endif
        @endforeach
      </div>
    @endforeach
  @endif
</section>

<script>
  //
  //
  //
  // console.log(filter);

  window.onload = load();

  function load(){
    gallery();
    //Load all event listeners
    loadEventlisteners();
  }

  // //Load all event listeners
  function loadEventlisteners(){
    // fILTER TASKS EVENT
    const filter = document.querySelector('#filter');
    filter.addEventListener('keyup', filterTasks);
  };

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

    item.addEventListener('click', function () {

      const full = Array.from(document.querySelectorAll('.item--full'));
      full.forEach((f) => (removeFull(f, item)));
      item.classList.toggle('item--full');
   });

    function removeFull(f, item) {
      if(f !== item) {
        f.classList.remove('item--full');
      }
    };
  };

  function filterTasks(e){
    const text = e.target.value.toLowerCase();

    document.querySelectorAll('.item').forEach(function(item){
      const span = document.querySelectorAll(`.item__details span`);

      for(let i = 0; i < span.length; i++){
        const data = span[i].innerText;
        if(data.toLowerCase().match(text)){
          item.style.display = 'flex'; //block
        } else {
          item.style.display = 'none';
        }
      }

    });
  };

  // function filterTasks(e){
  //   // console.log(e.target.value);
  //
  //   const text = e.target.value.toLowerCase();
  //
  //   document.querySelectorAll('.item').forEach(function(task){
  //     const item = task.firstChild.textContent;
  //
  //     console.log(item);
  //
  //     if(item.toLowerCase().indexOf(text) != -1){
  //       task.style.display = 'flex';
  //     } else {
  //       task.style.display = 'none';
  //     }
  //   });
  // };

</script>

@endsection
