<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAnadir.css">
    <title>Modificar Universidad</title>
</head>
<body>
    <?php
    
        include('conexion.php');
        //Obtenemos las varibales
        $id_universidad = $_REQUEST["id"];
        //Mirame los tipos de mysqli y para que funcionan
        $consulta_universidad = "SELECT * FROM universidad WHERE IDUniversidad = '".$id_universidad."';";
        $res = mysqli_query($conexion, $consulta_universidad) or die ("consulta incorrecta");
        $fila_universidad = mysqli_fetch_array($res);

    ?>

    <form method="post" action="modificarUniversidad_guardar.php">
    <center><p class="tituloMedio"> Modificar Universidad </p></center>
	<table border="1" align="center" cellpadding="3" cellspacing="0">
    
    <tr>
        <td><div align="right">IDUniversidad</div></td>
        <td><input name="IDUniversidad" type="text" value="<?php echo $fila_universidad['IDUniversidad'];?>" > </td>
    </tr>
    <tr>
        <td><div align="right">Nombre</div></td>
        <td><input name="Nombre" type="text" value="<?php echo $fila_universidad['Nombre'];?>" > </td>
    </tr>
    
    <tr>
        <td><div align="right">Ciudad</div></td>
        <td><input name="Ciudad" type="text" value="<?php echo $fila_universidad['Ciudad'];?>" > </td>
    </tr>
    
    <tr>
        <td><div align="right">Provincia</div></td>
        <td><input name="Provincia" type="text" value="<?php echo $fila_universidad['Provincia'];?>" > </td>
    </tr>
    
    <tr>
        <td><div align="right">Telefono</div></td>
        <td><input name="Telefono" type="text" value="<?php echo $fila_universidad['Telefono'];?>" > </td>
    </tr>
    
    <tr>
        <td><div align="right">C_P</div></td>
        <td><input name="C_P" type="text" value="<?php echo $fila_universidad['C_P'];?>" > </td>
    </tr>
    
    <tr>
        <td><div align="right">Direccion</div></td>
        <td><input name="Direccion" type="text" value="<?php echo $fila_universidad['Direccion'];?>" > </td>
    </tr>

    <tr>
        <td><div align="right">Grado</div></td>
        <td><input name="Grado" type="text"  value="<?php echo $fila_universidad['Grado'];?>" > </td>
    </tr>

    <tr>
		<td colspan=2>
            <div align="center">
                <a href="index.html"><input class="boton" type="submit" name="Submit" value="Atras" /></a>
                <input class="boton" type="submit" name="Submit" value="Guardar cambios" /> <!--Revisar esto-->

            </div>
        </td>
	  </tr>
	</table>
  </form>

</body>
</html>