<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAnadir.css">
    <title>Modificar Estudiantes</title>
</head>
<body>

<?php
    include('conexion.php');
    // Obtener el ID del estudiante
    $id_estudiante = $_REQUEST["id"];
    // Consulta para obtener los datos del estudiante por su ID
    $consulta_estudiante = "SELECT * FROM estudiante WHERE IDEstudiante = '".$id_estudiante."'";
    $res = mysqli_query($conexion, $consulta_estudiante) or die ("Consulta incorrecta");
    $fila_estudiante = mysqli_fetch_assoc($res);
?>

<form method="post" action="modificarEstudiantes_guardar.php">
    <center><p class="tituloMedio"> Modificar Universidad </p></center>
    <table border="1" align="center" cellpadding="3" cellspacing="0">
        <tr>
            <td><div align="right">IDEstudiante</div></td>
            <td><input name="IDEstudiante" type="text" value="<?php echo $fila_estudiante['IDEstudiante']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="Nombre" type="text" value="<?php echo $fila_estudiante['Nombre']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Apellido</div></td>
            <td><input name="Apellido" type="text" value="<?php echo $fila_estudiante['Apellido']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">DNI</div></td>
            <td><input name="DNI" type="text" value="<?php echo $fila_estudiante['DNI']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Email</div></td>
            <td><input name="Email" type="email" value="<?php echo $fila_estudiante['Email']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Fecha de Inscripción</div></td>
            <td><input name="FechaInscripcion" type="date" value="<?php echo $fila_estudiante['FechaInscripcion']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">IDUniversidad</div></td>
            <td><input name="IDUniversidad" type="text" value="<?php echo $fila_estudiante['IDUniversidad']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <a href="index.html"><input class="boton" type="submit" name="Submit" value="Atras" /></a>
                    <input class="boton" type="submit" name="Submit" value="Guardar cambios" />
                </div>
            </td>
        </tr>
    </table>
</form>




</body>
</html>