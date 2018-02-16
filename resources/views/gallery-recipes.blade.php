@extends('layouts.master')

@section('title', 'Galeria de Receitas - 5ª Essência')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="/">Home /</a>
        <a href="#" class="active"> Galeria de Receitas</a>
      </div>

      <div class="search">
        <input type="text" name="filter" id="filter" class="show-input-filter">
        <label for="filter"> <span onclick="showInputSearch()"><i class="fa fa-search fa-2x"></i></span></label>
      </div>
    </section>

    <section class="recipes">
        <!-- <div class="recipes"> -->
        @foreach($recipes as $recipe)
          <div class="recipes-item">
            <a href="/gallery-recipes/detail/{{ $recipe->id }}">
              @if($recipe->image)
                <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}">
              @elseif($recipe->video)
                <iframe
                   src="{{ asset($recipe->video) }}">
               </iframe>
              @endif
              <h4>{{ $recipe->title }}</h4>
              <p>{{ $recipe->subtitle }}</p>
            </a>
          </div>
          @endforeach
        <!-- </div> -->
        <!-- <div class="more">
          <a href="#" class="anim">Mais</a>
        </div> -->
    </section>

    <script>

      window.onload = loadEventlisteners();

      // //Load all event listeners
      function loadEventlisteners(){
        // fILTER TASKS EVENT
        const filter = document.querySelector('#filter');
        filter.addEventListener('keyup', filterTasks);
      };


      function filterTasks(e){
        const text = e.target.value.toLowerCase();

        document.querySelectorAll('.recipes-item').forEach(function(item){
          const span = item.querySelectorAll(`a h4`);

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
          document.querySelectorAll('.recipes-item').forEach(function(item){
            item.style.display = 'flex';
          });
        }
        filter.classList.toggle('show-input-filter');
      };

    </script>

    @endsection
