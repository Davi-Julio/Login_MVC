<?php


include_once "Model/model.php";


class UserModel implements UserModelInterface
{
  private $conn;


  public function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }


  public function Create(User $user)
  {
    $stmt = $this->conn->prepare('INSERT INTO usuarios2 (nome,email,senha) VALUES (:nome,:email,:senha)');
    $stmt->bindParam('nome', $user->getNome());
    $stmt->bindParam('email', $user->getEmail());
    $stmt->bindParam('senha', $user->getPassword());
    $stmt->execute();
  }
}