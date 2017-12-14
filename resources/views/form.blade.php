<form action="/" method="post">
  {{ csrf_field() }}
  <div class="group-custom">
    <div class="">
      <h1>Contato</h1>
    </div>
    <div class="">
      <label for="nome">Nome</label>
      <input type="nome" name="nome" id="nome" value="">
    </div>
    <div class="">
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" value="">
    </div>
    <div class="">
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" value="">
    </div>
    <div class="btn-form">
      <button type="submit">Entrar</button>
    </div>

  </div>
</form>
