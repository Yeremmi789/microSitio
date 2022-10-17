<?php
include('../php/cone.php');
$claveprivado = 0; //variable general para guardar la clave privada


if (isset($_POST["descifrado_dato"])) {
    echo "<script>
        var = 'Coloque la clave correspondiente';
        alert(var);
        </script>";
    $claveprivado = $_POST["claveprivado"]; //para recibir y guardar la llave privada   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista RSA</title>
    <link rel="stylesheet" href="../estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* .limite_caracteres{
            display: -webkit-box;
            -webkit-box-orient: horizontal;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
        } */

        #listado1 {
            /* max-width: 95%; */
            /* margin: 5px 20px 20px 20px; */
            /* display: flex; */
            /* display: -webkit-box;*/
            -webkit-box-orient: horizontal;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
            /* width: 900px; */
            /* text-overflow: ellipsis; */

        }

        #listado1:active {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a class="colorLetra" href="../index.html" style="text-decoration: none;">HOME</a></li>
                <li><a class="colorLetra" href="../simetrica.html" style="text-decoration: none;">Simetrica</a></li>
                <li><a class="colorLetra" href="../asimetrica.html" style="text-decoration: none;">Asimétrica</a></li>
                <li><a class="colorLetra" href="../php/listado.php" style="text-decoration: none;">Listado AES</a></li>
                <li><a class="colorLetra" href="listadoRSA.php" style="text-decoration: none;">ListadoPacientes RSA</a></li>
                <li><a class="colorLetra" href="../hash/hash_v1.php" style="text-decoration: none;">Hash v1</a></li>
                <li><a class="colorLetra" href="../hash/hash_v2.php" style="text-decoration: none;">Hash v2</a></li>
            </ul>
        </nav>
    </header>

    <h3 class="titulolistado">Listado de Pacientes</h3>
    <h5>Inserte la clave privada que se le a otorgado, la llave es el archivo: <b>privada.txt</b></h5>
    <?php
    echo "<table class='table table-dark' id='listado1'>";
    echo "<thead>";


    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th scope='row'>ID</th>";
    echo "<th scope='row' class='table-active'>Nombre</th>";
    echo "<th scope='row'>Apellido Paterno</th>";
    echo "<th  scope='row' class='table-active'>Antecedentes Patologicos</th>";
    echo "<th scope='row'>Adicción</th>";

    echo "</tr>";
    $consultaPacientes = "SELECT * FROM paciente";
    $resultado = mysqli_query($conect, $consultaPacientes);

    while ($row = mysqli_fetch_assoc($resultado)) {

        echo "<tr>";
        echo "<td>";
        echo $row['id'];
        echo "</td>";
        echo "<td >";
        echo $row['nombre'];
        echo "</td>";
        echo "<td>";
        echo $row['apellido_p'];
        echo "</td>";

        echo "<td id='listado1' style=' max-width: 400px; padding: 10px 5px 10px 5px '> ";
        $antecedente_cifrado = $row['antecedentes'];
        if ($claveprivado != "0") {
            $antecedentes_descifrado64 = base64_decode($antecedente_cifrado);
            $keyprivada = openssl_pkey_get_private($claveprivado);
            openssl_private_decrypt($antecedentes_descifrado64, $antecedente_desifrado, $keyprivada);
            echo $antecedente_desifrado;
        } else {
            echo $row['antecedentes'];
        }
        echo "</td>";

        echo "<td id='listado1' style=' max-width: 600px;'>";

        $adiccion_cifrado = $row['adiccion'];
        if ($claveprivado != "0") {
            $adiccion_descifrado64 = base64_decode($adiccion_cifrado);
            $keyprivada = openssl_pkey_get_private($claveprivado);
            openssl_private_decrypt($adiccion_descifrado64, $adiccion_desifrado, $keyprivada);
            echo $adiccion_desifrado;
            //echo "<p>$adiccion_desifrado</p>";
        } else {
            echo $row['adiccion'];
        }

        echo "</td>";

        echo "</tr>";
    }
    mysqli_free_result($resultado);
    echo "</tbody>";
    echo "</table>";
    ?>
    <section class="container m-8" id="descifrar">
        <div class="container">
            <h2 class="mb-4">Descifrado de datos</h2>
        </div>
        <div class="container-fluid">

            <form action="listadoRSA.php" method="POST">
                <div class="form-group col-md-6">
                    <label for="" class="letras2">Inserte la clave privada</label>
                    <textarea name="claveprivado" cols="110%" rows="13" placeholder="Ingrese la contraseña privada"></textarea>

                    <button type="submit" name="descifrado_dato" class="btn btn-block btn-success py-3 px-5">
                        <strong>Decifrar YAAAA</strong></button>
                </div>
            </form>

        </div>
    </section>



</body>

</html>