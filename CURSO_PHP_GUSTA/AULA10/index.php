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

<h1>Listar</h1>

<?php 
    $queryUsuario = "SELECT idUsuario, nomeUsuario, sobrenomeUsuario, email FROM teste.usuario";
    $result = $pdo->prepare($queryUsuario);
    $result->execulte();
    var_dump($result);

    if($result->rowCount() != 0)
    {?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($rowTable = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        /*
                            $result é um objetivo PDOStatemenr contendo os resultado de uma consulta SQL;

                            fetch(PDO::FETCH_ASSOC) busca a proxima linha como um array associativo
                        */
                        extract($rowTable);
                        /*
                            Transforma as chaves do array associativo($rowTable) em variaveis PHP;
                            $rowTable['idUsuario'] = variavel PHP "idUsuario"
                        */?>
                        <td align="left"><?php echo $idUsuario?></td>
                        <td align="left"><?php echo $nomeUsuario?></td>
                        <td align="left"><?php echo $sobrenomeUsuario?></td>
                        <td align="left"><?php echo $email?></td>
                    <?php } ?>
                ?>
            </tbody>
        </table>
    <?php}?>

</body>
</html>