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
    <form action="/login" method="post">
      {{ csrf_field() }}
      <h1>Login</h1>
      <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="">
      </div>
      <div>
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" value="">
      </div>
      <button class="btn-custom" type="submit">Entrar</button>
    </form>
  </section>
</body>
</html>
