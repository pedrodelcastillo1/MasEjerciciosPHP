<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <h2>Indique un número del 1 al 7:</h2>

    <form method="get">
        Número: <input type="text" name="numero">
    <input type="submit" value="Enviar">
</form>

</head>
<body>

<?php
if (isset($_GET['numero'])) {

    //hacer un casting porque el formulario al ser text puede dar error
    //$numero = (int)$_GET["numero"];
    $numero = $_GET["numero"];

    switch ($numero) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El número ingresado no está en el rango del 1 al 7.";
            break;
    }
}
?>
    
</body>
</html>