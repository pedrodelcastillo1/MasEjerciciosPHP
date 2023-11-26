<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
<?php
//Realiza un programa en php que calcule el sueldo neto de un trabajador al cual se le
//aplica una retención del 22%. Supón que el sueldo bruto son 2750€. Mostrar por
//pantalla el sueldo inicial, el impuesto aplicado y el sueldo neto. Dar formato html a los
//resultados obtenidos.

$sueldo_bruto = "2750";
$retencion = "22";

$sueldo_quitado = $sueldo_bruto * $retencion / 100;
echo "<h1>Resumen de sueldo</h1>";
echo "<p><strong>Sueldo bruto:</strong> " . $sueldo_bruto . " euros " . "</p>";

echo "<p><strong>Dinero que le quitan por retención (" . $retencion . "%):</strong> " . $sueldo_quitado . " euros" . "</p>";

$sueldo_neto = $sueldo_bruto - $sueldo_quitado;


echo "<p><strong>Sueldo neto:</strong> " . $sueldo_neto . " euros " . "</p>";


?>
</body>
</html>