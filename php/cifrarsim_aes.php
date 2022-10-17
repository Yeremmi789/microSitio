<?php
function cifrar($mensaje, $llave){
    //Vector de inicialización para generar el cifrado
    $iniciarV =openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    //Método para cifrar la información
    $men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $iniciarV);
    //Regresar el mensaje ya una vez cifrado
    return base64_encode($men_encriptado."::".$iniciarV);
}

function descifrar($mensaje, $llave){
    list($datos_encriptados, $iniciarV) = explode('::', base64_decode($mensaje),2);
    return openssl_decrypt($datos_encriptados, "AES-256-CBC",$llave,0,$iniciarV);
}
/*
$llave = "holamundo";
echo "El valor de la llave es: ".$llave."<br><br>";

$mensaje_cifrar = "Segunda Tarea de Seguridad Informática";
echo "El mensaje a cifrar es: ".$mensaje_cifrar."<br><br>";

$mensaje_cifrado = cifrar($mensaje_cifrar, $llave);
echo "El mensaje cifrado es: ".$mensaje_cifrado."<br><br>";

$mensaje_descifrado = descifrar($mensaje_cifrado, $llave);
echo "El mensaje desifrado es: ".$mensaje_descifrado;
*/
?>