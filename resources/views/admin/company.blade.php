@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')

@include('layouts.header')
  <main class="admin-create">
    <section class="card-create">
      <form action="/admin/company/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">

        <h1>Dados da Empresa</h1>
        @if ($errors->any())

        <div>
          <textarea
                  rows="6"
                  id="description"
                  name="description"
                  @if($errors->first('description'))
                      placeholder="{{$errors->first('description')}}"
                  @else
                      placeholder="{{Session::get('description-company')}}"
                  @endif>
          </textarea>
        </div>

        <div>
          <textarea
                  rows="6"
                  id="about"
                  name="about"
                  @if($errors->first('about'))
                      placeholder="{{$errors->first('about')}}"
                  @else
                      placeholder="{{Session::get('about-company')}}"
                  @endif>
          </textarea>
        </div>
        <div>
            <label for="phone">Telefone</label>
            <input
                    type="text"
                    name="phone"
                    id="phone"
                    @if($errors->first('phone'))
                      value=" {{$errors->first('phone')}}"
                    @else
                      value=" {{Session::get('phone-company')}}">
                    @endif>
        </div>
        <div>
            <label for="description">Descrição da Categoria</label>
            <input
                    type="text"
                    name="description"
                    id="description"
                    @if($errors->first('description'))
                      value=" {{$errors->first('description')}}"
                    @else
                      value=" {{Session::get('description-category')}}"
                    @endif
                    required
            >
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
          {{-- QUANDO NÃO TEM NENHUM ERRO --}}
          <div>
              <textarea rows="6" id="description" name="description" placeholder="Descrição do site"></textarea>
          </div>
          <div>
              <textarea rows="6" id="about" name="about" placeholder="Sobre a empresa"></textarea>
          </div>
          <div>
            <label for="phone">telefone</label>
            <input type="text" name="phone" id="phone" required>
          </div>
          <div>
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" id="facebook" required>
          </div>
          <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" required>
          </div>
          <div>
            <label for="atendimento">Horário de Atendimento</label>
            <input type="text" name="atendimento" id="atendimento" required>
          </div>
          <div>
            <label for="atendimento">Endereço</label>
            <input type="text" name="atendimento" id="atendimento" required>
          </div>
        @endif

        <div class="">
          <button type="submit" name="button">Atualizar informações</button>
        </div>


      </div>



    </section>


</main>
