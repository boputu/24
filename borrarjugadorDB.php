<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar jugador</title>
  </head>
  <body>
    <?php
      include 'jugador.php';
      $jugador=new jugador();

      $borrar=$jugador->Borrarjugador($_GET["codigo"]);

      if ($borrar==true) {
       ?>
       <p>Borrado exitoso</p>
       <a style="color:green;"href="index.php">Volver a inicio</a>
       <a style="color:red;"href="listajugadores.php"> Borrar otro registro</a>
       <?php
      }else {
        ?>
        <a href="listajugadores.php">Fallo en el borrado.</a>
        <?php
      }
     ?>
  </body>
</html>
