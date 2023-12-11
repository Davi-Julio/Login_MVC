<?php

$localhost = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'users';

$conn = new PDO('mysql:host=' . $localhost . ';dbname=' . $db_name, $user, $pass);
