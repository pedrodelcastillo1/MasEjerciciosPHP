<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>


    <?php
    
    $aleatorio = rand(1,10);
    
    $suma=0;
    for ($i=2; $i <= $aleatorio; $i=$i+2) { 
        $suma += $i;
    }
    
    echo "El numero aleatorio es : " . $aleatorio . "<br>";
    echo "La suma de los numeros pares : " . $suma;
    ?>  
    
</body>
</html>