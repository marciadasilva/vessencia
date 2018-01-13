@extends('layouts.master')
@section('title', 'Serviços - 5ª Essência')

@section('content')
@include('layouts.header')

<section class="all-cards bread-crumbs">
  <header>
     <div>
       <a href="/">Home</a> / <a class="active" href="/services">Serviços</a>
     </div>
     <!-- search -->
     <div class="search-icon">
       <input class="remove-input" id="search" name="search" type="text" placeholder="Digite o nome do serviço.">
       <a id="search_submit" onclick="showInputSearch()"> <i class="fa fa-search fa-lg" aria-hidden="true"></i> </a>
     </div>
  </header>

    @foreach($services as $service)
      <div class="card-service">
        <div class="description-service">
          <h1>{{$service->name}}</h1>
          <P>{{$service->description}}</P>
        </div>
        <div class="image-service">
            <a href="/services/{{$service->id}}">
                <img src="{{asset($service->image)}}" alt="{{$service->name}}" class="img-responsive">
            </a>
        </div>
      </div>

    @endforeach
</section>
@endsection
