@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main class="all-cards">


  <button type="button" name="button">
    <a href="/admin/menu/create">Novo Cardápio</a>
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


  {{--<section> --}}
    {{--<button type="button" name="button"--}}
            {{--onclick="window.location.href='/admin/category/create'">--}}
      {{--Novo Cardápio--}}
    {{--</button>--}}
    {{--<table align="center">--}}
    {{--<thead>--}}
      {{--<tr>--}}
        {{--<th>Título</th>--}}
        {{--<th><i class="fa fa-camera" aria-hidden="true"></i></th>--}}
        {{--<th>Categoria</th>--}}
        {{--<th><i class="fa fa-cogs" aria-hidden="true"></i></th>--}}
      {{--</tr>--}}
    {{--</thead>--}}

    {{--<tbody>--}}
      {{--@foreach($menus as $menu)--}}
      {{--<tr>--}}
        {{--<td style="width:20%;">{{$menu->name}}</td>--}}
        {{--<td style="width:45%;"><img  src="{{asset($menu->image)}}" alt="{{$menu->name}}"/></td>--}}
        {{--<td style="width:15%;">{{$menu->category->name}}</td>--}}
        {{--<td style="width:20%;">--}}
            {{--<a href="/admin/menu/edit/{{$menu->id}}">--}}
              {{--<i class="fa fa-pencil"></i>--}}
            {{--</a>--}}
            {{--<a onclick="return confirm('Você tem certeza que quer deletar este cardápio?');"--}}
               {{--href="/admin/menu/delete/{{$menu->id}}">--}}
               {{--<i class="fa fa-trash-o"></i>--}}
            {{--</a>--}}
        {{--</td>--}}
      {{--</tr>--}}
      {{--@endforeach--}}
    {{--</tbody>--}}
  {{--</table>--}}
  {{--</section>--}}

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
