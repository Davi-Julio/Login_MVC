<?php

include_once "Model/config.php";
include_once "Controller/controller.php";


$user = new UserModel($conn);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$newUser = new User();

$newUser->setNome($nome);
$newUser->setEmail($email);
$newUser->setPassword($senha);

$user->Create($newUser);

header("Location: index.php");