<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tienda Vestidos</title>
</head>

<body>

    <main>
        <div id="texto">
            <h1>Vestidos</h1>
        </div>
        <form method="POST" action="ejercicio1.php">

            <div id="botones">
                <button type="submit" name="rojo" class="botones">Rojo</button>
                <button type="submit" name="verde" class="botones">Verde</button>
                <button type="submit" name="amarillo" class="botones">Amarillo</button>
                <button type="submit" name="dosColores" class="botones">Dos Colores</button>
            </div>
        </form>
    </main>

    <?php
    if (isset($_POST["rojo"])) {
        $total = (35000  * 0.05);
    } else if (isset($_POST["verde"])) {
        $total = (27850 * 0.02);
    } else if (isset($_POST["amarillo"])) {
        $total = (34000 * 0.06);
    } else if (isset($_POST["dosColores"])) {
        $total = ($total * 0.5);
    } else {
        $total = "";
    }

    ?>

    <div id="total">
        <input type="text" id="resultado" value="<?php echo $total; ?>" placeholder="Resultado" />
    </div>


    <!-- RESPUESTA PUNTO NO.4 -->
    <!-- Servicio en la nube, para almacenar nuestros proyectos o repositorios -->



    <footer> </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>