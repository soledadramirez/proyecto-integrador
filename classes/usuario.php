<?php

class Usuario
{

protected $id;
protected $nombre;
protected $email;
protected $password;

function __construct(Array $datos)
{
  if(isset($datos["id"])) {
    $this->id = $datos["id"];
    $this->password = $datos["pass"];

  } else {
     $this->id = NULL;
     $this->password= password_hash($datos["pass"], PASSWORD_DEFAULT);
  }
  $this->nombre= $datos["user"];
  $this->email= $datos["email"];

}
public function getId(){
  return $this->id;
}
public function getName(){
  return $this->name;
}
public function getEmail(){
  return $this->email;
}
public function getPassword(){
  return $this->password;
}
public function setName($name){
  $this->name = $name;
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
