<?php
require("../php/cone.php");

$nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido_p"];
$curp = $_POST["curp"];
//md5
$antecedentes = $_POST["antecedentes"];
$antecedentes_md5 = md5($antecedentes);
//sha1
$adiccion = $_POST["adicciones"];
$adiccion_sha1 = sha1($adiccion);

$curp_procesado = password_hash($curp, PASSWORD_BCRYPT,["cost"=>11]);
$verificado = password_verify($curp, $curp_procesado);



if($verificado){
    $insertar = "INSERT INTO pacientes_hash(nombre_p,apellido_paterno,curp,antecedentes,adicciones) VALUES ('$nombre','$apellido_p','$curp_procesado','$antecedentes_md5','$adiccion_sha1')";
    $query = mysqli_query($conect,$insertar);
    if($query){
    echo "<script> alert('Guardado correctamente');
        location.href = 'hash_v2.php';   
    </script>";
    }
}


?>