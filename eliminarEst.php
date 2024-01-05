<?php
// Me conecto a la BD
include('conexion.php');

// Obtengo el ID del estudiante
$idEstudiante = $_REQUEST["id"];

// Creo y construyo la consulta para eliminar de la tabla estudiante
$consultaEstudiante = "DELETE FROM estudiante WHERE IDEstudiante='".$idEstudiante."'";
$resEstudiante = mysqli_query($conexion, $consultaEstudiante) or die("Consulta incorrecta para la tabla estudiante");

header("Location: index.php");
?>
