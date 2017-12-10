@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main id="admin-category">

  <section>
    <button type="button" name="button"><a href="/admin/category/create">Nova Categoria</a></button>
    <ul>
      @foreach($categories as $category)
        <li><a href="/admin/categories/{{$category->id}}">{{$category->name}}</a></li>
      @endforeach

    </ul>
  </section>
</main>
