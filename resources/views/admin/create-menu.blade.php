@extends('layouts.master')

@section('title', 'Criar novo Cardápio - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

  <section class="card-create">
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

        @if ($errors->any())

          <div>
            <label for="name">Nome do Cardápio</label>
            <input
                    type="text"
                    name="name"
                    id="name"
                    @if($errors->first('name'))
                    value=" {{$errors->first('name')}}"
                    @else
                    value=" {{Session::get('name-menu')}}"
                    @endif
                    required
            >
          </div>

          <div>
            <label for="description">Descrição do Cardápio</label>
            <input
                    type="text"
                    name="description"
                    id="description"
                    @if($errors->first('description'))
                    value=" {{$errors->first('description')}}"
                    @else
                    value=" {{Session::get('description-menu')}}"
                    @endif
                    required
            >
          </div>

          <div class="select">
            <label>Categoria</label>
            <select class="browser-default" name="category_id" id="category_id">
              @foreach($categories as $category)
                @if(Session::get('category_id-menu') == $category->id)
                  <option name="category_id" value="{{$category->id}} " selected>
                    {{$category->name}}
                  </option>
                @else
                  <option name="category_id" value="{{$category->id}}">
                    {{$category->name}}
                  </option>
                @endif
              @endforeach
            </select>
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
          <div>
            <label for="name">Nome do Cardápio</label>
            <input type="text" name="name" id="name" value="" required>
          </div>
          <div>
            <label for="description">Descrição do Cardápio</label>
            <input type="text" name="description" id="description" value="" required>
          </div>
          <div class="select">
            <label>Categoria</label>
            <select class="browser-default" name="category_id" id="category_id">
              <option value="" selected disabled>Escolher...</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}" name="category_id">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div>
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i> Imagem do Cardápio</label>
            <input type="file" name="image" id="image">
          </div>
        @endif

        <div>
          <button type="submit" name="button">Criar Cardápio</button>
        </div>
      </div>
    </form>


  </section>
</main>
