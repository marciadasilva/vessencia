@extends('layouts.master')

@section('title', 'Categorias - 5ª Essência')

@include('layouts.header')

<main class="admin-table">
  
  <section>
    <button type="button" name="button"><a href="/admin/category/create">Nova Categoria</a></button>
    <table align="center">
      <thead>
        <tr>
          <th>Título</th>
          <th><i class="fa fa-camera" aria-hidden="true"></i></th>
            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
        </tr>
      </thead>

      <tbody>
      @foreach($categories as $category)
      <tr>
        <td style="width:25%;">{{$category->name}}</td>
        <td style="width:50%;"><img  src="{{asset($category->image)}}" alt="{{$category->name}}"/></td>
        <td style="width:25%;">
            <a href="/admin/category/edit/{{$category->id}}">
              <i class="fa fa-pencil"></i>
            </a>
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
