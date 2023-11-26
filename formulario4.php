<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos numeros</title>
</head>
<body>
    <h1>Suma de dos numeros</h1>
    <form method="get" action="">
        Numero 1:<input type="text" id="num1" name="num1">
        Numero 2:<input type="text" id="num2" name="num2">
        <input type="submit" name="btnEnviar" value="Enviar Formulario">
    </form>

    <?php

    if(isset($_GET['num1']) && isset($_GET['num2'])) {
        $numero1 = $_GET['num1'];
        $numero2 = $_GET['num2'];

        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma de " . $numero1 . " + " . $numero2 . " = " . $resultado;
    }


    ?>

</body>
</html>