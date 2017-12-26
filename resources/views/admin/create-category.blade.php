@extends('layouts.master')

@section('title', 'Criar nova categoria - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

  <section class="card-create">
    <form action="/admin/category/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

          <div>
            <label for="name">Nome da Categoria</label>

            <input type="text"
                   name="name"
                   id="name"
                   required
                    @if ($errors->any())
                        @if (Session::get('name-category'))
                            value="{{Session::get('name-category')}}"
                        @endif
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
                        @if (Session::get('description-category'))
                            value="{{Session::get('description-category')}}"
                        @endif
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
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i> Imagem da Categoria
            </label>
            <input type="file"
                   name="image"
                   id="image"
            >
          </div>

          @if ($errors->any())
              <div>
                  @if($errors->first('image'))
                      <span>{{$errors->first('image')}}</span>
                  @endif
              </div>
          @endif

        <div class="">
          <button type="submit" name="button">Criar Categoria</button>
        </div>

      </div>

    </form>


  </section>
</main>
