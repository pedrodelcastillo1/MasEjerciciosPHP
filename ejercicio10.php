<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    echo "<h1>Ejercicio 10</h1>";

    function fibonacci($numero){
    if ($numero == 0) {
        return 0;
        //comprueba si el valor de $num es igual a 0. Si es así, significa que estamos pidiendo el término 0 de la sucesión de Fibonacci, 
        //y en ese caso, la función retorna 0.
    } elseif ($numero == 1) {
        return 1;
        //Este elseif comprueba si el valor de $num es igual a 1. Si es así, significa que estamos pidiendo el término 1 de la sucesión de Fibonacci, 
        //y en ese caso, la función retorna 1
    } else {
        return fibonacci($numero - 1) + fibonacci($numero - 2);
        //Si $num no es 0 ni 1, significa que estamos buscando un término mayor en la sucesión de Fibonacci. En este caso, utilizamos la recursión para 
        //calcular el término sumando el término anterior (fibonacci($n - 1)) y el término antes del anterior (fibonacci($n - 2)).
    }
}

$numero = 10;  // ¿Cuantos numeros quieres q muestre?

echo "<h1>Sucesión de Fibonacci ($numero términos):</h1>";
echo "<ul>";

for ($i = 2; $i < $numero; $i++) {
    $resultado = fibonacci($i);
    echo "<li>$resultado</li>";
}

echo "</ul>";
?>

</body>
</html>