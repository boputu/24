<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar equipo</title>
  </head>
  <body>
    <?php
      include 'equipo.php';
      $equipo=new equipo();

      $borrar=$equipo->BorrarEquipo($_GET["nombre"]);

      if ($borrar==true) {
       ?>
       <p>Borrado exitoso</p>
       <a style="color:green;"href="index.php">Volver a inicio</a>
       <a style="color:red;"href="listaequipos.php"> Borrar otro registro</a>
       <?php
      }else {
        ?>
        <a href="listaequipos.php">No se ha podido borrar.</a>
        <?php
      }
     ?>

  </body>
</html>
