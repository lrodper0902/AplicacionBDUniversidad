<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAnadir.css">
    <title>Añadir</title>
</head>
<body>
    <center><p class="tituloMedio"> A&ntilde;adir Universidad </p></center>
    <form method="post" action="anadir_guardarUni.php">
        <table class="uni" border="1" align="center" cellpadding="3" cellspacing="0">
        <tr>
            <td><div align="right">IDUniversidad</div></td>
            <td><input name="IDUniversidad" type="number"></td>
        </tr>
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="Nombre" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Ciudad</div></td>
            <td><input name="Ciudad" type="text" ></td>
        </tr>
        <tr>
            <td><div align="right">Provincia</div></td>
            <td><input name="Provincia" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Telefono</div></td>
            <td><input name="Telefono" type="text" ></td>
        </tr>
        <tr>
            <td><div align="right">C_P</div></td>
            <td><input name="C_P" type="text" ></td>
        </tr>
        <tr>
            <td><div align="right">Direccion</div></td>
            <td><input name="Direccion" type="text" ></td>
        </tr>
        <tr>
            <td><div align="right">Grado</div></td>
            <td><input name="Grado" type="text" ></td>
        </tr>
        <tr>
            <td colspan=2>
                <div align="center">
                    <input class="boton" type="submit" name="Submit" value="Enviar" />
                    <a href="index.html"><input class="boton" type="submit" name="Submit" value="Atras" /></a>
                </div>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>