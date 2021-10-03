<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url('favicon') ?>">

  <title>Signin Template for Bootstrap</title>


  <!-- Bootstrap core CSS -->
  <link href="login/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="login/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="<?php echo base_url('entrar/signIn') ?>" method="post">
    <img class="mb-4" src="/login/faq.png" alt="" login="100px" height="100px">
    <h1 class="h3 mb-3 font-weight-normal">SISTEMA DE ENQUETE</h1>
    <h3 class="h3 mb-3 font-weight-normal">Entre com sua Conta</h3>

    <label for="inputUserName" class="sr-only">Email address</label>
    <input type="email" name="inputUserName" id="inputUserName" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR
    </button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2021</p>
  </form>
</body>

</html>