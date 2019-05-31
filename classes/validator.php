<?php
include "dbMysql.php";

$dbMysql = new DbMysql;

class Validator {

  public static function validarRegistro($datos){
    global $dbMysql;

    $errores = [];
    $datosFinales = [];

    foreach ($datos as $posicion => $valor) {
      $datosFinales[$posicion] = trim($valor);
    }
    /*    //validar Imagen
    if ($_FILES){
      //var_dump($_FILES);
      if($_FILES["avatar"]["name"] == ""){
        $errores["avatar"] = "No se seleccionó archivo.";
      } elseif($_FILES["avatar"]["error"]!==0){
        $errores["avatar"] = "Hubo un error en la subida del archivo";
      } else{
        //chequear que sea un archivo con la extensión deseada;
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        if($ext!== "jpg"){
          $errores["avatar"]= "El archivo debe ser de tipo jpg, jpeg o png";
        }
      }
    }
    validacion genero
    if(!isset($datosFinales["gender"])){
      $errores["gender"] = "Por favor elija una opción.";
    }
    */

    if(strlen($datosFinales["user"]) == 0){
      $errores["user"] = "El campo no puede estar vacío";
    }

    if (strlen($datosFinales["email"]) == 0) {
      $errores["email"] = "El campo no puede estar vacío";
    } else if(filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false){
      $errores["email"] = "Ingrese un email válido";
    } else if($dbMysql->existeUsuario($datosFinales["email"])){
      $errores["email"] = "El email ya se encuentra registrado";
    }

    if(strlen($datosFinales["pass"] ) == 0 ) {
    $errores [ "pass"] = "El campo no puede estar vacío";
  } else if (strlen($datosFinales["pass2"]) == 0){
    $errores ["pass"] = "Ingresa nuevamente tu contraseña";
  } else if ($datosFinales["pass"] !== $datosFinales["pass2"]){
    $errores ["pass"] = "Las contraseñas no coinciden";
  }
  return $errores;
  }

  public static function validarLogin($datos){
    //llamar global dbMysql

    $errores = [];
    $datosFinales = [];

    foreach ($datos as $posicion => $valor) {
      $datosFinales[$posicion] = trim($valor);
    }

    if (strlen($datosFinales["email"]) == 0) {
      $errores["email"] = "El campo no puede estar vacío";
    } else if(filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false){
      $errores["email"] = "Ingrese un email válido";
    } else if(!$dbMysql->existeUsuario($datosFinales["email"])){
      $errores["email"] = "El email no existe";
    }

    if(strlen($datosFinales["pass"] ) == 0 ) {
    $errores["pass"] = "El campo no puede estar vacío";
    } else {
      $usuario = $dbMysql->buscarPorEmail($datosFinales["email"]);

      if(!password_verify($datosFinales["pass"], $usuario["pass"])){
        $errores["pass"] = "La contraseña no es correcta";
      }
    }
    return $errores;
  }
/*

    } else if(strlen($datosFinales["pass2"]) == 0){
      $errores["pass"] = "Por favor verifique la contraseña";
    } else if ($datosFinales["pass"] !== $datosFinales["pass2"]){
      $errores["pass"] = "Las contraseñas no coinciden";
    }

    return $errores;
  }*/

}



 ?>
