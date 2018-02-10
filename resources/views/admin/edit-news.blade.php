@extends('layouts.master')

@section('title', 'Editar cardápio - 5ª Essência')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/news/edit/{{$news->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <input
            type="text"
            name="title"
            id="title"
            required
            @if ($errors->any())
              value="{{Session::get('title-news-edit')}}"
            @else
              value="{{$news->title}}"
            @endif
          >
          <label for="title">Título</label>

          @if ($errors->first('title'))
            <div>
              <span>{{$errors->first('title')}}</span>
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
              value="{{Session::get('subtitle-news-edit')}}"
            @else
                value="{{$news->subtitle}}"
            @endif
          >
          <label for="subtitle">Sub-Título</label>

          @if ($errors->first('subtitle'))
            <div>
              <span>{{$errors->first('subtitle')}}</span>
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
              {{Session::get('body-news-edit')}}
            @else
              {{$news->body}}
            @endif
          </textarea>
          <label for="body">Texto</label>

          @if ($errors->first('body'))
            <div>
              <span>{{$errors->first('body')}}</span>
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
          <img id="file-selected" src="{{asset($news->image)}}" alt="Imagem">
        </div>
      </div>

      <button type="submit" name="button">Salvar</button>
    </form>

  </div>

</main>
