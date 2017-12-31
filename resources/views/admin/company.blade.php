@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')
@include('layouts.header')

<main class="create-form">

    <div class="caixa">
        <form action="/admin/company/create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-grupo">
                <div class="subir">
                    <input
                            type="text"
                            name="name"
                            id="name"
                            required
                            @if ($errors->any())
                            @if (Session::get('name-category'))
                            value="{{Session::get('name-category')}}"
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
                            @if (Session::get('description-category'))
                            value="{{Session::get('description-category')}}"
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
      {{--<form action="/admin/company/create" method="post" enctype="multipart/form-data">--}}
      {{--{{ csrf_field() }}--}}
      {{--<div class="form-group grid-company">--}}
          {{--<div class="part1">--}}
              {{--<h1>Dados da Empresa</h1>--}}
          {{--</div>--}}
          {{--<div class="part2">--}}
              {{--<div>--}}
                  {{--<label for="description">Página inicial do site</label>--}}
                  {{--<textarea rows="6" id="description" name="description" placeholder="Descrição do site"></textarea>--}}
              {{--</div>--}}
              {{--<div>--}}
                  {{--<label for="about">Sobre a empresa</label>--}}
                  {{--<textarea rows="6" id="about" name="about" placeholder="Sobre a empresa"></textarea>--}}
              {{--</div>--}}
          {{--</div>--}}
          {{--<div class="part3">--}}
              {{--<div>--}}
                {{--<label for="phone">Telefone</label>--}}
                {{--<input type="text" name="phone" id="phone" required>--}}
              {{--</div>--}}
              {{--<div>--}}
                {{--<label for="facebook">Facebook</label>--}}
                {{--<input type="text" name="facebook" id="facebook" required>--}}
              {{--</div>--}}
              {{--<div>--}}
                {{--<label for="email">E-mail</label>--}}
                {{--<input type="text" name="email" id="email" required>--}}
              {{--</div>--}}
              {{--<div>--}}
                {{--<label for="atendimento">Horário de Atendimento</label>--}}
                {{--<input type="text" name="atendimento" id="atendimento" required>--}}
              {{--</div>--}}
              {{--<div>--}}
                {{--<label for="atendimento">Endereço</label>--}}
                {{--<input type="text" name="atendimento" id="atendimento" required>--}}
              {{--</div>--}}
          {{--</div>--}}

          {{--<div class="part4">--}}
            {{--<button type="submit" name="button">Salvar</button>--}}
          {{--</div>--}}


      {{--</div>--}}
      {{--</form>--}}
    {{--</section>--}}
{{--</main>--}}
