<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Jugadores</title>
  </head>
  <body>
    <table border="1px">
        <tr>
          <th style="color:blue; font-weight:bold;">Codigo</th>
          <th style="color:blue; font-weight:bold;">Nombre</th>
          <th style="color:blue; font-weight:bold;">Procedencia</th>
          <th style="color:blue; font-weight:bold;">Altura</th>
          <th style="color:blue; font-weight:bold;">Peso</th>
          <th style="color:blue; font-weight:bold;">Posicion</th>
          <th style="color:blue; font-weight:bold;">Equipo</th>
          <th style="color:blue; font-weight:bold;">Borrar</th>
        </tr>
      <?php
        include 'jugador.php';
        $jugador=new jugador();
        $tablalista=$jugador->ListaJugadores();
        foreach ($tablalista as $fila) {
            echo "<tr><td>" .$fila["codigo"]."</td><td>".$fila["Nombre"]."</td><td>".$fila["Procedencia"]."</td><td>".$fila["Altura"]
            ."</td><td>".$fila["Peso"]."</td><td>".$fila["Posicion"]."</td><td>".$fila["Nombre_equipo"]."</td><td><a href='borrarjugadorDB.php?codigo=".$fila["codigo"]."'>Borrar registro</a></td></tr>";
        }
       ?>
    </table>
  </body>
</html>
