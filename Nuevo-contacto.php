<?php
	session_start();
	include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo Contacto</title>
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
                    <li><a href="contactos.php" class="Link_Out icon-user">Regresar</a></li>
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
    color: white;" action="Nuevo-contacto2.php" method="post">
    <div class="tit_registro"><h3>Nuevo Contacto</h3></div>
        <div class="formulario">
           <label  for="nombres">Nombres</label> <br>
           <input class="contenedor_formulario" type="text" name="nombres" placeholder="Nombres del contacto" required>
        </div>
        <div class="formulario">
           <label  for="apellidos">Apellidos</label> <br>
           <input class="contenedor_formulario" type="text" name="apellidos" placeholder="Apellidos del contacto" required>
        </div>
        <div class="formulario">
            <label for="correo">Correo</label><br>
	          <input class="contenedor_formulario" type="email" name="mail" placeholder="Correo del contacto" required>
        </div>
        <div class="formulario">
            <label for="numero">Telefono</label><br>
	          <input class="contenedor_formulario" type="text" name="telefono" placeholder="Numero del contacto" required>
        </div>
        <button type="submit" class="botonsito" >REGISTRAR </button> 
        <button type="reset" class="botonsito botonsito1" >CANCELAR </button> 
    </div>
</form>

   </div> <!--Como poner Un alert sin ser boton-->
   <script src="java/Registro.js"></script>
</body>
</html>