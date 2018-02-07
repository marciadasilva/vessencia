@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

    <button type="button" name="button"
            onclick="window.location.href='/admin/menu/create'">
                Novo Cardápio
    </button>

  <div class="show-card">
    @foreach($menus as $menu)
      <div class="card-items">
        <img class="card_img" src="{{asset($menu->image)}}" alt="{{$menu->name}}">
        <div class="card_description">
          <h2>{{$menu->name}}</h2>
          <p>{{$menu->description}}</p>
          <p>{{$menu->category->name}}</p>
        </div>

        <div class="card_buttons">
          <a href="/admin/menu/edit/{{$menu->id}}">
            <i class="fa fa-pencil"></i>
          </a>

          <a onclick="deleteItem({{$menu->id}})">
            <i class="fa fa-trash-o"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <div>
    {{$menus->links()}}
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
                  swal("O cardápio será excluído.", {
                      icon:'success',
                      timer:10000
                  });
                  window.location.href="menu/delete/"+id;
              }
          })
      }
  </script>
</main>
