<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAnadir.css">
    <title>Document</title>
</head>
<body>
    <center><p class="tituloMedio"> A&ntilde;adir Estudiantes </p></center>
    <form method="POST" action="anadir_guardarEst.php">
    <table class="est" border="1" align="center" cellpadding="3" cellspacing="0">
        <tr>
            <td><div align="right">IDEstudiante</div></td>
            <td><input name="IDEstudiante" type="number"></td>
        </tr>
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="Nombre" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Apellido</div></td>
            <td><input name="Apellido" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">DNI</div></td>
            <td><input name="DNI" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Email</div></td>
            <td><input name="Email" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Fecha de Inscripción</div></td>
            <td><input name="FechaInscripcion" type="date"></td>
        </tr>
        <tr>
            <td><div align="right">IDUniversidad</div></td>
            <td>
                <select name="IDUniversidad">
                    <?php
                    include("conexion.php");

                    $consulta_universidades = "SELECT IDUniversidad, Grado FROM universidad";
                    $res_universidades = mysqli_query($conexion, $consulta_universidades) or die ("Error en la consulta de universidades");

                    while ($fila_universidad = mysqli_fetch_array($res_universidades)) {
                        echo "<option value='".$fila_universidad['IDUniversidad']."'>".$fila_universidad['IDUniversidad']." - ".$fila_universidad['Grado']."</option>";
                    }
                    ?>
                </select>
            </td>
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