@extends('layouts.master')

@section('title', 'Editar categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

  <section class="card-edit">
    <form action="/admin/menu/edit/{{$menu->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="">
          <label for="name">Nome do Cardápio</label>
          <input type="text" name="name" id="name" value="{{$menu->name}}" required>
        </div>
        <div class="">
          <label for="description">Descrição do Cardápio</label>
          <input type="text" name="description" id="description" value="{{$menu->description}}" required>
        </div>
        <div class="">
          <img src="{{asset($menu->image)}}">
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
