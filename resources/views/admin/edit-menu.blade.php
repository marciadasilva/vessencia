@extends('layouts.master')

@section('title', 'Editar categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

  <section class="card-edit">
    <form action="/admin/menu/edit/{{$menu->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

        @if ($errors->any())

          <div>
            <label for="name">Nome do Cardápio</label>
            <input
                    type="text"
                    name="name"
                    id="name"
                    @if($errors->first('name'))
                    value=" {{$errors->first('name')}}"
                    @else
                    value=" {{Session::get('name-menu-edit')}}"
                    @endif
                    required
            >
          </div>

          <div>
            <label for="description">Descrição do Cardápio</label>
            <input
                    type="text"
                    name="description"
                    id="description"
                    @if($errors->first('description'))
                    value=" {{$errors->first('description')}}"
                    @else
                    value=" {{Session::get('description-menu-edit')}}"
                    @endif
                    required
            >
          </div>

          <div class="select">
            <label>Categoria</label> <br>
            <select class="browser-default" name="category_id" id="category_id">
              @foreach($categories as $category)
                @if(Session::get('category_id-menu-edit') == $category->id)
                  <option name="category_id" value="{{$category->id}} " selected>
                    {{$category->name}}
                  </option>
                @else
                  <option name="category_id" value="{{$category->id}}">
                    {{$category->name}}
                  </option>
                @endif
              @endforeach
            </select>
          </div>

          <div>
            <img src="{{asset($menu->image)}}">
          </div>

          <div>
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>

        @else

          <div>
            <label for="name">Nome do Cardápio</label>
            <input type="text" name="name" id="name" value="{{$menu->name}}" required>
          </div>
          <div>
            <label for="description">Descrição do Cardápio</label>
            <input type="text" name="description" id="description" value="{{$menu->description}}" required>
          </div>
          <div>
            <label>Categoria</label> <br>
            <select class="browser-default" name="category_id" id="category_id">
              @foreach($categories as $category)
                @if($menu->category_id == $category->id)
                  <option name="category_id" value="{{$category->id}} " selected>
                    {{$category->name}}
                  </option>
                @else
                  <option name="category_id" value="{{$category->id}}">
                    {{$category->name}}
                  </option>
                @endif
              @endforeach
            </select>
          </div>
          <div>
            <img src="{{asset($menu->image)}}">
          </div>
          <div>
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>
        @endif

        <div>
          <button type="submit" name="button">Salvar</button>
        </div>
      </div>
    </form>


  </section>
</main>
