@extends('layouts.master')

@section('title', 'Criar nova categoria - 5ª Essência')

@include('layouts.header')

<main id="admin-category">

  <section>
    <form class="form-category" action="/admin/category/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="">
          <label for="name">Nome da Categoria</label>
          <input type="text" name="name" id="name" value="" required>
        </div>
      <div class="">
          <label for="description">Descrição da Categoria</label>
          <input type="text" name="description" id="description" value="" required>
      </div>
      <div class="">
          <label for="image">Imagem da Categoria</label>
          <input type="file" name="image" id="image">
      </div>
      <div class="">
          <button type="submit" name="button">Criar Categoria</button>
      </div>
    </div>
    </form>


  </section>
</main>
