<?php
class Validator {

  public static function validarRegistro($datos){
    $errores = ["origen" => "validator"];
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

  public static function validarLogin($datos){
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


}



 ?>
