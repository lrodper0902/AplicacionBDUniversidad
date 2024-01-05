<?php
    $servername = 'localhost';
    $database = 'universidad_estudiantes';
    $username = 'root';
    $password = '';

    //Hacemos la conexion
    $conexion = mysqli_connect($servername, $username, $password, $database) or die ("Connection failed ");
    
?>