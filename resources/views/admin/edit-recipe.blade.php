@extends('layouts.master')

@section('title', 'Receitas - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/recipe/edit/{{$recipe->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <input
            type="text"
            name="title"
            id="title"
            required
              @if (Session::get('title-recipe-edit'))
                value="{{Session::get('title-recipe-edit')}}"
              @else
                value="{{ $recipe->title }}"
              @endif
          >
          <label for="title">Título da Receita</label>

          @if ($errors->first('title'))
            <div>
              <span>{{ $errors->first('title') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <input
            type="text"
            name="subtitle"
            id="subtitle"
            required
              @if (Session::get('subtitle-recipe-edit'))
                value="{{Session::get('subtitle-recipe-edit')}}"
              @else
                value="{{ $recipe->subtitle }}"
              @endif
          >
          <label for="subtitle">Subtítulo da Receita</label>

          @if ($errors->first('subtitle'))
            <div>
              <span>{{ $errors->first('subtitle') }}</span>
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
                @if(Session::get('category_id-recipe-edit') == $category->id)
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
                @if($recipe->category_id == $category->id)
                  <option name="category_id" value="{{$category->id}}" selected>
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

        <div class="subir">
          <input
            type="text"
            name="time_preparation"
            id="time_preparation"
            required
              @if (Session::get('time_preparation-recipe-edit'))
                value="{{Session::get('time_preparation-recipe-edit')}}"
              @else
                value="{{ $recipe->time_preparation }}"
              @endif
          >
          <label for="time_preparation">Tempo de Preparo</label>

          @if ($errors->first('time_preparation'))
            <div>
              <span>{{ $errors->first('time_preparation') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <input
            type="text"
            name="yield"
            id="yield"
            required
              @if (Session::get('yield-edit'))
                value="{{Session::get('yield-edit')}}"
              @else
                value="{{ $recipe->yield }}"
              @endif
          >
          <label for="yield">Rendimento</label>

          @if ($errors->first('yield'))
            <div>
              <span>{{ $errors->first('yield') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <textarea
            name="body"
            rows="8"
            cols="80"
            required>
            @if ($errors->any())
              {{Session::get('ingredients-recipe-edit')}}
            @else
              {{$recipe->body}}
            @endif
          </textarea>
          <label for="body">Ingredientes</label>

          @if ($errors->first('body'))
            <div>
              <span>{{$errors->first('body')}}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <textarea
            name="instructions"
            rows="8"
            cols="80"
            required>
            @if ($errors->any())
              {{Session::get('instructions-recipe-edit')}}
            @else
              {{$recipe->instructions}}
            @endif
          </textarea>
          <label for="body">Instruções</label>

          @if ($errors->first('instructions'))
            <div>
              <span>{{$errors->first('instructions')}}</span>
            </div>
          @endif
        </div>

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
          <img id="file-selected" src="{{asset($recipe->image)}}" alt="Imagem">
        </div>
      </div>

      </div>
      <button type="submit" name="button">Salvar</button>
    </form>
  </div>
</main>

@endsection
