@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main id="admin-category">

  <section>
    <button type="button" name="button"><a href="/admin/category/create">Nova Categoria</a></button>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Edição</th>
          <th>deleção</th>
        </tr>
      </thead>

      <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->descricao}}</td>
        <td><img height="60" src="{{asset($category->image)}}" alt="{{$category->name}}"/></td>
        <td><a class="btn deep-orange" href="/admin/category/edit/{{$category->id}}">Editar</td>
        <td><a class="btn red" onclick="return confirm('Você tem certeza que quer deletar esta categoria?');" href="/admin/category/delete/{{$category->id}}">Deletar</td>
      </tr>
      @endforeach

      </tbody>
    </table>

  </section>
</main>
