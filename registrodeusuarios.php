<?php
include 'conexion.php';
	session_start();



$user=$_POST['name'];
$apell=$_POST['apell'];
$mail=$_POST['mail'];
$pas1=$_POST['pass'];
$pas2=$_POST['pass2'];

//
$resultado=mysql_query("SELECT * FROM usuarios WHERE correo='$mail'",$conexion);
$numero_filas=mysql_num_rows($resultado);

if($numero_filas==1){
	echo"<script type='text/javascript'>
		alert('ESA CUENTA YA EXISTE.');
		window.location.replace('registro.php');
        </script>";
		    		}
else{
    if($pas1==$pas2){
    $sql="INSERT INTO usuarios (id,nombre,apellidos,correo,pass) VALUES(null,'$user','$apell','$mail','$pas1')";
    $act=mysql_query($sql);
	echo"
	alert('REGISTRADO CORRECTAMENTE');
		<script type='text/javascript'>
	  	 window.location.replace('horarios.php');
	  	 </script>";
				   }
else{	echo"<script type='text/javascript'>
	  	 alert('LAS CLAVES NO COINCIDEN');
	  	 window.location.replace('registro.php');
	  	 </script>
	  	 ";
    }
	}
?>