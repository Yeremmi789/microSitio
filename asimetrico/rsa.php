<?php

$datos = 'Mi materia Seguridad informatica';

echo "<br>El texto a difrar es: ".$datos."<br><br>";

$keypublica = openssl_pkey_get_public(file_get_contents('publica.key'));
openssl_public_encrypt($datos,$datos_cifrados,$keypublica);
echo "Los datos cifrados son: ".$datos_cifrados."<br><br>";

$keyprivada = openssl_pkey_get_private(file_get_contents('privada.key'));

openssl_private_decrypt($datos_cofrados,$datos_descrifrados,$keyprivado);
echo "Los datos descrifrados son: ".$datos_encriptados."<br><br>";

?>