<?php  ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booky la comunidad lectora</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <div class="container">
        <header>
           <nav class="cont-logo">
             <img src="img/logo-verde-g.png" alt="">
             <h1 class="titulo"><a href="home.html">Booky</a></h1>
            </nav>
           <p>¿No estás registrado? <a href="Copia de registracion2.php"> Creá una cuenta</a></p>
        </header>
      </div>
        <div class="cont-form">
        <form>
            <article class="datos">
              <h2>Login</h2>
              <div class="user">
                <label for="user"><i class="fas fa-user"></i></label>
                <input type="text" name="" value="" placeholder="nombre de usuario">
              </div>
              <div class="pass">
                <label for="pass"><i class="fas fa-lock"></i></label>
                <input type="password" name="pass" value="" placeholder= "contraseña">
              </div>
              <div class="check">
                <input id="recordar" type="checkbox" name="check" value="s">
                <label for="recordar">recordarme</label>
              </div>
              <button class="login" type="submit" name="button">Login</button>
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
