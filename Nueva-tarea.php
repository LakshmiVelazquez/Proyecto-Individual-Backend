<?php
	session_start();
	include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nueva Tarea</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="Registro.css">
    <link href="https://file.myfontastic.com/nDK7MqvEEyGfRpMZrYLdHX/icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Fuentes\styles.css">

</head>
<body>
        <nav class="navi">
               <div class="Container Container--Flex">
               <span class="icon-menu" id="Menu_icon" ></span>
                  <ul class="Menu" id="Menu"> 
                    <li><a href="tareas.php" class="Link_Out icon-user">Regresar</a></li>
                </ul>
                </div>
            </nav>
   </header>
   
<form style="   opacity: 90%;
    margin: auto;
    width: 300px;
    height: 60%;
    text-align: center;
    border-radius: .5cm;
    background-color: rgba(0,0,0,0.4);
    color: white;" action="Nueva-tarea2.php" method="post">
    <div class="tit_registro"><h3>Nueva Tarea</h3></div>
        <div class="formulario">
           <label  for="Materia">Materia</label> <br>
           <input class="contenedor_formulario" type="text" name="materia" placeholder="Materia de la actividad" required>
        </div>
        <div class="formulario">
           <label  for="Tipo">Tipo</label> <br>
           <select class="contenedor_formulario" type="text" name="tipo" required>
                <option selected>Tarea</option>
                <option>Examen</option>
                <option>Otro</option>
                </select>

        </div>
        <div class="formulario">
            <label for="comentario">Comentario</label><br>
	          <input class="contenedor_formulario" type="text" name="comentario" placeholder="cualquier nota importante" required>
        </div>
        <div class="formulario">
            <label for="correo">Correo</label><br>
	          <input class="contenedor_formulario" type="email" name="correo" placeholder="Correo personal" required>
        </div>
        <div class="formulario">
            <label for="Fecha">Fecha</label><br>
	          <input class="contenedor_formulario" type="date" name="fecha" placeholder="fecha de la actividad" required>
        </div>
        <button type="submit" class="botonsito" >REGISTRAR </button> 
        <button type="reset" class="botonsito botonsito1" >CANCELAR </button> 
    </div>
</form>

   <script src="java/Registro.js"></script>
</body>
</html>