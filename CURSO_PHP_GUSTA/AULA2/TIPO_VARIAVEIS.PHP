<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Variaveis</title>
</head>
<body>
    <?php 
        /*
            - Varivaies sempre começa com simbulo de $;
            - Variaveis aceitam caracteres á, õ, ç e afins;
            - A linguagem é case sensitive em relação(diferencia maiusculo de minusculo) aos nomes;
            - Algumas palavras possuem o uso reservado ($this, por exemplo);
            - Evite nomes muito curtos ou muito longos;
        */

        echo "hello word!!!" . "<br><br>";
        print "hello word!!! <br><br>";

        //$varEcho = echo "hello word!!!" . "<br>";
        $varPrint = print "hello word!!!" . "<br><br>";
        
        echo "<hr>";

       // $%var00 = "errada";
       // $1var01 = "errada";
       $_var00 = "correto";
       $varOriginal = "correto e comum";

       echo $_var00 . "<br><br>";
       echo $varOriginal;

       echo "<br><br>A variavel é do tipo: " . gettype($varOriginal) . "<br><br>";

    ?>
<!-- ------------------------------------------------------------------------------------------------ -->
    <hr>
    <?php
        $varInt = 666;
        echo gettype($varInt) . "<br><br>";

        $varReal = 456.98;
        echo gettype($varReal) . "<br><br>";

        $varBooleano = true;
        echo gettype($varBooleano) . "<br><br>";

        $varVetor = array(1,2,3);
        echo gettype($varVetor) . "<br><br>";
    ?>
<!-- ------------------------------------------------------------------------------------------------ -->
    <hr>

    <?php

        $nome = "Gustavo";
        $sobrenome = "ribeiro de oliveira";
        //$nome = "felipe"; --------- se usar outra variael do mesmo nome ele vai sempre pegar o ultimo registro.

        // echo "Muito prazer " . $nome . " " . $sobrenome;
        echo "Muito prazer, $nome $sobrenome";
    ?>
<!-- ------------------------------------------------------------------------------------------------ -->
    <hr>

    <?php
        // OPERADORES ARITMETRICOS

        $varA = 2;
        $varB = 6;

        echo "O valor da soma 2 + 6 é : " . $varA + $varB . "<br>";

        echo "O valor da expoenciação de 2^6 é : " . $varA ** $varB . "<br>";

        echo "O valor da expoenciação de 2^6 utilizando POW é : " . pow($varA, $varB) . "<br>";

    ?>
<!-- ------------------------------------------------------------------------------------------------ -->
    <hr> 

    <?php
        //Casting
        $varC = 11.56;
        $varD = (int)$varC;

        echo $varD . "<br>"; // vai mostrar o 11

        echo gettype($varC) . "<br>"; // vai mostrar que a variavel C é do tipo float ou real
        echo gettype($varD); // vai mostrar que a variavel D é do tipo INT (inteiro) 

    ?>
<!-- ------------------------------------------------------------------------------------------------ -->
    <hr> 

    <?php

    $varTeste1 = 33;
    var_dump($varTeste1);

    echo "<br>";

    $varTeste2_vetor = array("PHP","Java","Python","Java Script","MySQL");
    var_dump($varTeste2_vetor);
    /*
        Calcule o perimetro e a area de uma circunferencia e mostre o tipo da variavel referente as respostas obtidas
        
    */
    
    


    ?>

    
    






</body>
</html>