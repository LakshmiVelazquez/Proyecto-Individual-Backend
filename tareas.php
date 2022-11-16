<?php
	session_start();
	include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios Notify UDG</title>
    <!--<link rel="stylesheet" href="assets/css/estilos.css">-->
    <link rel="stylesheet" href="disTareas.css">
  </head>
  <body>

    <nav class="menu">
      <input type="checkbox" id="btnMenu">
      <label for="btnMenu" class="btn-menu">
        <img src="img/bar.png" href="#" alt="Notify UDG">
      </label>
      <a href="#" class="enlace">
        <img src="img/logo.jpg" alt="" class="logo">
      </a>
      <ul>
        <li><a href="horarios.php">Horarios</a></li>
        <li><a href="contactos.php">Contactos</a></li>
        <li><a href="index.php">Cerrar sesión</a></li>
      </ul>
    </nav>
    <div class="Pag_Tar"></div>



    <table style="   opacity: 90%;
    margin: auto;
    width: 600px;
    height: 10%;
    text-align: center;
    border-radius: .5cm;
    background-color: rgba(0,0,0,0.4);
    color: white;">
	<h2 align="center">Lista de Tareas</h2><br><br>
  		<thead>
        <th>Id</th>
  			<th>Materia</th>
  			<th>Tipo</th>
  			<th>Comentario</th>
  			<th>Correo Electronico</th>
        <th>Fecha</th>
  			<th> <a href="Nueva-tarea.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		<?php
        include "conexion.php";
      $sentencia="SELECT * FROM tareas";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['id']; echo "</td>";
          echo "<td>"; echo $filas['materia']; echo "</td>";
          echo "<td>"; echo $filas['tipo']; echo "</td>";
          echo "<td>"; echo $filas['comentario']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>"; echo $filas['fecha']; echo "</td>";
          echo "<td> <a href='Modificar-tarea.php?id=".$filas['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='Eliminar-tarea.php?id=".$filas['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table><br><br><br><br>



  </body>
</html>