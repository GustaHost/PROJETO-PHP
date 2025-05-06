<?php 
    include_once('./conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="./index.php"><li>Listar</li></a>
                <a href="./cadastrar.php"><li>Cadastrar</li></a>
                <a href="./excluir.php"><li>Excluir</li></a>
                <a href="./editar.php"><li>Editar</li></a>
            </ul>
        </nav>
    </header>

    <h1>Cadastrar</h1>

    <?php 
        $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);
        if(!empty($dados['cadastrarUso']))
        {
            $empty_input = false;
            $dados = array_map('trim', $dados);
            if(in_array("", $dados))
            {
                $empty_input = true;
                echo "<p style='color:red;'>E-mail informado não é valido!</p> <br>";

            }

            if($empty_input == false)
            {
                $queryUsu = "INSERT INTO teste.usuario (nomeUsuario, sobrenomeUsuario, email) VALUES()'". $dados['nome'] . "', '". $dados['sobrenome'] . "', '". $dados['email'] . "')";
                $cadUsuario = $pdo->prepare($queryUsu);
                $cadUsuario->execute();

                if($cadUsuario->rowCount())
                {
                    echo "<p style='color: green;'>Usuario cadastrado com sucesso!</p><br>";
                }
            }else
            {
                echo "<p style='color: red;'>ERRO: Usuario não cadastrado!</p><br>";
            }
        }
    ?>

    <form name="cadastrarUsuario"action="" method="get">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" value="
        <?php if(isset($dados['nome'])) echo $dados['nome'];?>"><br><br>

        <label>Sobrenome: </label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" 
        value="<?php if(isset($dados['sobrenome'])) echo $dados['sobrenome']; ?>">
        <br><br>

        <label>E-mail: </label>
        <input type="text" name="email" id="email" placeholder="E-mail" 
        value="<?php if(isset($dados['email'])) echo $dados['email']; ?>">
        <br><br>

        <input type="submit" value="Cadastrar" name="cadastrarUso">
    </form>


</body>
</html>