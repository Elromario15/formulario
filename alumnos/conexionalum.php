<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "alumnos";
// Create connection
$con = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos); 


$nombre= $_POST ['name'];
$apellido= $_POST ['uname'];
$matricula= $_POST ['matr'];
$grupo= $_POST ['grup'];
$especialidad= $_POST ['espc'];
$fecha= $_POST ['fcha'];



$sql = "INSERT INTO datosalum (matricula, nombre, apellido, grupo, especialidad, fecha) VALUES ('0', '$nombre', '$apellido', '$grupo', '$especialidad', '$fecha')";

$rs = mysqli_query($con, $sql);
if($rs)
   
?>