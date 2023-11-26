<!DOCTYPE html>
<html>
<head>
    <title>Piedra, Papel o Tijera</title>
</head>
<body>
    <h1>Piedra, Papel o Tijera</h1>

    <?php

        //JUEGO PIEDRA PAPEL O TIJERA SIN USAR SESIONES

    $jugador = isset($_POST['jugador']) ? $_POST['jugador'] : 0;
    $computadora = isset($_POST['computadora']) ? $_POST['computadora'] : 0;

    if (isset($_POST['jugar'])) {
        $opciones = ["piedra", "papel", "tijera"];
        $opcionUsuario = $_POST['opcion'];
        $opcionComputadora = $opciones[array_rand($opciones)];

        echo "<p>Tu elección: $opcionUsuario</p>";
        echo "<p>El ordenador ha elegido: $opcionComputadora</p>";

        if ($opcionUsuario == $opcionComputadora) {
            echo "<p>Empate en esta ronda.</p>";
        } elseif (
            ($opcionUsuario == "piedra" && $opcionComputadora == "tijera") ||
            ($opcionUsuario == "papel" && $opcionComputadora == "piedra") ||
            ($opcionUsuario == "tijera" && $opcionComputadora == "papel")
        ) {
            echo "<p>¡Ganaste esta ronda!</p>";
            $jugador++;
        } else {
            echo "<p>El ordenador gano esta ronda.</p>";
            $computadora++;
        }

        echo "<p>Puntuación: Jugador $jugador - Ordenador $computadora</p>";

        if ($jugador >= 3) {
            echo "<p>¡Ganaste el juego!</p>";
            $jugador = 0;
            $computadora = 0;
        } elseif ($computadora >= 3) {
            echo "<p>El ordenador gana el juego.</p>";
            $jugador = 0;
            $computadora = 0;
        }
    }
    ?>



    <form method="post">
        <label for="opcion">Elige una opción:</label>
        <select name="opcion" id="opcion">
            <option value="piedra">PIEDRA</option>
            <option value="papel">PAPEL</option>
            <option value="tijera">TIJERA</option>
        </select>
        <input type="hidden" name="jugador" value="<?php echo $jugador; ?>">
        <input type="hidden" name="computadora" value="<?php echo $computadora; ?>">
        <input type="submit" name="jugar" value="Jugar">
    </form>

</body>
</html>