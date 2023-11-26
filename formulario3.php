<?php
    if(isset($_POST["enviar"])){
        echo "<b>Nombre: </b>" . $_POST["nombre"] . "<br/>" . 
        "<b>Estudios: </b>" . $_POST["nivel_estudios"];
    }
    ?>