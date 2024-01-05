<?php
// Me conecto a la BD
include('conexion.php');

// Obtengo el ID de la universidad
$idUniversidad = $_REQUEST["id"];

// Creo y construyo la consulta para eliminar de la tabla universidad
$consultaUniversidad = "DELETE FROM universidad WHERE IDUniversidad='".$idUniversidad."'";
$resUniversidad = mysqli_query($conexion, $consultaUniversidad) or die("Consulta incorrecta para la tabla universidad");

header("Location: index.php");
?>
