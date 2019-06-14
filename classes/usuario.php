<?php




class Usuario
{

protected $id;
protected $user;
protected $email;
protected $password;

function __construct(Array $datos)
{
  if(isset($datos["id"])) {
    $this->id = $datos["id"];
    $this->password = $datos["pass"]; //Hash

  } else {
     $this->id = NULL;
     $this->password= password_hash($datos["pass"], PASSWORD_DEFAULT);
  }
  $this->user= $datos["name"];
  $this->email= $datos["email"];
}
public function getId(){
  return $this->id;
}
public function getUser(){
  return $this->user;
}
public function getEmail(){
  return $this->email;
}
public function getPassword(){
  return $this->password;
}
public function setUser($name){
  $this->user = $name;
  return $this;
}
public function setEmail($email){
  $this->email = $email;
  return $this;
}
public function setPassword($password){
  $this->pass = $password;
  return $this;
}
}
