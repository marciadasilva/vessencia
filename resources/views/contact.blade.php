@extends('layouts.master')
@section('title', '5ª Essência')

@section('content')
@include('layouts.header')

  <section id="contact">
    <form action="#" method="post">
      <fieldset class="group-custom">
        <div class="field">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="">
          <label for="lastName">Sobrenome</label>
          <input type="text" name="lastName" id="LastName">
      </div>
      </fieldset>
      <label class="checkbox">
        <input type="radio" name="sex" value="male"> Masculino
      </label>
      <label class="checkbox">
        <input type="radio" name="sex" value="female"> Feminino
      </label>

      <div class="">
              <label for="email">E-mail</label>
              <input type="text" id="email" name="email" style="width: 20em" value="">
          </div>
          <div class="">
              <label for="phone">Telefone</label>
              <input type="text" id="phone" name="phone" style="width: 10em" value="">
          </div>

          <fieldset class="grupo">
              <div class="campo">
                  <label for="city">Cidade</label>
                  <input type="text" id="city" name="city" style="width: 10em" value="">
              </div>
              <div class="campo">
                  <label for="state">Estado</label>
                  <select name="state" id="state">
                      <option value="">--</option>
                      <option value="PR">PR</option>
                  </select>
              </div>
          </fieldset>

          <div class="">
              <label for="message">Mensagem</label>
              <textarea rows="6" style="width: 20em" id="message" name="message"></textarea>
          </div>

          <div class="">
              <label>Newsletter</label>
              <label>
                  <input type="checkbox" name="newsletter" value="1"> Gostaria de receber a Newsletter da empresa
              </label>
          </div>
      <button type="submit" class="botao submit">Enviar</button>
    </form>
  </section>


@endsection
