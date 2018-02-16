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
    <input type="text" name="filter" id="filter" class="show-input-filter">
    <label for="filter"> <span onclick="showInputSearch()"><i class="fa fa-search fa-2x"></i></span></label>
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
            <div class="share-social">
            <!-- <div class="share-class"> -->
              <iframe
                src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F159.65.65.38%2Fmenus%2F{{$menu->id}}&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId"
                width="88"
                height="20"
                style="border:none;overflow:hidden;margin-bottom:1em;"
                scrolling="no"
                frameborder="0"
                allowTransparency="true">
              </iframe>

            <span style="opacity: 0;"><p>.</p></span>

              <iframe
                src="https://platform.twitter.com/widgets/tweet_button.html?size=l&url=http%3A%2F%2F159.65.65.38/menus/{{$menu->id}}&via=vessencia&related=twitterapi%2Ctwitter&text=Cardápio {{$menu->name}}&hashtags={{str_replace(" ","_","$menu->name")}}%2Cvessencia"
                width="140"
                height="40"
                title="5ª Essência - {{$menu->name}} "
                style="border: 0; overflow: hidden;">
              </iframe>
            </div>
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
      // const social = item.querySelectorAll(`.item__details .share-class`);
      full.forEach((f) => (removeFull(f, item)));
      item.classList.toggle('item--full');
      // social[0].classList.toggle('share-social');
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
      const span = item.querySelectorAll(`.item__details span`);

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

  function showInputSearch(){
    const filter = document.getElementById('filter');
    if(filter.value.length > 0){
      document.querySelectorAll('.item').forEach(function(item){
        item.style.display = 'flex';
      });
    }
    filter.classList.toggle('show-input-filter');
  };

</script>

@endsection
