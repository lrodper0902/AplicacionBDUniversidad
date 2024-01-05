<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include('conexion.php');


    // Se enviaron datos para insertar en la tabla de estudiantes
    $idEstudiante =  $_REQUEST["IDEstudiante"];
    $nombre =  $_REQUEST["Nombre"];
    $dni =  $_REQUEST["DNI"];
    $email =  $_REQUEST["Email"];
    $apellido =  $_REQUEST["Apellido"];
    $fechaInscripcion =  $_REQUEST["FechaInscripcion"];
    $idUniversidad =  $_REQUEST["IDUniversidad"];

    $consulta_estudiante = "INSERT INTO estudiante (IDEstudiante, Nombre, Apellido, DNI, Email, FechaInscripcion, IDUniversidad) VALUES ('$idEstudiante', '$nombre', '$apellido', '$dni', '$email', '$fechaInscripcion', '$idUniversidad')";
    $res_estudiantes = mysqli_query($conexion, $consulta_estudiante) or die("Consulta incorrecta para estudiantes");
    
    header("Location:index.php");
    if (!$res_universidad) {
        if (mysqli_errno($conexion) == 1062) { // 1062 es el código de error para clave duplicada
            echo "Ya existe un registro con la ID: $idUniversidad. Introduce una ID diferente.";
        } else {
            die("Consulta incorrecta para universidades: " . mysqli_error($conexion));
        }
    } else {
        header("Location:index.php");
    }
// Subir

?>
