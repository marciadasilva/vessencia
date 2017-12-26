@extends('layouts.master')

@section('title', 'Editar serviço - 5ª Essência')

@include('layouts.header')

<main class="admin-edit">

    <section class="card-edit">
        <form action="/admin/service/edit/{{$service->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">

                <div>
                    <label for="name">Nome do Serviço</label>
                    <input type="text"
                           name="name"
                           id="name"
                           {{--required--}}
                           @if ($errors->any())
                               @if (Session::get('name-service-edit'))
                                    value="{{Session::get('name-service-edit')}}"
                               @else
                                    value="{{$service->name}}"
                               @endif
                           @else
                                value="{{$service->name}}"
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
                           {{--required--}}
                           @if ($errors->any())
                               @if (Session::get('description-service-edit'))
                                    value="{{Session::get('description-service-edit')}}"
                               @else
                                    value="{{$service->description}}"
                               @endif
                           @else
                                value="{{$service->description}}"
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
                    <img src="{{asset($service->image)}}">
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
