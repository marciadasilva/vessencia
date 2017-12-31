@extends('layouts.master')

@section('title', 'Criar novo serviço - 5ª Essência')

@include('layouts.header')

<main class="create-form">

    <div class="caixa">
        <form action="/admin/service/create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-grupo">
                <div class="subir">
                    <input
                            type="text"
                            name="name"
                            id="name"
                            required
                            @if ($errors->any())
                            @if (Session::get('name-service'))
                            value="{{Session::get('name-service')}}"
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
                            @if (Session::get('description-service'))
                            value="{{Session::get('description-service')}}"
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

{{--<main class="admin-create">--}}

    {{--<section class="card-create">--}}
        {{--<form action="/admin/service/create" method="post" enctype="multipart/form-data">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="form-group">--}}
                {{--<div>--}}
                    {{--<label for="name">Nome do Serviço</label>--}}
                    {{--<input type="text"--}}
                           {{--name="name"--}}
                           {{--id="name"--}}
                           {{--required--}}
                            {{--@if ($errors->any())--}}
                                {{--@if (Session::get('name-service'))--}}
                                    {{--value="{{Session::get('name-service')}}"--}}
                                {{--@endif--}}
                            {{--@endif--}}
                    {{-->--}}
                {{--</div>--}}

                {{--@if ($errors->any())--}}
                    {{--<div>--}}
                        {{--@if($errors->first('name'))--}}
                            {{--<span>{{$errors->first('name')}}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}

                {{--<div>--}}
                    {{--<label for="description">Descrição do Serviço</label>--}}
                    {{--<input type="text"--}}
                           {{--name="description"--}}
                           {{--id="description"--}}
                           {{--required--}}
                            {{--@if ($errors->any())--}}
                                {{--@if (Session::get('description-service'))--}}
                                    {{--value="{{Session::get('description-service')}}"--}}
                                {{--@endif--}}
                            {{--@endif--}}
                    {{-->--}}
                {{--</div>--}}

                {{--@if ($errors->any())--}}
                    {{--<div>--}}
                        {{--@if($errors->first('description'))--}}
                            {{--<span>{{$errors->first('description')}}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}

                {{--<div>--}}
                    {{--<label for="image" id="file">--}}
                        {{--<i class="fa fa-upload" aria-hidden="true"></i>--}}
                        {{--Imagem do Serviço--}}
                    {{--</label>--}}
                    {{--<input type="file" name="image" id="image">--}}
                {{--</div>--}}

                {{--<div>--}}
                    {{--<button type="submit" name="button">Criar Serviço</button>--}}
                {{--</div>--}}

                {{--@if ($errors->any())--}}
                    {{--<div>--}}
                        {{--@if($errors->first('image'))--}}
                            {{--<span>{{$errors->first('image')}}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</section>--}}
{{--</main>--}}
