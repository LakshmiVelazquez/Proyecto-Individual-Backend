<?php
    include "conexion.php";
    session_start();
    error_reporting(0);//Para evitar el error de la variable de sesion no abierta
    $mail = $_SESSION['mail'];
    if($mail==null)

    ?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'conexion.php';
			if(isset($_POST['login'])){
				$mail = $_POST['mail'];
				$password = $_POST['password'];
				$log = mysql_query("SELECT * FROM usuarios WHERE  correo='$mail' AND pass='$password' ");
				if (mysql_num_rows($log)==1) {
					$row = mysql_fetch_array($log);
					$_SESSION["correo"] = $row['correo']; 
                    echo 'Iniciando sesión para '.$_SESSION['nombre'].' <p>';
					echo '<script> window.location="horarios.php"; </script>';
				}
				else{
					echo '<script> alert("Correo o contraseña incorrectos.");</script>';
					echo '<script> window.location="login.php"; </script>';
				}
			}
		?>	
</body>
</html>