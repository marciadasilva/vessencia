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
                            name="name"
                            id="name"
                            required
                            @if ($errors->any())
                              @if (Session::get('name-menu'))
                                value="{{Session::get('name-menu')}}"
                              @endif
                            @endif
                    >
                    <label for="name">Nome</label>

                    @if ($errors->first('name'))
                        <div>
                            <span>{{$errors->first('name')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <input
                            type="text"
                            name="description"
                            id="description"
                            required
                            @if ($errors->any())
                            @if (Session::get('description-menu'))
                            value="{{Session::get('description-menu')}}"
                            @endif
                            @endif
                    >
                    <label for="description">Descrição</label>

                    @if ($errors->first('description'))
                        <div>
                            <span>{{$errors->first('description')}}</span>
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
                        <div class="error-message">
                            <span>Imagem não selecionada ou muito grande (max 2MB)</span>
                        </div>
                    @endif
                </div>
            </div>

            <button type="submit" name="button">Criar</button>
        </form>
    </div>
</main>
