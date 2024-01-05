<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");

        // Consulta para obtener datos de la tabla universidad
        $consulta_universidad = "SELECT * FROM universidad;";
        $res_universidad = mysqli_query($conexion, $consulta_universidad) or die ("Error en la consulta de universidades");

        echo "<center><p class=titulo>Base de datos de Universidad</p></center>";
        echo "<p class=tituloMedio>Universidades:</p>";
        echo "<table align=center>\n";
        echo "<th>IDUniversidad</th>\n";
        echo "<th>Nombre</th>\n";
        echo "<th>Ciudad</th>\n";
        echo "<th>Provincia</th>\n";
        echo "<th>Telefono</th>\n";
        echo "<th>C_P</th>\n";
        echo "<th>Dirección</th>\n";
        echo "<th>Grado</th>\n";
        echo "</tr>\n";

        while ($fila_universidad = mysqli_fetch_array($res_universidad)) {
            echo "<tr>\n";
            echo "<td>".$fila_universidad['IDUniversidad']."</td>\n";
            echo "<td>".$fila_universidad['Nombre']."</td>\n";
            echo "<td>".$fila_universidad['Ciudad']."</td>\n";
            echo "<td>".$fila_universidad['Provincia']."</td>\n";
            echo "<td>".$fila_universidad['Telefono']."</td>\n";
            echo "<td>".$fila_universidad['C_P']."</td>\n";
            echo "<td>".$fila_universidad['Direccion']."</td>\n";
            echo "<td>".$fila_universidad['Grado']."</td>\n";
            echo "<td><a href=modificarUniversidad.php?id=".$fila_universidad['IDUniversidad']."><img src=modificar.jpg border=0></a>";
            echo "<td><a href=eliminarUni.php?id=".$fila_universidad['IDUniversidad']."><img src=eliminar.png border=0></a>";
            echo "</tr>\n";
        }
        echo "<tr><td colspan=9> <hr>";
        echo "<a class=boton href=anadirUniversidad.php>Añadir Universidad </a>";
        echo "</td></tr></table>";


        // Consulta 
        $consulta_estudiante = "SELECT * FROM estudiante;";
        $res_estudiante = mysqli_query($conexion, $consulta_estudiante) or die ("Error en la consulta de estudiantes");

        echo "<p class=tituloMedio>Estudiantes:</p>";
        echo "<table align=center>\n";
        echo "<th>IDEstudiante</th>\n";
        echo "<th>Nombre</th>\n";
        echo "<th>Apellido</th>\n";
        echo " <th>DNI</th>\n";  
        echo "<th>Email</th>\n"; 
        echo "<th>Fecha de Inscripción</th>\n";
        echo "<th>IDUniversidad</th>\n";
        echo "</tr>\n";

        while ($fila_estudiante = mysqli_fetch_array($res_estudiante)) {
            echo "<tr>\n";
            echo "<td>".$fila_estudiante['IDEstudiante']."</td>\n";
            echo "<td>".$fila_estudiante['Nombre']."</td>\n";
            echo "<td>".$fila_estudiante['Apellido']."</td>\n";
            echo "<td>".$fila_estudiante['DNI']."</td>\n";
            echo "<td>".$fila_estudiante['Email']."</td>\n";
            echo "<td>".$fila_estudiante['FechaInscripcion']."</td>\n";
            echo "<td>".$fila_estudiante['IDUniversidad']."</td>\n";
            echo "<td><a href=modificarEstudiantes.php?id=".$fila_estudiante['IDEstudiante']."><img src=modificar.jpg border=0></a>";
            echo "<td><a href=eliminarEst.php?id=".$fila_estudiante['IDEstudiante']."><img src=eliminar.png border=0></a>";
            echo "</tr>\n";
        }

        echo "<tr><td colspan=9> <hr>";
        echo "<a class=boton href=anadirEstudiantes.php>A&ntilde;adir estudiantes </a>";
        echo "</td></tr></table>";

        // echo "<center><a href=consulta.php class=botonCenter>Universidad - Estudiantes</a> </center>";
    ?>
    
    <center><p class=titulo>Consulta de Estudiantes por Universidad</p></center>
    <div class="container">
         <table border="1" align="center" class="consulta">
        <tr>
            <td colspan="2">
                <form method="POST" action="index.php">
                    <center><label class="titPeq" for="universidad_select">Selecciona una universidad</label></center><br>
                    <select name="universidad_select" id="universidad_select">
                        <?php
                        include("conexion.php");

                        $consulta_universidades = "SELECT IDUniversidad, Nombre FROM universidad";
                        $res_universidades = mysqli_query($conexion, $consulta_universidades) or die ("Error en la consulta de universidades");

                        while ($fila_universidad = mysqli_fetch_array($res_universidades)) {
                            echo "<option value='".$fila_universidad['IDUniversidad']."'>".$fila_universidad['Nombre']."</option>";
                        }
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" class="boton" value="Consultar Estudiantes">
                </form>
            </td>
        </tr>

        <tr>
                <td colspan="2">
                    <form method="POST" action="index.php">
                        <center><label class="titPeq" for="fecha_select">Selecciona una fecha de inscripción</label></center><br>
                        <center><p class="letra" for="fecha_select">Fecha de inscripción:</p></center><br>
                        <select name="fecha_select[]" id="fecha_select" multiple>
                            <?php
                            $consulta_fechas = "SELECT DISTINCT FechaInscripcion FROM estudiante";
                            $res_fechas = mysqli_query($conexion, $consulta_fechas) or die ("Error en la consulta de fechas de inscripción");
                            while ($fila_fecha = mysqli_fetch_array($res_fechas)) {
                                echo "<option value='" . $fila_fecha['FechaInscripcion'] . "'>" . $fila_fecha['FechaInscripcion'] . "</option>";
                            }
                            ?>
                        </select>
                        <br><br>
                        <input type="submit" class="boton" value="Consultar Estudiantes por Fecha">
                    </form>
                </td>
            </tr>
        <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['universidad_select'])) {
        $id_universidad_seleccionada = $_POST['universidad_select'];
    
        // Evitar inyección SQL limpiando el valor recibido
        $id_universidad_seleccionada = mysqli_real_escape_string($conexion, $id_universidad_seleccionada);
    
        $consulta_estudiantes = "SELECT estudiante.Nombre AS NombreEstudiante, estudiante.FechaInscripcion FROM estudiante INNER JOIN universidad ON estudiante.IDUniversidad = universidad.IDUniversidad WHERE universidad.IDUniversidad = $id_universidad_seleccionada";
    
        $res_estudiantes = mysqli_query($conexion, $consulta_estudiantes) or die ("Error en la consulta de estudiantes");
        
        // Resto de tu código para mostrar los estudiantes según la universidad seleccionada...
    
    

            echo "<tr>";
            echo "<td colspan='2'>";
            echo "<h3>Estudiantes de la Universidad seleccionada:</h3>";
            echo "<ul>";
            while ($fila_estudiante = mysqli_fetch_array($res_estudiantes)) {
                echo "<li>".$fila_estudiante['NombreEstudiante']." - Fecha de Inscripción: ".$fila_estudiante['FechaInscripcion']."</li>";
            }
            echo "</ul>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

        <table border="1" align="center" class="consulta">
 
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fecha_select'])) {
                $fechas_seleccionadas = $_POST['fecha_select'];

                // Consulta 
                $consulta_estudiantes_fecha = "SELECT estudiante.Nombre AS NombreEstudiante, estudiante.Apellido AS ApellidoEstudiante, estudiante.Email, universidad.Nombre AS NombreUniversidad 
                FROM estudiante INNER JOIN universidad ON estudiante.IDUniversidad = universidad.IDUniversidad 
                WHERE estudiante.FechaInscripcion IN ('" . implode("','", $fechas_seleccionadas) . "')";

                $res_estudiantes_fecha = mysqli_query($conexion, $consulta_estudiantes_fecha) or die ("Error en la consulta de estudiantes por fecha");

                echo "<tr>";
                echo "<td colspan='2'>";
                echo "<table border='1'>";
                echo "<tr><th>Nombre</th><th>Apellido</th><th>Email</th><th>Universidad</th></tr>";
                
                while ($fila_estudiante_fecha = mysqli_fetch_array($res_estudiantes_fecha)) {
                    echo "<tr>";
                    echo "<td>" . $fila_estudiante_fecha['NombreEstudiante'] . "</td>";
                    echo "<td>" . $fila_estudiante_fecha['ApellidoEstudiante'] . "</td>";
                    echo "<td>" . $fila_estudiante_fecha['Email'] . "</td>";
                    echo "<td>" . $fila_estudiante_fecha['NombreUniversidad'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

    </div>    
</body>
</html>
