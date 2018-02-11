@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
    onclick="window.location.href='/admin/recipe/create'">
      Nova Receita
  </button>

  <div class="show-card">
    @foreach($recipes as $recipe)
    <div class="card-items">
      @if(isset($recipe->image))
      <img class="card_img" src="{{ asset($recipe->image) }}" alt="{{ asset($recipe->title) }}">
      @elseif(isset($recipe->video))
       <iframe
          src="{{asset($recipe->video)}}">
      </iframe>
      @endif
      <div class="card_description">
        <h2>{{ $recipe->title }}</h2>
        <p>{{ $recipe->subtitle }}</p>
        <p>{!! $recipe->body !!}</p>
        <!-- fazer o tratamendo com o Purifier -->
        @if(isset($recipe->video))
          <p><a href="{{$recipe->video}}"> </a></p>
        @endif
      </div>

      <div class="card_buttons">
        <a href="/admin/recipe/edit/{{ $recipe->id }}">
          <i class="fa fa-pencil"></i>
        </a>

        <a onclick="deleteItem({{$recipe->id}})">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>

    </div>
    @endforeach
  </div>

  <script>
      function deleteItem(id){
          swal({
              title:'Tem certeza que deseja excluir?',
              text:'Não será possivel reverter a exclusão!',
              icon:'warning',
              buttons:["Cancelar", "Excluir"]
          }).then((willDelete)=>{
              if(willDelete){
                  swal("A receita será excluído.", {
                      icon:'success',
                      timer:10000
                  });
                  window.location.href="recipe/delete/"+id;
              }
          })
      }
  </script>
</main>

@endsection
