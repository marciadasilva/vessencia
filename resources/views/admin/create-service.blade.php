@extends('layouts.master')

@section('title', 'Criar novo serviço - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

    <section class="card-create">
        <form action="/admin/service/create" method="post" enctype="multipart/form-data">
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
                                value=" {{Session::get('name-service')}}"
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
                                value=" {{Session::get('description-service')}}"
                                @endif
                                required
                        >
                    </div>
                    <div>
                        <label for="image" id="file">
                            <i class="fa fa-upload" aria-hidden="true"></i> Imagem do Serviço</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <div>
                        <br>
                        @if($errors->first('image'))
                            {{$errors->first('image')}}
                        @endif
                    </div>

                @else
                    {{-- QUANDO NÃO TEM NENHUM ERRO --}}
                    <div>
                        <label for="name">Nome do Serviço</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="description">Descrição do Serviço</label>
                        <input type="text" name="description" id="description" required>
                    </div>
                    <div>
                        <label for="image" id="file">
                            <i class="fa fa-upload" aria-hidden="true"></i> Imagem do Serviço</label>
                        <input type="file" name="image" id="image">
                    </div>

                @endif

                <div class="">
                    <button type="submit" name="button">Criar Serviço</button>
                </div>


            </div>
        </form>


    </section>
</main>
