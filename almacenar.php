<?php

    include 'conexion_be.php';

    $nombre_full = $_POST['nombre'];
    $apellidos =$_POST['last'];
    $gmail = $_POST['correo'];
    $clave = $_POST['curp'];
    $fecha_nacimiento =$_POST['fecha'];
    
    $query = "INSERT INTO usuario(NOMBRE, APELLIDO, CORREO, CURP, F_DE_NACIMIENTO) 
            VALUES('$nombre_full', '$apellidos', '$gmail', '$clave', '$fecha_nacimiento')";

    $ejecutar = mysqli_query($conexion, $query);        

?>