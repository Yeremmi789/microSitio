<?php
include("cone.php");

include("SimetricoAES.php");
$consultaUsuarios = "SELECT * FROM usuarios";

$datoAES = 0;

if (isset($_POST['dato_cifrado'])) {
    $datoAES = $_POST['datoAES'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #listado1{
            max-width: 95%;
            margin: 5px 20px 20px 20px;
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
                <li><a class="colorLetra" href="../asimetrico/listadoRSA.php" style="text-decoration: none;">ListadoPacientes RSA</a></li>
                <li><a class="colorLetra" href="../hash/hash_v1.php" style="text-decoration: none;">Hash v1</a></li>
                <li><a class="colorLetra" href="../hash/hash_v2.php" style="text-decoration: none;">Hash v2</a></li>
            </ul>
        </nav>
    </header>

    <h3 class="titulolistado">Listado de datos (Descifrado Automatico)</h3>
    <h5>los datos <b>(solo la contraseña se le aplica el "cifrado")</b> se van cifrados a la BD y la consulta que realiza está cifrada, por lo que la pagina realiza el decifrado
     automaticamente para mostrar en la tabla <b>(almenos en esta tabla)</b> </h5>
    <table class="table table-dark" id="listado1">
        <thead>
        </thead>
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <th scope="row" class="table-active">Usuario</th>
                <th scope="row">Correo</th>
                <th scope="row" class="table-active">Contraseña</th>

            </tr>
            <?php
            $resultado = mysqli_query($conect, $consultaUsuarios);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["usuario"] ?></td>
                    <td><?php echo $row["correo"] ?></td>
                    <td><?php echo AES::desencriptar($row["contraseña"])  ?></td>
                </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
        </tbody>
    </table>

    <h3 class="titulolistado">Listado de datos (Descifrado individual) </h3>
    <h5>los datos <b>(solo la contraseña se le aplica el "cifrado")</b> se van cifrados a la BD y la consulta que realiza está cifrada, en esta consulta no se realiza el decifrado
            por lo que se da la opornunidad de desencriptar la información de manera indivual
    <b>(almenos en esta tabla... deslice hacia abajo porfavor)</b> </h5>
    <table class="table table-dark" id="listado1">
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <th scope="row" class="table-active">Usuario</th>
                <th scope="row">Correo</th>
                <th scope="row" class="table-active">Contraseña</th>
            </tr>
            <?php
            $resultado = mysqli_query($conect, $consultaUsuarios);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["usuario"] ?></td>
                    <td><?php echo $row["correo"] ?></td>
                    <td><?php echo $row["contraseña"] ?></td>
                </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
        </tbody>
    </table>

    <form action="listado.php" method='POST'>
        <div class="container">
            <h3>Decifrar</h3>
            <input name="datoAES" style="height: 50px" type="text" class="form-control" placeholder="Pega aquí el cifrado" >
            <br><button type="submit" name="dato_cifrado" class="btn btn-primary">Decifrar</button>
        </div>
    </form>

<?php
    echo "<div class='container'>";
    echo "<h3>Resultado</h3>";
    if($datoAES !="0"){
        $valor = AES::desencriptar($datoAES); 
        echo "<input name='resultadoAES' style='height: 50px;' type='text'  class='form-control' value='$valor'>";
    }else{
        echo "<input name='resultadoAES' style='height: 50px;' type='text'  class='form-control' placeholder='pongame aprobatorio Inge :,c porfa'>";
    }
    echo "</div><br><br>";

?>

</body>

</html>