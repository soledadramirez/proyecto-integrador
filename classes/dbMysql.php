<?php

/**
 *
 */

include "Db.php";

class DbMysql extends Db
{
  protected $conection;

  function __construct()
  {
    $dsn = "mysql:host=localhost;dbname=booky_db;port=8889";
    $user = "root";
    $pass = "root";


    try {

      $this->conection = new PDO($dsn, $user, $pass);
      $this->conection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "todo bien";

    } catch (\Exception $e) {

    echo "Hubo un error";

    echo $e->getMessage();
    exit;
    }
  }

  public function guardarUsuario(Usuario $usuario){

    $stmt = $this->conection->prepare("INSERT INTO usuarios (id, nombre, email, password) VALUES(default, :nombre, :email, :password)");
    $stmt->bindValue(":nombre", $usuario->getNombre());
    $stmt->bindValue(":email", $usuario->getEmail());
    $stmt->bindValue(":password", $usuario->getPassword());

    $stmt->execute();

  }

  public function buscarPorEmail($email) {
      $stmt = $this->conection->prepare("SELECT * FROM usuarios WHERE email = :email");

      $stmt->bindValue(":email", $email);
      $stmt->execute();

      $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

      if($consulta == false){
        return NULL;
      } else {
        $usuario = new Usuario($consulta);
        return $usuario;
      }

    }

    public function existeUsuario($email){
      return $this->buscarPorEmail($email) !== null;
    }







}





 ?>
