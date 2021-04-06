<?php
include 'conexion.php';
$Correo=$_POST['correo'];
$Password=$_POST['password'];

//$Correo="usuario1@gmail.com";
//$Password="holamundo2020";

$sentencia=$conexion -> prepare("SELECT * FROM usuario WHERE Correo=? AND Password=?");
$sentencia -> bind_param('ss',$Correo,$Password);
$sentencia -> execute();

$resultado = $sentencia -> get_result();
if($fila = $resultado -> fetch_assoc()){
        echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();
?>