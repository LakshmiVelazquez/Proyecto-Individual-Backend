<?php
    include 'conexion.php';

    $materia=$_POST['materia'];
    $tipo=$_POST['tipo'];
    $comentario=$_POST['comentario'];
    $correo=$_POST['correo'];
    $fecha=$_POST['fecha'];

        $resultado=mysql_query("SELECT * FROM tareas WHERE materia='$materia'",$conexion);
        $numero_filas=mysql_num_rows($resultado);

        if($numero_filas==1){
	        echo"<script type='text/javascript'>
	        	alert('ESA ACTIVIDAD YA EXISTE.');
	        	window.location.replace('Nueva-tarea.php');
              </script>";
	        	    	}
        else{
          $sql="INSERT INTO tareas (id,materia,tipo,comentario,correo,fecha) VALUES(null,'$materia','$tipo','$comentario','$correo','$fecha')";  
          $act=mysql_query($sql);


        $header = "X-Mailer: PHP/" . phpversion();
        $header = "Mime-Version: 1.0 \r\n";
        $header = "Content-Type: text/plain";


        $mensaje = "La materia de su actividad es: " . $materia . "\nQuedó registrado su : " . $tipo . "\nSu comentario: " . $comentario . "\nLa fecha de su actividad es: " . $fecha . "\nEnviado el " . date('d/m/Y', time())."";
       /* $mensaje = "Su : " . $tipo . " \r\n";
        $mensaje = "Su comentario: " . $comentario . " \r\n";
        $mensaje = "La fecha de su actividad es: " . $fecha . " \r\n";
        $mensaje = "Enviado el " . date('d/m/Y', time()). ""; */

        $asunto = "Notificacion sobre actividad agendada";

        mail($correo, $asunto, utf8_decode($mensaje), $header);

	echo"
		<script type='text/javascript'>
        alert('REGISTRADO CORRECTAMENTE');
	  	 window.location.replace('tareas.php');
	  	 </script>";		  
        }
?>