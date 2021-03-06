@extends('layouts.master')

@section('title', 'Editar cardápio - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/menu/edit/{{$menu->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <input
            type="text"
            name="name"
            id="name"
            required
            @if ($errors->any())
              value="{{Session::get('name-menu-edit')}}"
            @else
              value="{{$menu->name}}"
            @endif
          >
          <label for="name">Nome</label>

          @if ($errors->first('name'))
            <div>
              <span>{{$errors->first('name')}}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <input
            type="text"
            name="description"
            id="description"
            required
            @if ($errors->any())
              value="{{Session::get('description-menu-edit')}}"
            @else
              value="{{$menu->description}}"
            @endif
          >
          <label for="description">Descrição</label>

          @if ($errors->first('description'))
            <div>
              <span>{{$errors->first('description')}}</span>
            </div>
          @endif
        </div>

        <div class="select">
          <label>Categoria</label>
          <select class="browser-default"
            name="category_id"
            id="category_id">
            @if ($errors->any())
              @foreach($categories as $category)
                @if(Session::get('category_id-product-edit') == $category->id)
                  <option value="{{$category->id}}"
                          name="category_id"
                          id="category_id"
                          selected
                  >{{$category->name}}
                  </option>
                @else
                  <option name="category_id" value="{{$category->id}}">
                    {{$category->name}}
                  </option>
                @endif
              @endforeach
            @else
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
            @endif
          </select>
        </div>

        @if ($errors->any())
          <div>
            @if($errors->first('category_id'))
              <span>{{$errors->first('category_id')}}</span>
            @endif
          </div>
        @endif

        <div class="centralizar-img">
          <label for="image" id="file">
            <i class="fa fa-upload" aria-hidden="true"></i>
            Alterar Imagem
          </label>
          <input
            type="file"
            name="image"
            id="image"
            onchange="readURL(this)";
          >

          @if ($errors->first('image'))
            <div class="error-message">
              <span>Imagem não selecionada ou muito grande (max 2MB)</span>
            </div>
          @endif
        </div>

        <div class="centralizar-img">
          <img id="file-selected" src="{{asset($menu->image)}}" alt="Imagem">
        </div>
      </div>

      <button type="submit" name="button">Salvar</button>
    </form>
  </div>
</main>

@endsection
