@extends('layouts.master')

@section('title', 'Criar nova receita - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/recipe/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <input
            type="text"
            name="title"
            id="title"
            required
            @if ($errors->any())
              @if (Session::get('title-recipe'))
                value="{{Session::get('title-recipe')}}"
              @endif
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
            @if ($errors->any())
              @if (Session::get('subtitle-recipe'))
                value="{{ Session::get('subtitle-recipe') }}"
              @endif
            @endif
          >
          <label for="subtitle">Subtitulo para a Receita</label>

          @if ($errors->first('subtitle'))
            <div>
              <span>{{ $errors->first('subtitle') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <input
            type="text"
            name="video"
            id="video"
            @if ($errors->any())
              @if (Session::get('video-recipe'))
                value="{{ Session::get('video-recipe') }}"
              @endif
            @endif
          >
          <label for="subtitle">Link do video para a Receita</label>

          @if ($errors->first('video'))
            <div>
              <span>{{ $errors->first('video') }}</span>
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
                @if(Session::get('category_id-recipe') == $category->id)
                  <option value="{{$category->id}}"
                          name="category_id"
                          selected>
                          {{$category->name}}
                  </option>
                @else
                  <option value="{{$category->id}}"
                          name="category_id">{{$category->name}}
                  </option>
                @endif
              @endforeach
            @else
              <option selected disabled> Escolher... </option>
              @foreach($categories as $category)
                <option value="{{$category->id}}"
                        name="category_id">{{$category->name}}
                </option>
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
            @if ($errors->any())
              @if (Session::get('time_preparation-recipe'))
                value="{{ Session::get('time_preparation-recipe') }}"
              @endif
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
            @if ($errors->any())
              @if (Session::get('yield-recipe'))
                value="{{ Session::get('yield-recipe') }}"
              @endif
            @endif
          >
          <label for="subtitle">Rendimento</label>

          @if ($errors->first('yield'))
            <div>
              <span>{{ $errors->first('yield') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <textarea
            type="text"
            name="body"
            rows="8"
            cols="80"
            required
          >
          @if ($errors->any())
            @if (Session::get('ingredients-recipe'))
              {{ Session::get('ingredients-recipe') }}
            @endif
          @endif
          </textarea>
          <label for="subtitle">Ingredientes</label>

          @if ($errors->first('ingredients'))
            <div>
              <span>{{ $errors->first('ingredients') }}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <textarea
            type="text"
            name="instructions"
            rows="8"
            cols="80"
            required
          >
          @if ($errors->any())
            @if (Session::get('instructions-recipe'))
              {{ Session::get('instructions-recipe') }}
            @endif
          @endif
          </textarea>
          <label for="subtitle">Instruções</label>

          @if ($errors->first('instructions'))
            <div>
              <span>{{ $errors->first('instructions') }}</span>
            </div>
          @endif
        </div>

        <div class="centralizar-img">
          <label for="image" id="file">
            <i class="fa fa-upload" aria-hidden="true"></i>
            Imagem
          </label>
          <input
            type="file"
            name="image"
            id="image"
            onchange="readURL(this)";
          >
          <img id="file-selected" src="#" alt="Image" style="display: none" />

          @if ($errors->first('image'))
            <div>
              <span>Imagem não selecionada ou muito grande (max 2MB)</span>
            </div>
          @endif
        </div>


        <button type="submit" name="button">Criar</button>
      </div>
    </form>
  </div>

</main>

@endsection
