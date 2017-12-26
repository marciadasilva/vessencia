@extends('layouts.master')

@section('title', 'Editar categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

  <section class="card-edit">
    <form action="/admin/category/edit/{{$category->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

          <div>
            <label for="name">Nome da Categoria</label>
            <input type="text"
                   name="name"
                   id="name"
                   required
                   @if ($errors->any())
                       @if (Session::get('name-category-edit'))
                           value="{{Session::get('name-category-edit')}}"
                       @else
                           value="{{$category->name}}"
                       @endif
                   @else
                       value="{{$category->name}}"
                   @endif
            >
          </div>

          @if ($errors->any())
              <div>
                  @if($errors->first('name'))
                      <span>{{$errors->first('name')}}</span>
                  @endif
              </div>
          @endif

          <div>
            <label for="description">Descrição da Categoria</label>
            <input type="text"
                   name="description"
                   id="description"
                   required
                   @if ($errors->any())
                       @if (Session::get('description-category-edit'))
                            value="{{Session::get('description-category-edit')}}"
                       @else
                            value="{{$category->description}}"
                       @endif
                   @else
                       value="{{$category->description}}"
                   @endif
            >
          </div>

          @if ($errors->any())
              <div>
                  @if($errors->first('description'))
                      <span>{{$errors->first('description')}}</span>
                  @endif
              </div>
          @endif

          <div>
            <img src="{{asset($category->image)}}">
          </div>

          <div>
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>

          @if ($errors->any())
              <div>
                  @if($errors->first('image'))
                      <span>{{$errors->first('image')}}</span>
                  @endif
              </div>
          @endif

          <div>
            <button type="submit" name="button">Salvar</button>
          </div>
      </div>
    </form>
  </section>
</main>
