@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/categories" class="active">Categorias /</a>
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section>
  <div class="categories-service">
    <h3 class="title">Nossas Categorias</h3>
    <hr>
    @foreach($categories as $category)
      <div class="card-title">
        <div class="description-text">
          <a href="/menus/{{$category->id}}">
            <h3 class="title">{{$category->name}}</h3>
            <p>{{$category->description}}</p>
          </a>
        </div>
        <div class="image-text">
          <a href="/menus/{{$category->id}}">
            <img src="{{asset($category->image)}}" alt="{{$category->name}}">
          </a>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
