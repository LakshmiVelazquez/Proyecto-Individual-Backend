<?php
	include "conexion.php";

	EliminarContacto($_GET['id']);

	function EliminarContacto($id)
	{
		$sentencia="DELETE FROM tareas WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Actividad Eliminada exitosamente");
	window.location.href='tareas.php';
</script>