@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
    onclick="window.location.href='/admin/category/create'">
      Nova Categoria
  </button>

  <div class="show-card">
    @foreach($categories as $category)
      <div class="card-items">
        <img class="card_img" src="{{asset($category->image)}}" alt="{{$category->name}}">
        <div class="card_description">
          <h2>{{$category->name}}</h2>
          <p>{{$category->description}}</p>
        </div>

        <div class="card_buttons">
          <a href="/admin/category/edit/{{$category->id}}">
            <i class="fa fa-pencil"></i>
          </a>

          <a onclick="deleteItem({{$category->id}})">
            <i class="fa fa-trash-o"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <div>
    {{$categories->links()}}
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
              swal("A categoria será excluída.", {
                icon:'success',
                timer:10000
              });
              window.location.href="category/delete/"+id;
            }
          })
        }
  </script>
</main>
