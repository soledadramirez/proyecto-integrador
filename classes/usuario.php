<?php

class Usuario{

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
}
 ?>
