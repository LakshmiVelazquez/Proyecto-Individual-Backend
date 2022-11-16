    <?php
    include "conexion.php";
    session_start();
    error_reporting(0);//Para evitar el error de la variable de sesion no abierta
    $mail = $_SESSION['mail'];
    if($mail==null)

    ?>
    <html lang="es">
    <head>
         <meta charset="UTF-8">
         <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <title>Login Notify UDG</title>
        <link rel="stylesheet" href="disLogin.css">
    </head>      
    <body>
        <div class="login-box">
              <!--<img class="avatar" src="img/logo_login.png" alt="Logo Notify UDG">-->
              <img class="avatar" src="img/logo_login.png" alt="Logo Notify UDG">
              <h1>Iniciar Sesión</h1>
            <form action="validar.php" method="post">
                 <!-- CORREO -->
                 <label for="mail">Correo Electronico</label>
                 <input type="email" name="mail" placeholder="Ingrese correo" required>
                 <!-- CONTRASEÑA -->
                 <label for="password">Contraseña</label>
                 <input type="password" name="password" placeholder="Ingrese contraseña" required><br>
                 <input type="submit" name="login" value="Ingresar"><br>
          
                 <a href="index.php">Volver a la pagina principal</a><br>
                 <a href="#">¿Perdiste tu contraseña? Recuperala</a><br>
                 <a href="registro.php">¿No tienes una cuenta? ¡Crea una!</a>
          </form>
        </div>
    </body>
    </html>