<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 5</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-image: url('escudocolmenarviejo.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    h1 {
        color: #ffffff;
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            padding: 20px 0; 
    }
    form {
        width: 300px;
        margin: 20px auto;
        background-color: #ffffff; /* Blanco para el fondo del formulario */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333; /* Color de texto oscuro */
    }
    input[type="text"], input[type="number"], select {
        width: calc(100% - 22px); /* Ajuste para el padding */
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #ff0000; /* Rojo para el botón */
        color: #ffffff; /* Texto blanco en el botón */
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #cc0000; /* Color ligeramente más oscuro al pasar el ratón */
    }
</style>
    <h1></h1>
    <form method="get" action="">
        Nombre: <input type="text" name="nombre"><br><br>
        Dorsal: <input type="number" name="numero"><br><br>
        Talla: <select id="talla" name="talla">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select><br><br>
        <input type="submit" name="btnEnviar" value="Enviar Formulario">
    </form>

    <?php
    echo "Revisa tu peticion" . "<br>";
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        echo "Has elegido " . $nombre . " para tu equipacion" . "<br>";
        if(isset($_GET['numero'])){
            $numero = $_GET['numero'];
            echo "Has elegido el dorsal " . $numero . " para tu equipacion" . "<br>";
            if(isset($_GET['talla'])){
                $talla = $_GET['talla'];
                echo "Talla seleccionada: " . $talla;
            }
        }
    }




    ?>


<body>
</body>
</html>