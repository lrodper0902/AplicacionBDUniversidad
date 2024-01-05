<?php

include('conexion.php');

        // Obtengo las variables para universidades
        $IDUniversidad = $_POST["IDUniversidad"];
        $Nombre = $_POST["Nombre"];
        $Ciudad = $_POST["Ciudad"];
        $Provincia = $_POST["Provincia"];
        $Telefono = $_POST["Telefono"];
        $C_P = $_POST["C_P"];
        $Direccion = $_POST["Direccion"];
        $Grado = $_POST["Grado"];

        // Consulta para actualizar universidades
        $consulta_universidades = "UPDATE universidad SET Nombre='$Nombre', Ciudad='$Ciudad', Provincia='$Provincia', Telefono='$Telefono', C_P='$C_P', Direccion='$Direccion', Grado='$Grado' WHERE IDUniversidad='$IDUniversidad';";
        $res_universidades = mysqli_query($conexion, $consulta_universidades) or die("Consulta incorrecta para universidades");

        header("Location:index.php");         
?>
