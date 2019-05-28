<?php
require_once "classes/validator.php";
require_once "funciones.php"; //session_start() está en funciones.php no hay que ponerlo otra vez;
$errores = [];

$emailOk = "";

if($_POST){
  $errores = VALIDATOR::validarLogin($_POST);

  $emailOk = trim($_POST["email"]);

  //var_dump($errores); //  Colocar los errores en los placeholders igual que en register.php

  if (empty($errores)){
    //logueamos
    loguearUsuario($_POST["email"]);
    //redirigimos a home
    header("Location:home.php");
    exit; //importante tener el exit luego de la redirección.
  }
  
}



?>
<!DOCTYPE html>
<html class="login-reg" lang="en" dir="ltr">
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
           <p>¿No estás registrado? <a href="register.php"> Creá una cuenta</a></p>
        </header>
      </div>
        <div class="cont-form">
        <form class="form-login"action="login.php" method="POST" enctype="multipart/form-data">
            <article class="datos">
              <h2>Login</h2>

              <div class="email">
                <label for="email"><i class="fas fa-user"></i></label>
                <?php if (isset($errores["email"])):?>
                  <input class="campos-con-errores" id="email" type="email" name="email" value="<?= $emailOk ?>" placeholder="ingresa tu email">
                  <p class="errores"> <?= $errores["email"] ?></p>
                <?php else: ?>
                  <input type="email" name="email" value="<?= $emailOk ?>" placeholder="ingresa tu email">
                  <?php endif; ?>
              </div>

              <div class="pass">
                <label for="pass"><i class="fas fa-lock"></i></label>
                <?php if (isset($errores["pass"])): ?>
                    <input class="campos-con-errores" id="pass" type="password" name="pass" value="" placeholder= "ingresa tu contraseña">
                    <p class="errores"> <?= $errores["pass"] ?></p>

                <?php else: ?>
                    <input id="pass" type="password" name="pass" value="" placeholder= "ingresa tu contraseña">
                <?php endif; ?>
              </div>

              <div class="check">
                <input id="recordar" type="checkbox" name="check" value="s">
                <label for="recordar">recordarme</label>
              </div>
              <button class="btn-login" type="submit" name="button">Login</button>
              <hr>
            </article>
            <article class="datos-alt">
              <h2>o logueate con</h2>
              <button class="face" type="submit" name="button">facebook</button>
              <button class="google" type="submit" name="button">google</button>
            </article>
          <div class="recover">
            <p><a href="#">Olvidé mi usuario</a> // <a href="#">Olvidé mi contraseña</a></p>
            <p class="cuenta">¿No estás registrado? <a href="registracion.html">Crea una cuenta</a></p>
          </div>
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
