@extends('layouts.master')

@section('title', 'Criar novo Cardápio - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

  <section class="card-create">
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
          <div>
            <label for="name">Nome do Cardápio</label>
            <input type="text"
                   name="name"
                   id="name"
                   required
                    @if ($errors->any())
                        @if (Session::get('name-menu'))
                            value="{{Session::get('name-menu')}}"
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
            <label for="description">Descrição do Cardápio</label>
            <input type="text"
                   name="description"
                   id="description"
                   required
                    @if ($errors->any())
                        @if (Session::get('description-menu'))
                            value="{{Session::get('description-menu')}}"
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

          <div class="select">
            <label>Categoria</label>
            <select class="browser-default"
                    name="category_id"
                    id="category_id">
                @if ($errors->any())
                    @foreach($categories as $category)
                        @if(Session::get('category_id-menu') == $category->id)
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

          <div>
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i>
                Imagem do Cardápio
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

          <div>
              <button type="submit" name="button">Criar Cardápio</button>
          </div>

      </div>
    </form>
  </section>
</main>
