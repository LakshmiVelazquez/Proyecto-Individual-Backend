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
    <title>Perfil Notify UDG</title>
    <!--<link rel="stylesheet" href="assets/css/estilos.css">-->
    <link rel="stylesheet" href="disPerfil.css">
    

  </head>
  <body>
      <!--Cabeza de Pagina Inicio-->
      <nav class="menu">
        <input type="checkbox" id="btnMenu">
        <label for="btnMenu" class="btn-menu">
          <img src="img/bar.png" href="#" alt="Notify UDG">
        </label>
        <a href="#" class="enlace">
          <img src="img/logo.jpg" alt=""  class="logo">
        </a>
        <ul>
          <li><a href="horarios.php">Horarios</a></li>
          <li><a href="contactos.php">Contactos</a></li>
          <li><a href="tareas.php">Tareas, Actividades y Recordatorios</a></li>
          <li><a class=active href="perfil.php">PERFIL</a></li>
          <li><a href="index.php">Cerrar sesión</a></li>
        </ul>
      </nav>
      <!--Cuerpo de Pagina Inicio-->
      <!--Cuerpo de Pagina Inicio-->
      
      <div class="Pag_Perfil">
        <h2>PERFIL</h2>
        <h3>Una vez que el usuario ingresó su cuenta, entra aquí y se muestra la información del usario*</h3>
        <div class="Rec1Beige"></div>
        <div class="Cuad1Azul"></div>

        <div class="Rec2Beige"></div>
        <div class="Cuad2Azul"></div>
        
        <div class="Rec3Beige"></div>
        <div class="Cuad3Azul"></div>
      </div>
  </body>

</html>