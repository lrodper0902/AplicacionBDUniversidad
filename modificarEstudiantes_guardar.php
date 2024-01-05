<?php
include('conexion.php');
    // Obtengo las variables para estudiantes
    $IDEstudiante = $_POST["IDEstudiante"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $DNI = $_POST["DNI"];
    $Email = $_POST["Email"];
    $FechaInscripcion = $_POST["FechaInscripcion"];
    $IDUniversidad = $_POST["IDUniversidad"];

    // Consulta para actualizar estudiantes
    $consulta_estudiantes = "UPDATE estudiante SET Nombre='$Nombre', Apellido='$Apellido', DNI='$DNI', Email='$Email', FechaInscripcion='$FechaInscripcion', IDUniversidad='$IDUniversidad' WHERE IDEstudiante='$IDEstudiante';";
    $res_estudiantes = mysqli_query($conexion, $consulta_estudiantes) or die("Consulta incorrecta para estudiantes");
    header("Location:index.php");
?>
