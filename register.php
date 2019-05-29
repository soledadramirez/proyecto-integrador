<?php

require_once "init.php";
require_once "classes/validator.php";
require_once "conexion.php";
require_once "funciones.php"; //session_start() está en funciones.php no hay que ponerlo otra vez;
$errores = [];

$usuarioOk = "";
$emailOk = "";

if($_POST){

  $errores = VALIDATOR::validarRegistro($_POST);

//var_dump($_POST);exit;
  $usuarioOk = trim($_POST["user"]);
  $emailOk = trim($_POST["email"]);

  //var_dump($errores);

  if(empty($errores)){
    //armar el usuario
    $usuario = armarusuario();
    //guardarlo
    guardarUsuario($usuario);
    loguearUsuario($_POST["email"]);
    header("Location:home.php");
    exit; //importante tener el exit luego de la redirección.
  }
}


 ?>
<!DOCTYPE html>
<html class="login-reg"lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booky la comunidad lectora</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <header>
         <nav class="cont-logo">
           <img src="img/logo-verde-g.png" alt="">
           <h1 class="titulo"><a href="home.php">Booky</a></h1>
          </nav>
         <p>Ya tienes una cuenta? <a href="login.php"> Iniciar Sesión </a></p>
      </header>
        <div class="cont-form cont-reg">
        <form class="form-login"action="register.php" method="POST" enctype="multipart/form-data">
            <article class="datos">
              <h2>Crea una cuenta</h2>
              <div class="user">
                <label for="user"><i class="fas fa-user"></i></label>
              <?php if(isset($errores["user"])):?>
                <input class="campos-con-errores" id="user" type="text" name="user" value="<?= $usuarioOk ?>" placeholder="nombre de usuario">
                <p class="errores"> <?= $errores["user"] ?></p>
              <?php else: ?>
                <input id="user" type="text" name="user" value="<?= $usuarioOk ?>" placeholder="nombre de usuario">
              <?php endif ?>
              </div>

              <div class="email">
                <label for="email"><i class="far fa-envelope-open"></i></label>
                <?php if (isset($errores["email"])): ?>
                  <input class="campos-con-errores" id="email" type="text" name="email" value="<?= $emailOk?>" placeholder="correo electrónico">
                  <p class="errores"> <?= $errores["email"] ?></p>
                <?php else: ?>
                  <input id="email" type="text" name="email" value="<?= $emailOk?>" placeholder="correo electrónico">
              <?php endif; ?>
                </div>
              <div class="pass">
                <label for="pass"><i class="fas fa-lock"></i></label>
                <?php if (isset($errores["pass"])): ?>
                  <input class="campos-con-errores" id="pass" type="password" name="pass" value="" placeholder= "contraseña">
                  <p class="errores"> <?= $errores["pass"] ?></p>

                <?php else: ?>
                  <input id="pass" type="password" name="pass" value="" placeholder= "contraseña">
                <?php endif; ?>
              </div>
              <div class="pass2">
                <label for="pass2"><i class="fas fa-lock"></i></label>
                <?php if (isset($errores["pass"])): ?>
                  <input class="campos-con-errores" id="pass2" type="password" name="pass2" value="" placeholder= "contraseña">
                  <p class="errores"> <?= $errores["pass"] ?></p>

                <?php else: ?>
                  <input id="pass2" type="password" name="pass2" value="" placeholder= "repite tu contraseña">
                <?php endif; ?>
              </div>
              <div class="politica">
                <p>Al hacer clic en "Registrarte", aceptas nuestras Condiciones, la Política de datos y la Política de cookies.</p>
              </div>
              <button class="registrarte" type="submit" name="button">Registrarte</button>


        </form>
      </div>
        </div>
        <footer>
          <nav>
            <ul>
              <li> <a href="#">Sobre Nosotros</a></li>
              <li> <a href="#">Comunidad</a></li>
            </ul>

        </nav>
      </footer>
  </body>
</html>
