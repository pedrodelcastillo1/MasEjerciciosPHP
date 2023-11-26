<?php
$deportes = join(", ", $_POST['deporte']);
echo "Nombre:  {$_POST['nombre']}<br />";
echo "Deportes que practica:  {$deportes}<br/>"; 
?>