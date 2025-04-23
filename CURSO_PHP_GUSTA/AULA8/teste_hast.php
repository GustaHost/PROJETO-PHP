<?php 
    $senha = "@teste";

    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

    echo $senha_criptografada;
    echo "<hr>";

    if(password_verify('@teste', $senha_criptografada)){
        echo "Senha confere";
    }
    else{
        echo "Senha não confere";
    }
?>