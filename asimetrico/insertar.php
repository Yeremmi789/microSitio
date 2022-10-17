<?php

require '../php/cone.php';

$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$antecedentes = $_POST['antecedentes'];
$adiccion = $_POST['adicciones'];

$keypublica = openssl_pkey_get_public(file_get_contents('publica.txt'));

openssl_public_encrypt($antecedentes,$antecedentes_cifrado,$keypublica);
$antecedentes_cifrado_64 = base64_encode($antecedentes_cifrado);
openssl_public_encrypt($adiccion,$adiccion_cifrado,$keypublica);
$adiccion_cifrado_64 = base64_encode($adiccion_cifrado);

$insertar = "INSERT INTO paciente(nombre,apellido_p,antecedentes,adiccion) VALUES ('$nombre','$apellido_p','$antecedentes_cifrado_64','$adiccion_cifrado_64')";
    $query = mysqli_query($conect,$insertar);

if($query){
    echo "<script> alert('Guardado correctamente');
    location.href = '../asimetrica.html';
  </script>";
   // "<script> alert('Guardado correctamente') </script>";

}else{
   echo '<script> alert("Algo salio mal :( ")</script>';
}
