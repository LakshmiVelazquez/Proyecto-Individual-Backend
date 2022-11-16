<?php
	include 'conexion.php';

	ModificarProducto($_POST['telefono'], $_POST['nombres'], $_POST['apellidos'], $_POST['correo']);

	function ModificarProducto($telefono, $nombres, $apellidos, $correo)
	{
		$sentencia="UPDATE contactos SET nombres='".$nombres."', apellidos= '".$apellidos."', correo='".$correo."' WHERE telefono='".$telefono."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Contacto Modificado exitosamente");
	window.location.href='Contactos.php';
</script>