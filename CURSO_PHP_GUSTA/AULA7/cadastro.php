<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Usuario cadastrado
        </h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];

            if(isset($_GET["nome"])){
                echo "<p> Bem vindo ao site $nome $sobrenome</p>";
            }

            if($nome == null || $sobrenome == null){
                echo "Não foram preenchidos todos os campos do formulario";
            }
            
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    </main>
</body>
</html>