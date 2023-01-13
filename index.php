<?php
    require_once("conexao.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Script para Login PHP utilizando PDO (PHP Data Object)">
    <meta name="author" content="Celso Reis and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login php</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleLogin.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
<body class="text-center">
  <!--Fomulário para login-->  
<main class="form-signin">
  <form method="post" action="autenticar.php">
    <img class="mb-4" src="assets/logos/reisweblogo.png" alt="" width="200" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="name" name="usuario" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Usuário</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar senha
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2023</p>
  </form>
</main>

  </body>
</html>