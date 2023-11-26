<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
<style>
    .agenda {
    margin-top: 20px;
    border: 2px solid #4CAF50; /* Cambiado a un verde más intenso */
    padding: 15px;
    border-radius: 15px; /* Aumentado el radio del borde redondeado */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Aumentado el tamaño de la sombra */
}

.agenda h2 {
    color: #4CAF50; /* Cambiado a verde */
    margin-bottom: 15px; /* Aumentado el espacio inferior */
}

table {
    width: 100%;
    border-collapse: separate; /* Cambiado a 'separate' para un mejor efecto visual */
    border-spacing: 0 10px; /* Aumentado el espaciado entre filas */
    margin-bottom: 20px; /* Aumentado el espacio inferior */
}

th, td {
    padding: 12px; /* Aumentado el espacio interno */
    text-align: left;
    border-bottom: 1px solid #4CAF50; /* Cambiado el color del borde inferior */
}

th {
    background-color: #E0F2F1; /* Cambiado a un tono de verde más claro */
    color: #333; /* Cambiado el color del texto */
}

.correos-no-validos {
    background-color: #f9f9f9; /* Color de fondo */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.correos-no-validos h3 {
    color: #333; /* Color del encabezado */
    margin-bottom: 10px;
}

.correos-no-validos p {
    margin: 5px 0; /* Espaciado entre párrafos */
    color: #555; /* Color del texto */
}

</style>
</body>
</html>

<?php
function esCorreoValido($correo) {
    $correoValidos = ['@gmail.com', '@educa.madrid.org', '@yahoo.com', '@hotmail.com'];
    
    foreach ($correoValidos as $dominio) {
        if (strpos($correo, $dominio) !== false && substr($correo, -strlen($dominio)) === $dominio) {
            return true;
        }
    }
    
    return false;
}
function mostrarAgenda($agenda) {
    echo "<div class='agenda'>";
    echo "<h2>Contactos de la agenda:</h2>";
    echo "<table>";
    echo "<tr>
            <th>Clave</>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Correo</th>
          </tr>";
    foreach ($agenda as $key => $contacto) {
        echo "<tr>";
        echo "<td>{$contacto['clave']}</td>";
        echo "<td>{$contacto['nombre']}</td>";
        echo "<td>{$contacto['Apellidos']}</td>";
        echo "<td>{$contacto['Telefono']}</td>";
        echo "<td>{$contacto['Correo']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    echo "<br>";
}


function mostrarCorreosNoValidos($agenda) {
    echo '<div class="correos-no-validos">';
    echo '<h3>Correos no válidos:</h3>';

    foreach ($agenda as $contacto) {
        if (!esCorreoValido($contacto['Correo'])) {
            echo '<p>';
            echo 'Nombre: ' . $contacto['nombre'] . ' ' . $contacto['Apellidos'] . ', Correo: ' . $contacto['Correo'];
            echo '</p>';
        }
    }

    echo '</div>';
}

$agenda = array("0" => array("clave"=>0,"nombre"=>"Jorge","Apellidos"=>"Garcia", "Telefono"=>999999999, "Correo"=>"jorge@gmail.com"),
                    "1" => array("clave"=>1,"nombre"=>"Julia","Apellidos"=>"Lopez", "Telefono"=>235456987, "Correo"=>"julia@yaho.com"),
                    "2" => array("clave"=>2,"nombre"=>"Lucas","Apellidos"=>"Rivas", "Telefono"=>222222222, "Correo"=>"lucas@correo.com"),
                    "3" => array("clave"=>3,"nombre"=>"Sura","Apellidos"=>"Delca", "Telefono"=>987546321, "Correo"=>"sura@yahoo.com"),
                    "4" => array("clave"=>4,"nombre"=>"Lolita","Apellidos"=>"Koala", "Telefono"=>222221111, "Correo"=>"lolita@gmail.com"),
                    "5" => array("clave"=>5,"nombre"=>"Lukas","Apellidos"=>"Ramos", "Telefono"=>111112222, "Correo"=>"lukas@coreo.com")        
    );


mostrarAgenda($agenda);
mostrarCorreosNoValidos($agenda);

    

?>