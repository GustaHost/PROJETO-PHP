<?php 
session_start();

//configuração fuso horario
date_default_timezone_set('America/Sao_Paulo');

echo 'Agora estamos na pagina 2 <br><br>';

echo "Hoje é dia {$_SESSION['data']}, são " . date('H:i:s', $_SESSION['hora']) . " horas. Estamos na aula de " . $_SESSION['aula'] . "<br>";

?>
