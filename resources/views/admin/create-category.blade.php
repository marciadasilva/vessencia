@extends('layouts.master')

@section('title', 'Criar nova categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

  <section class="card-create">
    <form action="/admin/category/create" method="post" enctype="multipart/form-data">
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
                      value=" {{Session::get('name-category')}}"
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
                      value=" {{Session::get('description-category')}}"
                    @endif
                    required
            >
          </div>
          <div>
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i> Imagem da Categoria</label>
            <input type="file" name="image" id="image">
          </div>

          <div>
            <br>
            @if($errors->first('image'))
              {{$errors->first('image')}}
            @endif
          </div>

        @else
          {{-- QUANDO NÃO TEM NENHUM ERRO --}}
          <div>
            <label for="name">Nome da Categoria</label>
            <input type="text" name="name" id="name" required>
          </div>
          <div>
            <label for="description">Descrição da Categoria</label>
            <input type="text" name="description" id="description" required>
          </div>
          <div>
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i> Imagem da Categoria</label>
            <input type="file" name="image" id="image">
          </div>

        @endif

        <div class="">
          <button type="submit" name="button">Criar Categoria</button>
        </div>


      </div>
    </form>


  </section>
</main>
