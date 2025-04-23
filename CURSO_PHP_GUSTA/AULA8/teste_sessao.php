

<?php 
    session_start();
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Esta é a pagina inicial, onde a sessão será criada";

        $_SESSION['aula'] = 'Linguagem PHP';
        $_SESSION['data'] = date('d/m/y');
        $_SESSION['hora'] = time();

        echo '<br> <a href=apresentacaoDados.php> Clique aqui para ir á pagina 2 </a>';

    ?>
</body>
</html>