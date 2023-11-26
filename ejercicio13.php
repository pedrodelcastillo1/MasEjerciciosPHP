<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    

    <?php

    $colores = array("azul", "rojo", "verde", "rosa", "naranja");
        
    //array_search — Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
    $clave = array_search("rosa", $colores);

    if ($clave !== false) {
        //unset — Destruye una o más variables especificadas
        unset($colores[$clave]);
        echo "Se ha eliminado el color rosa del array.\n";
    } else {
        echo "El color rosa no está en el array.\n";
    }

    print_r($colores);

    ?>


</body>
</html>