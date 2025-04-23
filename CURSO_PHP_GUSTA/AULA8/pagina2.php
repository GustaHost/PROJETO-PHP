<?php

if(isset($_COOKIE['usuario'])){
    echo "Usuario:" . $_COOKIE['usuario'] . " está cadastro <br>";

    setcookie("usuario", $_COOKIE['usuario'], time() - 3600);
}

if(count($_COOKIE) > 0){
    echo "Existe " . count($_COOKIE) . " cookie existente";
}


?>