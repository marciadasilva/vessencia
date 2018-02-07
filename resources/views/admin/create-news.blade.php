@extends('layouts.master')

@section('title', 'Criar nova Notícia - 5ª Essência')

@include('layouts.header')

<main class="create-form">

    <div class="caixa">
        <form action="/admin/news/create" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
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
                @if (Session::get('subtitle->news'))
                value="{{Session::get('subtitle->news')}}"
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

          </div>
        </form>
    </div>
</main>
