@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')

@include('layouts.header')
  <main class="admin-create">
    <section class="card-create">
      <form action="/admin/company/create" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group grid-company">
          <div class="part1">
              <h1>Dados da Empresa</h1>
          </div>
          <div class="part2">
              <div>
                  <label for="description">Página inicial do site</label>
                  <textarea rows="6" id="description" name="description" placeholder="Descrição do site"></textarea>
              </div>
              <div>
                  <label for="about">Sobre a empresa</label>
                  <textarea rows="6" id="about" name="about" placeholder="Sobre a empresa"></textarea>
              </div>
          </div>
          <div class="part3">
              <div>
                <label for="phone">Telefone</label>
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
          </div>

          <div class="part4">
            <button type="submit" name="button">Salvar</button>
          </div>


      </div>
      </form>
    </section>
</main>
