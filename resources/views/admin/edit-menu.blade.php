@extends('layouts.master')

@section('title', 'Editar cardápio - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

  <section class="card-edit">
    <form action="/admin/menu/edit/{{$menu->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

          <div>
            <label for="name">Nome do Cardápio</label>
            <input type="text"
                   name="name"
                   id="name"
                   required
                   @if ($errors->any())
                       @if (Session::get('name-menu-edit'))
                            value="{{Session::get('name-menu-edit')}}"
                       @else
                            value="{{$menu->name}}"
                       @endif
                   @else
                        value="{{$menu->name}}"
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
                       @if (Session::get('description-menu-edit'))
                            value="{{Session::get('description-menu-edit')}}"
                       @else
                            value="{{$menu->description}}"
                       @endif
                   @else
                        value="{{$menu->description}}"
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
            <label>Categoria</label> <br>
            <select class="browser-default" name="category_id" id="category_id">
                @if ($errors->any())
                    @foreach($categories as $category)
                        @if(Session::get('category_id-product-edit') == $category->id)
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
                        @if($menu->category_id == $category->id)
                            <option name="category_id" value="{{$category->id}} " selected>
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

          <div>
            <img src="{{asset($menu->image)}}">
          </div>

          <div>
            <label for="image">Mudar imagem</label>
            <input type="file" name="image" id="image">
          </div>

          @if ($errors->any())
              <div>
                  @if($errors->first('image'))
                      <span>{{$errors->first('image')}}</span>
                  @endif
              </div>
          @endif

          <div>
              <button type="submit" name="button">Salvar</button>
          </div>

      </div>
    </form>
  </section>
</main>
