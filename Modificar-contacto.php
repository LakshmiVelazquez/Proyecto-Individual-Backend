<?php
	include 'conexion.php';

    $consulta=ConsultarProducto($_GET['telefono']);
  
    function ConsultarProducto($telefono)
    {
      $sentencia="SELECT * FROM contactos WHERE telefono='".$telefono."' ";
      $resultado=mysql_query($sentencia) or die (mysql_error());
      $filas=mysql_fetch_assoc($resultado);
      return [
        $filas['nombres'],
        $filas['apellidos'],
        $filas['correo'],
        $filas['telefono']
      ];
       }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Contacto</title>
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
                    <li><a href="contactos.php" class="Link_Out icon-user">Volver</a></li>
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
    color: white;" action="Modificar-contacto2.php" method="post">
    <div class="tit_registro"><h3>Modificar Contacto</h3></div>
    <input type="hidden" name="telefono" value="<?php echo $_GET['telefono']?> ">
        <div class="formulario">
           <label  for="Nombres">Nombres</label> <br>
           <input class="contenedor_formulario" type="text" name="nombres" value="<?php echo $consulta[0] ?>" placeholder="Nombres del contacto" required>
        </div>
        <div class="formulario">
            <label for="Apellidos">Apellidos</label><br>
	          <input class="contenedor_formulario" type="text" name="apellidos" value="<?php echo $consulta[1] ?>" placeholder="Apellidos del contacto" required>
        </div>
        <div class="formulario">
            <label for="correo">Correo</label><br>
	          <input class="contenedor_formulario" type="text" name="correo" value="<?php echo $consulta[2] ?>" placeholder="Ejem:100" required>
        </div>
        <button type="submit" class="botonsito" >Modificar </button> 
        <button type="reset" class="botonsito botonsito1" >CANCELAR </button> 
    </div>
</form>
   <script src="java/Registro.js"></script>
</body>
</html>