<?php
include("../php/cone.php");
$consultaUsuarios = "SELECT * FROM pacientes_hash";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash_v2</title>
    <link rel="stylesheet" href="../estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
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
        /* #listado1:active{
            display: block;
        } */
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

    <h1>Hash v2 </h1>
    <div style="display: flex; justify-content: center; margin-top: -30px;">
        <h5>metodo con: PASSWORD_BCRYPT, MD5, SHA1</h5>
    </div><br><br><br>


    <div class="formulario1">
        <form class="formulario_1" method="POST" action="insertar_hash2.php">

            <div class="mb-3">
                <br><br><br>
                <label for="exampleInputEmail1" class="form-label">Nombre del paciente</label>
                <input name="nombre" required style="height: 50px;" type="text" class="form-control" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido Paterno</label>
                <input name="apellido_p" required style="height: 50px;" type="text" placeholder="..." class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Curp</label>
                <input name="curp" required style="height: 50px;" type="text" class="form-control" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Antecedente pateologico</label>
                <input name="antecedentes" required style="height: 50px;" type="text" class="form-control" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Adicciones</label>
                <input name="adicciones" required style="height: 50px;" type="text" class="form-control" placeholder="...">
            </div>

            <input type="submit" class="btn btn-primary" value="Enviar"><br>
        </form>
    </div><br><br><br><br>

    <h1>Registros</h1>
    <table class="table table-dark" id="listado1" >
        <thead>

        </thead>
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <th scope="row" class="table-active">Nombre del paciente</th>
                <th scope="row">Apellido Paterno</th>
                <th scope="row" class="table-active">Curp (PASSWORD_BCRYPT)</th>
                <th scope="row">Antecedentes Patelógicos (MD5)</th>
                <th scope="row" class="table-active">Adicciones (SHA1)</th>
            </tr>
            <?php
            $resultado = mysqli_query($conect, $consultaUsuarios);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nombre_p"] ?></td>
                    <td><?php echo $row["apellido_paterno"] ?></td>
                    <td style="max-width: 300px; overflow: hidden;"><?php echo $row["curp"] ?></td>
                    <td ><?php echo $row["antecedentes"] ?></td>
                    <td ><?php echo $row["adicciones"] ?></td>
                </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
        </tbody>
    </table>
</body>

</html>