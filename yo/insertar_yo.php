<?php

require("../php/cone.php");

error_reporting(0);

function yo($texto, $clave)
{
    for ($i = 0; $i < strlen($texto); $i++) {
        $texto[$i] = chr(ord($texto[$i]) + $clave);
    }
    return $texto;
}
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$curp = $_POST["texto"];
$des = 4;

if ($_POST["texto"] != "") {
        $cifrado = yo($curp, $des);
        $insertar = "INSERT INTO datos_paciente(nombre,apellido_p,curp) VALUES ('$nombre','$apellido_p','$cifrado')";
        $query = mysqli_query($conect,$insertar);
        if($query){
            echo "<script> alert('Guardado correctamente');
             location.href = 'yo.php';
           </script>";
       }else{
           echo '<script> alert("Algo salio mal :( ")</script>';
       }

}


?>