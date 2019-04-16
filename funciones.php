
<?php

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
  }// else if(existeElUsuario($datosFinales["email"])){
  //  $errores["email"] = "El email ya se encuentra registrado";
  //}

  if(strlen($datosFinales["pass"] ) == 0 ) {
  $errores [ "pass"] = "El campo no puede estar vacío";
  }

return $errores;

}



function buscarPorEmail($email) {

  $json = file_get_contents("db.json");
  $array = json_decode($json);

  var_dump($array);
  //
  //
  // if(isset($array["usuarios"])){
  //   foreach ($array["usuarios"] as $usuario) {
  //     if($email === $usuario["email"]){
  //       return $usuario;
  //     }
  //   }
  // }
  // return null;

}

// function existeElUsuario($email){
//  return buscarPorEmail($email) !== null;
// }






















?>
