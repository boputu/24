<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Equipos</title>
  </head>
  <body>
    <?php
    //Se comprueba que se han rellenado todos los campos
    if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {
      //base de datos
      include 'equipo.php';
      $equipo=new equipo();
      $resultado=$equipo->Insertarequipo($_POST["nombre"],  $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);
      echo "<h1>ULTIMO REGISTRO:</h1> <hr><br>";
      $tablaequ=$equipo->DevolverEquipoNombre($_POST["nombre"]);
      foreach ($tablaequ as $fila) {
        echo "Nombre: " .$fila["Nombre"] ."<br>Ciudad: " .$fila["Ciudad"] ."<br>Conferencia: " .$fila["Conferencia"] ."<br>Division: " .$fila["Division"];
      }
      //Actualizamos
      echo "<br>";
      echo "<br>";
      echo "<a href='actualizarequipo.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";
      //Enlace para borrar
      echo "<br>";
      echo "<a href='listaequipos.php'>Borrar registro.</a>";
    }else {
      echo "<a href='insertarequipo.php'> Rellena todos los campos posibles </a>";
    }
     ?>
  </body>
</html>
