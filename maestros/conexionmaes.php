<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "alumnos";
    // Create connection
    $con = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos); 

 
    $nombre= $_POST ['name'];
    $apellido= $_POST ['uname'];
    $materiaasig= $_POST ['mtraig'];
    $fecha= $_POST ['fcha'];


 
    $sql = "INSERT INTO datosmaestro (id, nombre, apellido, especialidad) VALUES ('0', '$nombre', '$apellido', '$materiaasig')";
 
    $rs = mysqli_query($con, $sql);
    if($rs)
?>