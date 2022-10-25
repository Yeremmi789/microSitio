<?php

include("../php/cone.php");
include("insertar_yo.php");
$consulta = "SELECT * FROM datos_paciente";

$dato = 0;
if (isset($_POST['dato_cifrado'])) {
    $dato = $_POST['dato'];
    $descifrado = yo($dato, -$des);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash_v1</title>
    <link rel="stylesheet" href="../estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        #listado1 {
            max-width: 95%;
            margin: 5px 20px 20px 20px;
        }
    </style>

    <head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a class="colorLetra" href="../index.html" style="text-decoration: none;">HOME</a></li>
                    <li><a class="colorLetra" href="../simetrica.html" style="text-decoration: none;">Simetrica</a></li>
                    <li><a class="colorLetra" href="../asimetrico/listadoRSA.php" style="text-decoration: none;">Asimétrica</a></li>
                    <li><a class="colorLetra" href="../asimetrico/listadoRSA.php" style="text-decoration: none;">Listado
                            AES</a></li>
                    <li><a class="colorLetra" href="../asimetrico/listadoRSA.php" style="text-decoration: none;">ListadoPacientes RSA</a></li>
                    <li><a class="colorLetra" href="../hash/hash_v1.php" style="text-decoration: none;">Hash v1</a></li>
                    <li><a class="colorLetra" href="../hash/hash_v2.php" style="text-decoration: none;">Hash v2</a></li>
                    <li><a class="colorLetra" href="yo.php" style="text-decoration: none;">YO</a></li>
                </ul>
            </nav>
        </header>

        <h1>Yo</h1>
        <!-- Mensaje a descifrar -->
        <div class="formulario1">
            <form class="formulario_1" action="insertar_yo.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del paciente</label>
                    <input name="nombre" required style="height: 50px;" type="text" class="form-control" placeholder="...">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido Paterno</label>
                    <input name="apellido_p" required style="height: 50px;" type="text" placeholder="..." class="form-control">
                </div>

                <!-- Introducimos el texto a descrifrar -->
                <label for="texto">Curp </label><br>
                <input class="form-control" type="text" name="texto" placeholder="asdads" required><br>

                <div style="display: flex; justify-content: space-around;">
                    <input type="reset" style="width: 100px;" value="Limpiar" class="btn btn-danger"><br>
                    <input type="submit" style="width: 100px;" name="Enviar" value="Registrar" class="btn btn-primary">
                </div>
            </form>

        </div>
        <h1 style="margin-top:90px; padding-top: 60px;">Registros</h1>
        <table class="table table-dark" id="listado1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <th scope="row" class="table-active">Usuario</th>
                    <th scope="row">Apellido paterno</th>
                    <th scope="row" class="table-active">Curp</th>
                </tr>
                <?php
                $resultado = mysqli_query($conect, $consulta);

                while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["nombre"] ?></td>
                        <td><?php echo $row["apellido_p"] ?></td>
                        <td><?php echo $row["curp"] ?></td>
                    </tr>
                <?php
                }
                mysqli_free_result($resultado);
                ?>
            </tbody>
        </table>


        <form action="yo.php" method='POST'>
            <div class="container">
                <h3>Decifrar</h3>
                <label for="">Borre el espacio del inicio cuando pegue la clave cifrada</label>
                <input name="dato" style="height: 50px" type="text" class="form-control" placeholder="Pega aquí el cifrado">
                <br><button type="submit" name="dato_cifrado" class="btn btn-primary">Decifrar</button>
            </div>
        </form>


        <?php
        echo "<div class='container'>";
        echo "<h3>Resultado</h3>";
        if ($dato != "0") {
            $valor = $descifrado;
            echo "<input name='resultadoAES' style='height: 50px;' type='text'  class='form-control' value='$valor'>";
        } else {
            echo "<input name='resultadoAES' style='height: 50px;' type='text'  class='form-control' placeholder='pongame aprobatorio Inge :,c porfa'>";
        }
        echo "</div><br><br>";

        ?>

    </body>

</html>