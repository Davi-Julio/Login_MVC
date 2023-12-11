<?php

include_once "Model/config.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/Css/style.css">
</head>

<body>


  <header class="header">
    <h1>Faça Seu Login</h1>
  </header>
  <!--header-->

  <div class="container-form">
    <form class="form" action="process.php" method="post">
      <input require name="nome" type="text" placeholder="Digite Seu Nome:">
      <input required name="email" type="email" placeholder="Digite Seu Email:">
      <input required name="senha" type="password" placeholder="Digite Sua Senha:">
      <input id="btn" type="submit" value="Login">
    </form>
    <!--form-->
  </div>
  <!--container form-->

</body>

</html>