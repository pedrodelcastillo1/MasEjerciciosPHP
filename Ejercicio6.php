<?php

//Realizar un programa en php en el que dado un número entero positivo determine si es
//par o impar. Si el número no es un entero positivo deberá de mostrar un mensaje
//indicándolo (la función is_integer puede ayudarte)

$numero = -4;

if(is_integer($numero) && $numero >= 0){
   if($numero % 2 == 0){
    echo "El numero " . $numero . " es par";
   }else {
    echo "El numero " . $numero . " es impar";
   }
}else{
    echo "El numero introducido no es un entero positivo";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
</body>
</html>