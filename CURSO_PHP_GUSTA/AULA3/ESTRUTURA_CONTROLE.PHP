<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUTURA DE CONTROLE</title>
</head>
<body>
    <?php
        echo "teste";

        $num1 = 10;
        $num2 = 20;
        if($num1 == $num2){
            echo "<br><hr>As variaveis $num1 e $num2 são iguais!";
        }
        elseif($num1 <= $num2){
            echo "<br><hr>O valor da primeira variavel é $num1";
            echo "<br>O valor da segunda variavel é $num2";
        }
        else{
            echo "<br><hr>As variaveis são diferentes";
        }


    ?>
    <!-- ATIVIDADE IF/ELSE
         Idade < 18 e peso >= 50 e <= 90, risco normal;
         Idade >= 18 e peso > 50 e peso <= 100, risco normal;

         Idade < 18 e peso < 50, risco médio;
         Idade >= 18 e peso <= 50, risco médio;

         Idade < 18 e peso > 90 e <=120, risco alto;
         Idade >= 18 e peso > 100 e peso <=140, risco alto;

         Idade < 18 e peso > que 120 kg, risco extremamente alto;
         Idade >= 18 e peso > 140, risco extremamente alto. 
    -->

    <?php

        echo "<hr>";

        $idade = 19;
        $peso = 101;

        //risco normal
        if(($idade < 18 or ($peso >= 50 and $peso <= 90 )) or ($idade >= 18 and ($peso > 50 and $peso <= 100 ))){
            echo "<br>De acordo com sua idade: $idade e peso: $peso você tem um risco normal!";
        }
        //risco medio
        elseif(($idade < 18 and $peso < 50) or ($idade >= 18 and $peso <= 50)){
            echo "<br>De acordo com sua idade: $idade e peso: $peso você tem um risco medio!";
        }
        else{
            //risco alto
            if((($idade < 18 and $peso > 90) and $peso <= 120) or (($idade >= 18 and $peso > 100) and ($peso <= 140))){
                echo "<br>De acordo com sua idade: $idade e peso: $peso você tem um risco medio!";
            }
            //risco extremamente alto
            elseif(($idade < 18 and $peso > 120) or ($idade >= 18 and $peso > 140)){
                echo "<br>De acordo com sua idade: $idade e peso: $peso você tem um risco extremamente alto!";
            }

        }
        
    ?>
    <?php
    echo "<hr>";
        
    $vetor = array("SP"=>"São Paulo","RJ"=>"Rio de Janeiro","PE"=>"Recife","AM"=>"Manaus","GO"=>"Goiania","SC"=>"Florianopoles");

    foreach($vetor as $estado => $capital){
        echo "A capital de $estado é $capital <br>";
    }
    
    ?>

    <?php
    echo "<hr>";
        $numeros = array(1,2,3,4,5,6,7,8,9,10);
    
    
    
    
    
    ?>






</body>
</html>