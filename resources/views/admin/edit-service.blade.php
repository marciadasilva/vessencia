@extends('layouts.master')

@section('title', 'Editar serviço - 5ª Essência')

@include('layouts.header')


<main class="create-form">

    <div class="caixa">
        <form action="/admin/service/edit/{{$service->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-grupo">
                <div class="subir">
                    <input
                            type="text"
                            name="name"
                            id="name"
                            required
                            @if ($errors->any())
                            value="{{Session::get('name-service-edit')}}"
                            @else
                            value="{{$service->name}}"
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
                            value="{{Session::get('description-service-edit')}}"
                            @else
                            value="{{$service->description}}"

                            @endif
                    >
                    <label for="description">Descrição</label>

                    @if ($errors->first('description'))
                        <div>
                            <span>{{$errors->first('description')}}</span>
                        </div>
                    @endif
                </div>

                <div>
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

                <div >
                    <img id="file-selected" src="{{asset($service->image)}}" alt="Imagem">
                </div>
            </div>

            <button type="submit" name="button">Salvar</button>
        </form>
    </div>
</main>