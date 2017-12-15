@extends('layouts.master')
@section('title', '5ª Essência')

@section('content')
@include('layouts.header')

  <section id="contact">
    <form action="#" method="post">
        <div class="group-custom">
          <div>
              <h1>Entre em contato conosco</h1>
          </div>
            <div>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="lastName">Sobrenome</label>
                <input type="text" name="lastName" id="LastName">
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone">
            </div>

            <div>
                <label for="city">Cidade</label>
                <input type="text" id="city" name="city">
            </div>

            <div>
                <label for="state">Estado</label>
                <input type="text" id="state" name="state">
                {{-- Colocar HINT no input --}}
                {{--<select name="state" id="state">--}}
                    {{--<option value="">--</option>--}}
                    {{--<option value="PR">PR</option>--}}
                {{--</select>--}}
            </div>

            <div>
                <label for="message">Mensagem</label>
                <textarea rows="6" id="message" name="message"></textarea>
            </div>

            <div class="btn-form">
                <button type="submit">Enviar</button>
            </div>
        </div>
    </form>
  </section>


@endsection
