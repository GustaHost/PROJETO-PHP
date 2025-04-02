<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = 'JAVA';
    echo 'Minha linguagem favorita é $nome. <br>';

    $nome1 = 'JavaScript';
    echo 'Minha linguagem favorita é ' . $nome1 . '<br>';

    $nome2 = "PHP";
    echo "Minha linguagem favorita é $nome2 . <br>";


    $name = "Acelino";
    $sobre_name = "Freitas";
// echo "$name "Popó" $sobre_name
    echo '$name "Popo" $sname <br>';
    echo "$name 'Popo' $sobre_name <br>";
    echo "$name \"Popo\" $sobre_name <br><br>";

//Manipulação de strings

    $nome1Manipula = " Linguagem javascript ";
    $nome2Manipula = 'Linguagem phython';
    $nome3Manipula = 'Linguagem PHP';
    /*strlen conta o numero de caracteres*/ 
    echo "O número de caracteres é " . strlen($nome1Manipula);

    echo "<hr>";
//-------------------------------------------------------------------------------------

    function validar_data($data){
        $partesData = explode ('/', $data);
        if(count($partesData) != 3){
            return "A data informada etá incompleta";
        }
        $dia = $partesData[0];
        echo $dia . "/";
        $mes = $partesData[1];
        echo $mes. "/";
        $ano = $partesData[2];
        echo $ano. ".";
        echo "<br>";
        if(strlen($dia) < 1 or strlen($dia) > 2){
            return "O numero de caracteres informados para o dia estão incorretos";
        }
        if(strlen($mes) < 1 or strlen($mes) > 2){
            return "O numero de caracteres informados para o mes estão incorretos";
        }
        if(strlen($ano) != 4){
            return "O numero de caracteres informados para o ano estão incorretos";
        }
        return "A data informada está correta!";
    }

    echo validar_data('01/04/2025');

        echo "<hr>";
//-------------------------------------------------------------------------------------

        function validar_data_new($data1){
            $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
            $result = preg_match($padrao, $data1);

            if($result == 1){
                return "A data informada está correta";
            }else{
                return "A data informada está incorreta";
            } 
        }
        echo validar_data_new('02/01/2025');

        echo "<hr>";
        echo "<hr>";
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
        $primeiroArray = array(1,2,3,4,5);
        var_dump($primeiroArray);

        echo "<br>";

        $segundoArray = array(6,5,4,3);
        var_dump($segundoArray);

        echo "<br><br>";

        // Função array_sum() -- soma os valores de um array

        $numeros = array(10,15,20,100);
        $total = array_sum($numeros);

        var_dump($total);

        echo "<br>";

        echo $total;

        echo "<hr>";

        $first = array("Hello", "word");
        $second = array("exit", "here");
        $merged = array_merge($first, $second);
        //echo $merged;
        print_r($merged);

        /*
        Encontre o maior numero do vetor abaixo
        */

        $nums = array(12,19,23,95, -33);
        $maior = sum($nums);
        echo $maior;

?>

</body>
</html>