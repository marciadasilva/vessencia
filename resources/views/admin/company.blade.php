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
                  @if($errors->first('message'))
                      placeholder="{{$errors->first('message')}}"
                  @else
                      placeholder="{{Session::get('message-contact')}}"
                  @endif>
          </textarea>
        </div>

        <div>
          <textarea
                  rows="6"
                  id="about"
                  name="about"
                  @if($errors->first('message'))
                      placeholder="{{$errors->first('message')}}"
                  @else
                      placeholder="{{Session::get('message-contact')}}"
                  @endif>
          </textarea>
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
            <label for="description">WhatsApp</label>
            <input type="text" name="description" id="description" required>
          </div>
          <div>
            <label for="image" id="file">
              <i class="fa fa-upload" aria-hidden="true"></i> Imagem da Categoria</label>
            <input type="file" name="image" id="image">
          </div>

        @endif

        <div class="">
          <button type="submit" name="button">Criar Categoria</button>
        </div>


      </div>



    </section>


</main>
