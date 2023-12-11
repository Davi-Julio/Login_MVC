<?php




class User
{
  private $id;
  private $nome;
  private $email;
  private $password;


  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }


  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    return $this->nome = $nome;
  }


  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    return $this->email = $email;
  }


  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    return $this->password = $password;
  }
}

interface UserModelInterface
{
  public function Create(User $user);
}