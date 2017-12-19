@extends('layouts.master')

@section('title', 'Editar serviço - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

    <section class="card-edit">
        <form action="/admin/service/edit/{{$service->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">

                @if ($errors->any())

                    <div>
                        <label for="name">Nome do Serviço</label>
                        <input
                                type="text"
                                name="name"
                                id="name"
                                @if($errors->first('name'))
                                value=" {{$errors->first('name')}}"
                                @else
                                value=" {{Session::get('name-service-edit')}}"
                                @endif
                                required
                        >
                    </div>

                    <div>
                        <label for="description">Descrição do Serviço</label>
                        <input
                                type="text"
                                name="description"
                                id="description"
                                @if($errors->first('description'))
                                value=" {{$errors->first('description')}}"
                                @else
                                value=" {{Session::get('description-service-edit')}}"
                                @endif
                                required
                        >
                    </div>

                    <div class="">
                        <img src="{{asset($service->image)}}">
                    </div>

                    <div class="">
                        <label for="image">Mudar imagem</label>
                        <input type="file" name="image" id="image">
                    </div>

                @else
                    <div class="">
                        <label for="name">Nome do Serviço</label>
                        <input type="text" name="name" id="name" value="{{$service->name}}" required>
                    </div>
                    <div class="">
                        <label for="description">Descrição do Serviço</label>
                        <input type="text" name="description" id="description" value="{{$service->description}}" required>
                    </div>
                    <div class="">
                        <img src="{{asset($service->image)}}">
                    </div>
                    <div class="">
                        <label for="image">Mudar imagem</label>
                        <input type="file" name="image" id="image">
                    </div>
                @endif

                <div class="">
                    <button type="submit" name="button">Salvar</button>
                </div>
            </div>
        </form>


    </section>
</main>
