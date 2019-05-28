<?php
session_start();

include_once "conexion.php";

function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];

  foreach ($datos as $posicion => $valor) {
    $datosFinales[$posicion] = trim($valor);
  }

  if(strlen($datosFinales["user"]) == 0){
    $errores["user"] = "El campo no puede estar vacío";
  }

  if (strlen($datosFinales["email"]) == 0) {
    $errores["email"] = "El campo no puede estar vacío";
  } else if(filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores["email"] = "Ingrese un email válido";
  } else if(existeUsuario($datosFinales["email"])){
    $errores["email"] = "El email ya se encuentra registrado";
  }

  if(strlen($datosFinales["pass"] ) == 0 ) {
  $errores [ "pass"] = "El campo no puede estar vacío";
  }

return $errores;

}

function nextID(){
  $json = file_get_contents("db/db.json");
  $array = json_decode($json, true);

  $lastUser = array_pop($array["usuarios"]);

  $lastID = $lastUser["id"];

  return $lastID + 1;
}

function armarUsuario(){
  return [
    "id" =>nextId(),
    "user" => $_POST["user"],
    "email" => $_POST["email"],
    "pass" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
  ];
}

function guardarUsuario($user){
  // $json = file_get_contents("db/db.json");
  // $array = json_decode($json, true);
  //
  // $array["usuarios"][] = $user;
  // $array = json_encode($array, JSON_PRETTY_PRINT);
  // file_put_contents("db/db.json", $array);

  global $db;
  $stmt = $db->prepare("INSERT INTO usuarios (id, nombre, email, password) VALUE (default, :name, :email, :password)");

  $stmt->bindValue( ":name", $user["user"] );
  $stmt->bindValue( ":email", $user["email"] );
  $stmt->bindValue( ":password", $user["pass"]);
  $stmt->execute();

}

function buscarPorEmail($email){
//   $json = file_get_contents("db/db.json");
//   $array = json_decode($json, true);
//
//   foreach ($array["usuarios"] as $usuario) {
//     if($email == $usuario["email"]){
//       return $usuario;
//     }
//   };
//   return null;
// }
global $db;
$stmt=$db->prepare("SELECT * FROM usuarios WHERE email = :email");

$stmt->bindValue(":email", $email);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

return $usuario;
}


function existeUsuario($email){
  return buscarPorEmail($email) !== null;
}

// Validación login

function validarLogin($datos){
  $errores = [];
  $datosFinales = [];

  foreach ($datos as $posicion => $valor) {
    $datosFinales[$posicion] = trim($valor);
  }

  if (strlen($datosFinales["email"]) == 0) {
    $errores["email"] = "El campo no puede estar vacío";
  } else if(filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores["email"] = "Ingrese un email válido";
  } else if(!existeUsuario($datosFinales["email"])){
    $errores["email"] = "El email no existe";
  }

  if(strlen($datosFinales["pass"] ) == 0 ) {
  $errores["pass"] = "El campo no puede estar vacío";
  } else {
    $usuario = buscarPorEmail($datosFinales["email"]);

    if(!password_verify($datosFinales["pass"], $usuario["pass"])){
      $errores["pass"] = "La contraseña no es correcta";
    }
  }
  return $errores;
}

function loguearUsuario($email){
  //Poner en $_SESSION el email del usuario. Simultáneamente hay que agregar session_start() en todos los archivos en donde querramos mantener la sesión.
  $_SESSION["email"] = $email;
}
