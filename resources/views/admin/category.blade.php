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
        <td style="width:20%;">{{$category->name}}</td>
        <td style="width:50%;"><img  src="{{asset($category->image)}}" alt="{{$category->name}}"/></td>
        <td style="width:15%;">
            <a href="/admin/category/edit/{{$category->id}}">
              <i class="fa fa-pencil"></i>
            </a>
        </td>
        <td style="width:15%;">
            <a onclick="return confirm('Você tem certeza que quer deletar esta categoria?');"
               href="/admin/category/delete/{{$category->id}}">
              <i class="fa fa-trash-o"></i>
            </a>
        </td>
      </tr>
      @endforeach

      </tbody>
    </table>

  </section>
</main>
