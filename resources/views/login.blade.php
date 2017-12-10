<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
  <title>Login</title>
</head>
<body id="login-body">
  <section id="card-login">
    <form class="form" action="/login" method="post">
      {{ csrf_field() }}
      <div class="group-custom">
        <div class="">
          <h1>Login</h1>
        </div>
        <div class="">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="">
        </div>
        <div class="">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" value="">
        </div>
        <div class="btn-form">
          <button type="submit">Entrar</button>
        </div>

      </div>
    </form>
  </section>

</form>
</body>
</html>
