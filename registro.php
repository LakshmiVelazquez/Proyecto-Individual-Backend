<?php
	session_start();
	include 'conexion.php';
?>


<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
      <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
      <title>Login Notify UDG</title>
      <link rel="stylesheet" href="disRegistro.css">
  </head>      
  <body>
      <div class="login-box">
        <!--<img class="avatar" src="img/logo_login.png" alt="Logo Notify UDG">-->
        <img class="avatar" src="img/logo_login.png" alt="Logo Notify UDG">
        <h1>Crear Cuenta</h1>
        <form action="registrodeusuarios.php" method="post">
        <!-- NOMBRE -->
          <label for="username">Nombre</label>
          <input type="text" name="name" required placeholder="Ingrese Nombre">
        <!-- APELLIDOS -->
          <label for="username">Apellidos</label>
          <input type="text" name="apell" required placeholder="Ingrese Apellidos">
        <!-- CORREO -->
          <label for="username">Correo Institucional UDG</label>
          <input type="email" name="mail" required placeholder="Ingrese correo">
        <!-- CONTRASEÑA -->
          <label for="password">Contraseña</label>
          <input type="password" name="pass" required placeholder="Ingrese contraseña">

          <label for="password">Repetir Contraseña</label>
          <input type="password" name="pass2" required placeholder="Ingrese contraseña"><br>
          <input type="submit" value="Crear Cuenta"><br>

          <a href="index.php">Volver a la pagina principal</a><br>
          <a href="#">¿Perdiste tu contraseña? Recuperala</a><br>
          <a href="login.php">¿Ya tienes una cuenta? ¡Ingresa aquí!</a>
        </form>
      </div>
  </body>
</html>