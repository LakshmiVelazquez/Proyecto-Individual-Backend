<?php
include 'conexion.php';

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];
//
$resultado=mysql_query("SELECT * FROM contactos WHERE telefono='$telefono'",$conexion);
$numero_filas=mysql_num_rows($resultado);

if($numero_filas==1){
	echo"<script type='text/javascript'>
		alert('ESE CONTACTO YA EXISTE.');
		window.location.replace('Nuevo-contacto.php');
        </script>";
		    	}
else{
    $sql="INSERT INTO contactos (id,nombres,apellidos,correo,telefono) VALUES(null,'$nombres','$apellidos','$mail','$telefono')";  
    $act=mysql_query($sql);
	echo"
		<script type='text/javascript'>
        alert('REGISTRADO CORRECTAMENTE');
	  	 window.location.replace('contactos.php');
	  	 </script>";		  
    }
?>