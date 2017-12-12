@extends('layouts.master')

@section('title', 'Criar nova categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-create-category">

  <section class="card-create-category">
    <form action="/admin/category/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="">
          <label for="name">Nome da Categoria</label>
          <input type="text" name="name" id="name" value="{{$category->name}}" required>
        </div>
        <div class="">
          <label for="description">Descrição da Categoria</label>
          <input type="text" name="description" id="description" value="{{$category->description}}" required>
        </div>
        <div class="">
          <img width="150px" src="{{asset($category->image)}}">
        </div>
        <div class="">
          <label for="image">Mudar imagem</label>
          <input type="file" name="image" id="image">
        </div>
        <div class="">
          <button type="submit" name="button">Salvar</button>
        </div>
      </div>
    </form>


  </section>
</main>
