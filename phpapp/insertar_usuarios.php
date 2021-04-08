<?php

include 'conexion.php';
$Nombre=$_POST['nombre'];
$Telefono=$_POST['telefono'];
$Password=$_POST['password'];
$Correo=$_POST['correo'];

if(empty($Nombre) || empty($Telefono) || empty($Password) || empty($Correo) ){

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1";

    } else {
        echo "ERROR 2";

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO usuario VALUES('".$Nombre."','".$Telefono."','".$Password."','".$Correo."')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "MENSAJE";

        }
    }
        


/*$consulta="INSERT INTO usuario VALUES('".$Nombre."','".$Telefono."','".$Password."','".$Correo."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);*/

?>