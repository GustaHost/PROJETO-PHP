<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA4 - FUNÇÕES</title>
</head>
<body>
    
    <?php
        function minhaFuncao(){
            return " usando o return pela primeira vez";

            echo "Minha primeira função";
        }
        echo minhaFuncao();

        echo "<hr>";

        /*
            crie uma função de faça a conversão de uma variavel de string para float.
            - primeira informe o tipo da variavel antes de ser convertida;
            - em um segundo momento o tipo de variavel após ser convertida

            is_bool() - verifica se a variavel é um booleano;
            is_int() - verifica se a variavel é um inteiro;
            is_...() - ....
        */ 

        function trocaVariavel($string){
            if (is_float($string)) {
                
                return "$string";
            } else {
            
                return $string = (float)$string;
            }

            
        
        }

        $string = "12.5";
        echo "<br> Variavel | $string | ainda não foi convertida e é uma: ";
        echo gettype($string);
        $string = trocaVariavel($string);
        echo "<br> Variavel | $string | foi convertida para: ";
        echo gettype($string);

        echo "<hr>";

        /* 
        elabore um codigo onde se calcule a media de 4 notas de dois alunos.

        Se a media for menor que 3.0 o aluno está reprovado
        Se a media for maior ou igual 3.0 e menor que 6.0 o aluno esta reprovado
        Se a media for maior ou igual a 60. e menor ou igual a 10.0 o aluno está aprovado por media
        
        Deve-se ter condições para que não sejam calculadas medias com numero maiores de 10 ou menores que zero.*/

       
        
        function mediaNotas($aluno1, $aluno2){
        $totalAluno1 = 0;
        $totalAluno2 = 0;
        $mediaAluno1 = 0;
        $mediaAluno2 = 0;
        
            
            for($i = 0; $i < 4; $i++){
                $totalAluno1 += $aluno1[$i];
                $totalAluno2 += $aluno2[$i];
            }
            $mediaAluno1 = $totalAluno1 / 4;
            $mediaAluno2 = $totalAluno2 / 4;

            if($mediaAluno1 < 3.0 || ($mediaAluno1 >= 3.0 ||$mediaAluno1 < 6.0)){
                echo "O aluno 1 esta reprovado por media";
            }else{
                echo "O aluno 1 esta aprovado por media";
            }

            if($mediaAluno2 < 3.0 || ($mediaAluno2 >= 3.0 ||$mediaAluno2 < 6.0)){
                echo "<br>O aluno 2 esta reprovado por media";
            }else{
                echo "<br>O aluno 2 esta aprovado por media";
            }
        }

        $aluno1 = array(2.0,5.2,10.0,5.0);
        $aluno2 = array(10.0,5.0,7.5,2.0);

        mediaNotas($aluno1, $aluno2);
        


    ?>







</body>
</html>