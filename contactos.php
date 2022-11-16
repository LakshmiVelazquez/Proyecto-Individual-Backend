<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios Notify UDG</title>
    <!--<link rel="stylesheet" href="assets/css/estilos.css">-->
    <link rel="stylesheet" href="disContactos.css">
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
        <li><a href="tareas.php">Tareas, Actividades y Recordatorios</a></li>
        <li><a href="index.php">Cerrar sesión</a></li>
      </ul>
    </nav>
    <div class="Pag_Contac"></div>

    <table style="   opacity: 90%;
    margin: auto;
    width: 600px;
    height: 10%;
    text-align: center;
    border-radius: .5cm;
    background-color: rgba(0,0,0,0.4);
    color: white;">
	<h2 align="center">Lista de Contactos</h2><br><br>
  		<thead>
  			<th>Nombres</th>
  			<th>Apellidos</th>
  			<th>Correo Electronico</th>
  			<th>Numero Telefonico</th>
  			<th> <a href="Nuevo-contacto.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		<?php
        include "conexion.php";
      $sentencia="SELECT * FROM contactos";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['nombres']; echo "</td>";
          echo "<td>"; echo $filas['apellidos']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>"; echo $filas['telefono']; echo "</td>";
          echo "<td> <a href='Modificar-contacto.php?telefono=".$filas['telefono']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='Eliminar-contacto.php?telefono=".$filas['telefono']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table><br><br><br><br>

  </body>
</html>