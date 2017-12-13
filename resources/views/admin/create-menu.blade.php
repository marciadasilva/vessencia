@extends('layouts.master')

@section('title', 'Criar novo Cardápio - 5ª Essência')

@include('layouts.header')

<main id="admin-create-menu">

  <section id="card-create-menu">
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
