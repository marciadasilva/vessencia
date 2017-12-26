@extends('layouts.master')

@section('title', 'Criar novo serviço - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

    <section class="card-create">
        <form action="/admin/service/create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div>
                    <label for="name">Nome do Serviço</label>
                    <input type="text"
                           name="name"
                           id="name"
                           required
                            @if ($errors->any())
                                @if (Session::get('name-service'))
                                    value="{{Session::get('name-service')}}"
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
                    <label for="description">Descrição do Serviço</label>
                    <input type="text"
                           name="description"
                           id="description"
                           required
                            @if ($errors->any())
                                @if (Session::get('description-service'))
                                    value="{{Session::get('description-service')}}"
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
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        Imagem do Serviço
                    </label>
                    <input type="file" name="image" id="image">
                </div>

                <div>
                    <button type="submit" name="button">Criar Serviço</button>
                </div>

                @if ($errors->any())
                    <div>
                        @if($errors->first('image'))
                            <span>{{$errors->first('image')}}</span>
                        @endif
                    </div>
                @endif
            </div>
        </form>
    </section>
</main>
