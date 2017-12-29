@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main class="all-cards">

  <button type="button" name="button">
    <a href="/admin/category/create">Nova Categoria</a>
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

          <a onclick="return confirm('Você tem certeza que quer deletar esta categoria?');"
          href="/admin/category/delete/{{$category->id}}">
            <i class="fa fa-trash-o"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</main>
