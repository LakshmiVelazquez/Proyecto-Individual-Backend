<?php
	include "conexion.php";

	EliminarContacto($_GET['telefono']);

	function EliminarContacto($telefono)
	{
		$sentencia="DELETE FROM contactos WHERE telefono='".$telefono."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Contacto Eliminado exitosamente");
	window.location.href='Contactos.php';
</script>