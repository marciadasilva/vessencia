@extends('layouts.master')

@section('title', 'Notícias - 5ª Essência')

@include('layouts.header')

<main class="all-cards">
  <button type="button" name="button"
          onclick="window.location.href='/admin/news/create'">
            Nova Notícia
  </button>


  <div class="show-card">
    @foreach($news as $new)
    <div class="card-items">
      <img class="card_img" src="{{asset($new->image)}}" alt="{{$new->title}}">
      <div class="card_description">
        <h2>{{$new->title}}</h2>
        <p>{{$new->subtitle}}</p>
        <p>{{$new->body}}</p>
        <p>{{isset($new->video)}}</p>
      </div>

      <div class="card_buttons">
        <a href="/admin/news/edit/{{$new->id}}">
          <i class="fa fa-pencil"></i>
        </a>

        <a onclick="deleteItem({{$new->id}})">
          <i class="fa fa-trash-o"></i>
        </a>
      </div>
    </div>
    @endforeach
  </div>

  <div>
    {{$news->links()}}
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
                  swal("A notícia será excluído.", {
                      icon:'success',
                      timer:10000
                  });
                  window.location.href="news/delete/"+id;
              }
          })
      }
  </script>

</main>
