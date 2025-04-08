<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FORMULARIOS</title>
</head>
<body>
    <header>
        <h1>
            Informe seus dados
        </h1>
        <section>
            <form action="cadastro.php" method="get">
                <label for="nome">Nome: </label>
                <input type="text" placeholder="digite seu nome" name="nome" id="nome">

                <label for="sobrenome">Sobrenome: </label>
                <input type="text" placeholder="digite seu sobrenome" name="sobrenome" id="sobrenome">

                <input type="submit" value="Enviar">

            </form>
        </section>
    </header>
    
</body>
</html>