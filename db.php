<?php

class db
{
  //Atributos necesarios para la conexion.
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";
  //Conector
  private $conexion;
  //Propiedades para controlar errores
  private $error=false;
  private $error_msj="";

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion.";
      }
  }
  //Saber si hay error
  function hayError(){
    return $this->error;
  }
  //Funcion que devuelve mensaje de error
  function msjError(){
    return $this->error_msj;
  }
  public function realizarConsulta($consulta){
    if($this->error==false){
      $resultado = $this->conexion->query($consulta);
      return $resultado;
    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }

  public function realizarInsert($insert){
    if($this->error==false){
      if (!$this->conexion->query($insert)) {
        echo "Falló la insercion en la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar la insercion: ".$insert;
      return false;
    }
  }

  public function realizarActualizacion($update)
  {
    if($this->error==false){
      if (!$this->conexion->query($update)) {
        echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar la actualizacion: ".$update;
      return false;
    }
  }

  public function realizarBorrado($delete)
  {
    if($this->error==false){
      if (!$this->conexion->query($delete)) {
        echo "Falló el borrado de la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar el borrado: ".$update;
      return false;
    }
  }
}
 ?>
