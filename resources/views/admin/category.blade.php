@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main id="admin-category">

  <section>
    <button type="button" name="button"><a href="/admin/category/create">Nova Categoria</a></button>
    <table>
      <thead>
        <tr>
          <th>Título</th>
          <th>Imagem</th>
          <th><i class="fa fa-pencil"></i></th>
          <th><i class="fa fa-trash-o"></i></th>
        </tr>
      </thead>

      <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category->name}}</td>
        <td><img src="{{asset($category->image)}}" alt="{{$category->name}}"/></td>
        <td><a href="/admin/category/edit/{{$category->id}}"><i class="fa fa-pencil"></i></td>
        <td><a onclick="return confirm('Você tem certeza que quer deletar esta categoria?');" href="/admin/category/delete/{{$category->id}}"><i class="fa fa-trash-o"></i></td>
      </tr>
      @endforeach

      </tbody>
    </table>

  </section>
</main>
