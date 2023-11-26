<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dinero = $_POST["dinero"];
    $moneda = $_POST["moneda"];

    // Definir las tasas de cambio
    $tasas_cambio = [
        "bitcoin" => 0.00012,
        "dolar" => 1.12,
        "libra" => 0.86,
        "yen" => 120.82
    ];

    // Calcular la conversión si la moneda es válida
    if (isset($tasas_cambio[$moneda])) {
        $conversion = $dinero * $tasas_cambio[$moneda];
        echo "La cantidad en $moneda es: $conversion";
    }
}


// $dinero = $_GET['money'];
// //print_r($_GET);
// //echo $_GET['moneda'][0];
// foreach($_GET['moneda'] as $valor => $number){
//     switch($number){
//         case 'bitcoin':
//             $nuevo_dinero = $dinero * 0.00012;
//             echo "$dinero € equivalen a $nuevo_dinero ฿ <br>";
//             break;
//         case 'dolar':
//             $nuevo_dinero = $dinero * 1.12;
//             echo "$dinero € equivalen a $nuevo_dinero $ <br>";
//             break;
//         case 'libra':
//             $nuevo_dinero = $dinero * 0.86;
//             echo "$dinero € equivalen a $nuevo_dinero £ <br>";
//             break;
//         case 'yen':
//             $nuevo_dinero = $dinero * 120.82;
//             echo "$dinero € equivalen a $nuevo_dinero ¥  <br>";
//             break;
//     }
// }



?>