<?php 

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'senha');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $pdo->exec("INSERT INTO teste.tabe_usuario (nomeUsuario, estadoCivil, cpf, profissao) VALUES ('José da Silva', 'Casado', 037021111855, 'Engenheiro')");
        
    }


    catch(PDOException $erro){
        echo "ERRO => " . $erro->getMessage();

        

    }

?>