@extends('layouts.master')

@section('title', 'Serviços - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button"
          onclick="window.location.href='/admin/service/create'">
              Novo Serviço
  </button>

  <div class="show-card">
    @foreach($services as $service)
      <div class="card-items">
        <img class="card_img" src="{{asset($service->image)}}" alt="{{$service->name}}">
        <div class="card_description">
          <h2>{{$service->name}}</h2>
          <p>{{$service->description}}</p>
        </div>

        <div class="card_buttons">
          <a href="/admin/service/edit/{{$service->id}}">
            <i class="fa fa-pencil"></i>
          </a>

          <a onclick="deleteItem({{$service->id}})">
            <i class="fa fa-trash-o"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <div>
    {{$services->links()}}
  </div>

  <script>
      function deleteItem(id) {
          swal({
              title: 'Você tem certeza?',
              text: "Não será possível reverter a remoção!",
              icon: 'warning',
              buttons: ["Cancelar", "Remover"]
          })
              .then((willDelete) => {
                  if (willDelete) {
                      swal("O serviço foi removido!", {
                          icon: "success",
                          timer: 5000
                      });
                      window.location.href = "service/delete/"+id;
                  }
              })
      }
  </script>
</main>

@endsection
