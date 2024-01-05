<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include('conexion.php');

    header("Location:index.php");
    // Se enviaron datos para insertar en la tabla de universidades
    $idUniversidad = $_REQUEST["IDUniversidad"];
    $nombreUniversidad =  $_REQUEST["Nombre"];
    $ciudad =  $_REQUEST["Ciudad"];
    $provincia =  $_REQUEST["Provincia"];
    $telefono =  $_REQUEST["Telefono"];
    $c_p =  $_REQUEST["C_P"];
    $direccion =  $_REQUEST["Direccion"];
    $grado =  $_REQUEST["Grado"];

    $consulta_universidad = "INSERT INTO universidad (IDUniversidad, Nombre, Ciudad, Provincia, Telefono, C_P, Direccion, Grado) VALUES ('$idUniversidad', '$nombreUniversidad', '$ciudad', '$provincia', '$telefono', '$c_p', '$direccion', '$grado')";
    $res_universidad = mysqli_query($conexion, $consulta_universidad) or die("Consulta incorrecta para universidades");

    header("Location:index.php");

?>
