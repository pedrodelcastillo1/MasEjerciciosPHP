<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    $numero1 = 8;
    $numero2 = 81;
    
    echo "El numero1 es = " . $numero1 . "<br>";
    echo "El numero2 es = " . $numero2 . "<br>";

    if($numero1 > $numero2){
        echo "El numero " . $numero1 . " es mayor que el numero " . $numero2;
    }elseif($numero1 < $numero2){
        echo "El numero " . $numero1 . " es menor que el numero " . $numero2;
    }else{
        echo "Los dos numeros son iguales";
    }
    ?>
</body>
</html>