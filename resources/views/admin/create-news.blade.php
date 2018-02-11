@extends('layouts.master')

@section('title', 'Criar nova Notícia - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/news/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <input
            type="text"
            name="title"
            id="title"
            required
            @if ($errors->any())
              @if (Session::get('title-news'))
                value="{{Session::get('title-news')}}"
              @endif
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
            @if ($errors -> any())
              @if (Session::get('subtitle-news'))
                value="{{Session::get('subtitle-news')}}"
              @endif
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
            required
            @if ($errors -> any())
              @if (Session::get('body-news'))
                value="{{Session::get('body-news')}}"
              @endif
            @endif
          ></textarea>
          <!-- <label for="body">teste</label> -->

          @if ($errors->first('body'))
            <div>
              <span>{{$errors->first('body')}}</span>
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
      </div>

      <button type="submit" name="button">Criar</button>
    </form>
  </div>
</main>

@endsection
