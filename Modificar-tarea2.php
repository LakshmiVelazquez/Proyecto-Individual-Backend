<?php
	include 'conexion.php';

	ModificarProducto($_POST['id'], $_POST['materia'], $_POST['tipo'], $_POST['comentario'], $_POST['correo'], $_POST['fecha']);

	function ModificarProducto($id, $materia, $tipo, $comentario, $correo, $fecha)
	{
		$sentencia="UPDATE tareas SET materia='".$materia."', tipo= '".$tipo."', comentario='".$comentario."', correo='".$correo."', fecha='".$fecha."' WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("actividad Modificado exitosamente");
	window.location.href='tareas.php';
</script>