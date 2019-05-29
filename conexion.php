<?php

$dsn = "mysql:host=localhost;dbname=booky_db;port=8889";
$user = "root";
$pass = "root";


try {

  $db = new PDO($dsn, $user, $pass);

  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "todo bien";

} catch (\Exception $e) {

echo "Hubo un error";

echo $e ->getMessage();
exit;
}




 ?>
