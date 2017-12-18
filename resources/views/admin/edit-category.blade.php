@extends('layouts.master')

@section('title', 'Editar categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

  <section class="card-edit">
    <form action="/admin/category/edit/{{$category->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

        @if ($errors->any())

          <div>
            <label for="name">Nome da Categoria</label>
            <input
                    type="text"
                    name="name"
                    id="name"
                    @if($errors->first('name'))
                    value=" {{$errors->first('name')}}"
                    @else
                    value=" {{Session::get('name-category-edit')}}"
                    @endif
                    required
            >
          </div>

          <div>
            <label for="description">Descrição da Categoria</label>
            <input
                    type="text"
                    name="description"
                    id="description"
                    @if($errors->first('description'))
                    value=" {{$errors->first('description')}}"
                    @else
                    value=" {{Session::get('description-category-edit')}}"
                    @endif
                    required
            >
          </div>

          <div class="">
            <img src="{{asset($category->image)}}">
          </div>

          <div class="">
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>

        @else
          <div class="">
            <label for="name">Nome da Categoria</label>
            <input type="text" name="name" id="name" value="{{$category->name}}" required>
          </div>
          <div class="">
            <label for="description">Descrição da Categoria</label>
            <input type="text" name="description" id="description" value="{{$category->description}}" required>
          </div>
          <div class="">
            <img src="{{asset($category->image)}}">
          </div>
          <div class="">
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>
        @endif

          <div class="">
            <button type="submit" name="button">Salvar</button>
          </div>
      </div>
    </form>


  </section>
</main>
