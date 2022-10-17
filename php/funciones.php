<?php
    require 'cone.php';
    include("SimetricoAES.php");

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $contraseña_cifrada = AES::encriptar($contraseña);
    $insertar = "INSERT INTO usuarios(usuario,correo,contraseña) VALUES ('$usuario','$correo','$contraseña_cifrada')";
    
    $query = mysqli_query($conect,$insertar);

    if($query){
         echo "<script> alert('Guardado correctamente');
          location.href = '../simetrica.html';
        </script>";
        // "<script> alert('Guardado correctamente') </script>";

    }else{
        echo '<script> alert("Algo salio mal :( ")</script>';
    }
?>