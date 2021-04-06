<?php

include 'conexion.php';
$Nombre=$_POST['nombre'];
$Telefono=$_POST['telefono'];
$Password=$_POST['password'];
$Correo=$_POST['correo'];

$consulta="INSERT INTO usuario VALUES('".$Nombre."','".$Telefono."','".$Password."','".$Correo."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);

?>