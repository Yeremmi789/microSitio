<?php
include("../php/cone.php");
$consultaUsuarios = "SELECT * FROM usuario_hash";
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
</head>

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
                <li><a class="colorLetra" href="hash_v1.php" style="text-decoration: none;">Hash v1</a></li>
                <li><a class="colorLetra" href="hash_v2.php" style="text-decoration: none;">Hash v2</a></li>
            </ul>
        </nav>
    </header>

    <h1>Hash v1 </h1>
    <div style="display: flex; justify-content: center; margin-top: -30px;">
        <label> metodo con: PASSWORD_DEFAULT</label>
    </div><br><br>

    <div class="formulario1">
        <form class="formulario_1" action="insertar_hash1.php" method="POST">
            <div class="mb-3">
                <br>
                <label for="exampleInputEmail1" class="form-label">Nombre del trabajador</label>
                <input name="usuario" style="height: 50px;" type="text" required class="form-control" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Correo</label>
                <input name="correo" style="height: 50px;" type="email" required placeholder="..." class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="contraseña" style="height: 50px;" type="password" required class="form-control" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Verificar Contraseña</label>
                <input name="ver_contraseña" style="height: 50px;" type="password" required class="form-control" placeholder="...">
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar"><br>
        </form>
    </div><br>

    <h1>Registros</h1>
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
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["correo"] ?></td>
                    <td><?php echo $row["contraseña"] ?></td>
                </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
        </tbody>
    </table>


</body>

</html>