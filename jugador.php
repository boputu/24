<?php
include 'db.php';
class jugador extends db
{

  function __construct()
  {
    //conexion a la base de datos.
    parent::__construct();
  }

  //funcion insertar jugador
  public function Insertarjugador($codigo, $nombre, $procedencia, $altura, $peso, $posicion, $equipo)
  {
    $sql="INSERT INTO jugadores(codigo, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo) VALUES (".$codigo.", '".$nombre ."', '" .$procedencia ."', '" .$altura ."', ".$peso .", '".$posicion."', '".$equipo ."')";
    $insertjugador=$this->realizarInsert($sql);
    if ($insertjugador=!false) {
      return true;
    }else {
      return false;
    }
  }

  //funcion devolver jugador
  public function DevolverJugadorCodigo($codigo)
  {
    $sql="SELECT * FROM jugadores WHERE codigo=" .$codigo;
    $devolverJugador=$this->realizarConsulta($sql);
    if($devolverJugador!=null){
      //Montamos la tabla de resultados
      $tablajugador=[];
      while($fila=$devolverJugador->fetch_assoc()){
        $tablajugador[]=$fila;
      }
      return $tablajugador;
    }else{
      return null;
    }
  }

  public function ListaJugadores()
  {
    $sql="SELECT * FROM jugadores";
    $listajugadores=$this->realizarConsulta($sql);
    if ($listajugadores!=null) {
      $tablalista=[];
      while ($fila=$listajugadores->fetch_assoc()) {
        $tablalista[]=$fila;
      }
      return $tablalista;
    }else {
      return null;
    }
  }

  //funcion actualizar jugador
  public function ActualizarJugador($codigo, $nombre, $procedencia, $altura, $peso, $posicion, $equipo)
  {
    $sql="UPDATE jugadores SET codigo=" .$codigo .", Nombre='" .$nombre ."', Procedencia='" .$procedencia ."', Altura='" .$altura ."', Peso=" .$peso .", Posicion='" .$posicion ."', Nombre_equipo='" .$equipo ."' WHERE codigo=" .$codigo;
    $actualizarjugador=$this->realizarActualizacion($sql);
    if ($actualizarjugador=!false) {
      return true;
    }else {
      return false;
    }
  }
  //funcion borrado jugador
  public function Borrarjugador($codigo)
  {
    $sql="DELETE FROM jugadores WHERE codigo=".$codigo;
    $borrarjugador=$this->realizarBorrado($sql);
    if ($borrarjugador=!false) {
      return true;
    }else {
      return false;
    }
  }
}

 ?>
