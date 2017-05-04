<?php
include 'db.php';
class equipo extends db
{

  function __construct()
  {
    //conexion a la base de datos.
    parent::__construct();
  }

  //inserta equipo
  public function Insertarequipo($nombre, $ciudad, $conferencia, $division)
  {
    $sql="INSERT INTO equipos(Nombre, Ciudad, Conferencia, Division) VALUES ('".$nombre."', '".$ciudad ."', '" .$conferencia ."', '" .$division ."')";
    $insertequipo=$this->realizarInsert($sql);
    if ($insertequipo=!false) {
      return true;
    }else {
      return false;
    }
  }

  //funcion devolver equipos
  public function DevolverEquipoNombre($nombre)
  {
    $sql="SELECT * FROM equipos WHERE Nombre='" .$nombre ."'";
    $devolverEquipo=$this->realizarConsulta($sql);
    if($devolverEquipo!=null){
      //Tabla con los resultados
      $tablaequipo=[];
      while($fila=$devolverEquipo->fetch_assoc()){
        $tablaequipo[]=$fila;
      }
      return $tablaequipo;
    }else{
      return null;
    }
  }

  public function ListaEquipos()
  {
    $sql="SELECT * FROM equipos";
    $listaequipos=$this->realizarConsulta($sql);
    if ($listaequipos!=null) {
      $tablalista=[];
      while ($fila=$listaequipos->fetch_assoc()) {
        $tablalista[]=$fila;
      }
      return $tablalista;
    }else {
      return null;
    }
  }

  //funcion actualizar equipo
  public function ActualizarEquipo($nombre, $ciudad, $conferencia, $division)
  {
    $sql="UPDATE equipos SET Nombre='" .$nombre ."', Ciudad='" .$ciudad ."', Conferencia='" .$conferencia ."', Division='" .$division ."' WHERE Nombre='" .$nombre ."'";
    $actualizarequipo=$this->realizarActualizacion($sql);
    if ($actualizarequipo=!false) {
      return true;
    }else {
      return false;
    }
  }
  //funcion borrar equipo
  public function Borrarequipo($nombre)
  {
    $sql="DELETE FROM equipos WHERE Nombre='".$nombre ."'";
    $borrarequipo=$this->realizarBorrado($sql);
    if ($borrarequipo=!false) {
      return true;
    }else {
      return false;
    }
  }
}

 ?>
