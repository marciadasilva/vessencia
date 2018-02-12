@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/services" class="active">Serviços</a>
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section>
  <div class="categories-service">
    <h3 class="title">Nossos Serviços</h3>
    <hr>
    @foreach($services as $service)
      <div class="card-title">
        <a href="/services/{{$service->id}}">
          <div class="description-text">
            <h3 class="title">{{$service->name}}</h3>
            <p>{{$service->description}}</p>
          </div>
        </a>
        <div class="image-text">
          <a href="/services/{{$service->id}}">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
          </a>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
