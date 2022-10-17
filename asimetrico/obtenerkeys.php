<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="rsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a class="colorLetra" href="../index.html" style="text-decoration: none;">HOME</a></li>
                <li><a class="colorLetra" href="../simetrica.html" style="text-decoration: none;">Simetrica</a></li>
                <li><a class="colorLetra" href="../asimetrica.html" style="text-decoration: none;">Asimétrica</a></li>
                <li><a class="colorLetra" href="php/listado.php" style="text-decoration: none;">Listado AES</a></li>
                <li><a class="colorLetra" href="listadoRSA.php" style="text-decoration: none;">Listado Pacientes RSA</a></li>
            </ul>
        </nav>
    </header>

    <div class="cajaMayor">
        <div class="cajakeys">
            <div class="titulokeys">
                <h3>Hash V1</h3>
            </div>
            <div class="opcionesCaja">
                <button type="button" class="btn btn-danger"><a href="../asimetrica.html" style="text-decoration: none; color: white;">Regresar</a></button>
                <form action='' method=''>
                    <button type="submit" class="btn btn-primary" onclick="hash_v1()">Generar Clave</a></button>
                </form>
            </div>
            <div class=" opcionesCaja">
                        <p><b>Nota:</b> Si ya cuenta con llaves <b>No</b> haga <b>Click</b> en <b>"Generar"</b></p>
            </div>
        </div>
    </div>


    <div class="cajaMayor">
        <div class="cajakeys">
            <div class="titulokeys">
                <h3>Hash V2</h3>
            </div>
            <div class="opcionesCaja">
                <button type="button" class="btn btn-danger"><a href="../asimetrica.html" style="text-decoration: none; color: white;">Regresar</a></button>
                <form action='' method=''>
                    <button type="submit" class="btn btn-primary" onclick="hash_v2()">Generar Clave</a></button>
                </form>
            </div>
            <div class=" opcionesCaja">
                <p><b>Nota:</b> Si ya cuenta con llaves <b>No</b> haga <b>Click</b> en <b>"Generar"</b></p>
            </div>
        </div>
    </div>


    <script>
        function hash_v1() {
            var res = prompt('Ingresar clave para ', '');
            if (res != '') {
                alert(res);
            }
            alert('Guardado correctamente');
            location.reload();
        }

        function hash_v2() {
            var res = prompt('Necesita ingresar la clave', '');
            if (res != '') {
                alert(res);
            }
            alert('Guardado correctamente');
            location.reload();
        }
    </script>

    <?php

    ?>
</body>



</html>