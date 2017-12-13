@extends('layouts.master')

@section('title', 'Criar novo Cardápio - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

  <section class="card-create">
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="">
          <label for="name">Nome do Cardápio</label>
          <input type="text" name="name" id="name" value="" required>
        </div>
        <div class="">
          <label for="description">Descrição do Cardápio</label>
          <input type="text" name="description" id="description" value="" required>
        </div>
        <div class="select">
          <label>Categoria</label>
          <select class="browser-default" name="category_id" id="category_id">
            <option value="" disabled selected>Escolher...</option>
            @foreach($categories as $category)
              <option value="{{$category->id}}" name="category_id">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="">
          <label for="image" id="file"><i class="fa fa-upload" aria-hidden="true"></i> Imagem da Categoria</label>
          <input type="file" name="image" id="image">
        </div>
        <div class="">
          <button type="submit" name="button">Criar Cardápio</button>
        </div>
      </div>
    </form>


  </section>
</main>
