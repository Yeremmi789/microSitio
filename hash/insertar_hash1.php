<?php
require("../php/cone.php");

$nombre = $_POST["usuario"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$v_contraseña = $_POST["ver_contraseña"];

$contraseña_p = password_hash($contraseña, PASSWORD_DEFAULT);
$correo_p = password_hash($correo, PASSWORD_DEFAULT);

if(password_verify($v_contraseña, $contraseña_p)){
    echo "<script> alert('Verificación exitosa');
    'alert('La contraseña esta escrita correctamente');
    </script>";
    $insertar = "INSERT INTO usuario_hash(nombre,correo,contraseña) VALUES ('$nombre','$correo_p','$contraseña_p')";
    $query = mysqli_query($conect,$insertar);
    if($query){
    echo "<script> alert('Guardado correctamente');
        location.href = 'hash_v1.php';   
    </script>";
    }
}else{
    echo "<script> 
        location.href = 'hash_v1.php';   
        alert('Algo salio mal :( ');
        alert('La contraseña no es la misma');
    </script>";
}

?>