<?php

require '../php/cone.php';




// echo "<script> 
//     function ConfirmDemo(){
//         var mensaje = confirm('Si ya cuenta con una llave, No genere otra, porque reemplazará la que ya tiene y no podrá decrifrar los datos de nuevo');
//         if (mensaje) {
//             var mensaje2 = confirm('¿Segur@ de continuar?');
//             if(mensaje2){               

//             }else{
//                 alert('¡Haz denegado el mensaje!');
//             }
//         alert('¡Gracias por confirmar!');
//         }
//         //Verificamos si el usuario denegó el mensaje
//         else {
//         alert('¡Haz denegado el mensaje!');
//         }
//     };
//     location.href = '../index.html';
// </script>";


// ***************************************************
$config = array(
    "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
    'private_key_bits'=> 2048,
    'default_md'=> "sha256",
);

$generar = openssl_pkey_new($config);
 openssl_pkey_export($generar,$keypriv,NULL,$config);

 $keypub = openssl_pkey_get_details($generar);

 file_put_contents('privada.txt',$keypriv);
 file_put_contents('publica.txt',$keypub['key']);

 echo "<script> alert('El archivo se ha generado/reemplazado con éxito');
      location.href = '../index.html';
 </script>";

// ***************************************************

// ***************************************************
 //echo "<br><h5>Las llaves se han creado</h5><br>";

/*
include 'Crypt/RSA.php';
$rsa = new Crypt_RSA();


echo "imprimo mi objeti rsa".$rsa."<br>";
extract($rsa->createKey());

//texto que se va a encriptar
$plaintext = 'bajoterra';
echo "Imprimo el valor de mi variable que deseo encriptar: ".$plaintext."<br>";
//generar llave privada
$rsa->loadkey($privatekey);
echo "imprimo la llave privada que fue generada: "."<br>".$privatekey."<br><br>";
//
$ciphertext = $rsa->encrypt($plaintext);
echo "imprimo mi variable encriptada: <br>".$ciphertext."<br><br>";

$rsa->loadKey($publickey);
echo "imprimo mi variable desencriptada: ".$rsa->decrypt($ciphertext);
*/

// ****************************************************************
// $nombre = $_POST['nombre'];
// $apellido_p = $_POST['apellido_p'];
// $antecedentes = $_POST['antecedentes'];
// $adiccion = $_POST['adicciones'];
// ****************************************************************

// mostrar datos
// $datos = 'Mi materia Seguridad informatica';

// echo "<br>El texto a difrar es: ".$adiccion."<br><br>";

// $keypublica = openssl_pkey_get_public(file_get_contents('publica.key'));
// openssl_public_encrypt($adiccion,$datos_cifrados,$keypublica);

// echo "Los datos cifrados son: ".$datos_cifrados."<br><br>";

// $keyprivada = openssl_pkey_get_private(file_get_contents('privada.key'));

// openssl_private_decrypt($datos_cifrados,$datos_descrifrados,$keyprivada);
// echo "Los datos descrifrados son: ".$datos_descrifrados."<br><br>";

// ****************************************************************
// $keypublica = openssl_pkey_get_public(file_get_contents('publica.txt'));

// openssl_public_encrypt($antecedentes,$antecedentes_cifrado,$keypublica);
// $antecedentes_cifrado_64 = base64_encode($antecedentes_cifrado);
// openssl_public_encrypt($adiccion,$adiccion_cifrado,$keypublica);
// $adiccion_cifrado_64 = base64_encode($adiccion_cifrado);
// ************************************************************
//echo "Los datos cifrados son: ".$antecedentes_cifrado_64."<br><br>";


//$sql = "INSERT INTO paciente(`nombre`,`apellido_p`,`sangre`,`adicción`) VALUES ('$nombre','$apellido_p',$tipo_sangre','$datos_cifrados');";
// $sql = "INSERT INTO paciente(nombre,apellido_p,sangre,adicción) VALUES ('$nombre','$apellido_p',$antecedentes_cifrado_64','$adiccion_cifrado_64');";
// $consulta = mysqli_query($conect,$sql); 

// ******************************************************
// $insertar = "INSERT INTO paciente(nombre,apellido_p,antecedentes,adiccion) VALUES ('$nombre','$apellido_p','$antecedentes_cifrado_64','$adiccion_cifrado_64')";
//     $query = mysqli_query($conect,$insertar);

// if($query){
//     echo "<script> alert('Guardado correctamente');
//     location.href = '../asimetrica.html';
//   </script>";
//    // "<script> alert('Guardado correctamente') </script>";

// }else{
//    echo '<script> alert("Algo salio mal :( ")</script>';
// }
// ****************************************************************

?>