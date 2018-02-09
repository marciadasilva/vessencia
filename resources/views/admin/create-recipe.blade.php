@extends('layouts.master')

@section('title', 'Criar novo Cardápio - 5ª Essência')

@include('layouts.header')

<main class="create-form">
  <div class="caixa">
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
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
          <textarea
            type="text"
            name="ingredients"
            rows="8"
            cols="80"
            required
            @if ($errors->any())
              @if (Session::get('ingredients-recipe'))
                value="{{ Session::get('ingredients-recipe') }}"
              @endif
            @endif
          ></textarea>
          <label for="subtitle">Ingredientes</label>

          @if ($errors->first('ingredients'))
            <div>
              <span>{{ $errors->first('ingredients') }}</span>
            </div>
          @endif
        </div>

      </div>
    </form>
  </div>

</main>
