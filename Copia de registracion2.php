<?php
<<<<<<< HEAD:registracion2.html












=======
require_once "funciones.php";
$errores = [];


 ?>
>>>>>>> 01ce0416ce961b63e46286f57bde0c3ef61d27d6:Copia de registracion2.php
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booky la comunidad lectora</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="css/registracion2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <header>
         <nav class="cont-logo">
           <img src="img/logo-verde-g.png" alt="">
           <h1 class="titulo"><a href="home.html">Booky</a></h1>
          </nav>
         <p>Ya tienes una cuenta? <a href="login.html"> Iniciar Sesión </a></p>
      </header>
        <div class="cont-form">
        <form>
            <article class="datos">
              <h2>Crea una cuenta</h2>
              <div class="user">
                <label for="user"><i class="fas fa-user"></i></label>
                <input id="user" type="text" name="user" value="" placeholder="nombre de usuario">
              </div>
              <div class="email">
                <label for="email"><i class="far fa-envelope-open"></i></label>
                <input id="email" type="text" name="" value="" placeholder="correo electrónico">
              </div>
              <div class="pass">
                <label for="pass"><i class="fas fa-lock"></i></label>
                <input id="pass" type="password" name="pass" value="" placeholder= "contraseña">
              </div>
              <div class="repeatpass">
                <label for="pass"><i class="fas fa-lock"></i></label>
                <input type="password" name="pass" value="" placeholder= "repetir contraseña">
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
