<?php
$hostname='localhost';
$database='icl';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentando problemas";
}
?>