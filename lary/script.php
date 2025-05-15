<?php
// $nome_da_variavel = $_array [name_input]
$nome_aluno = $_POST ['nome_aluno'];
$nota01 = $_POST ['nota01'];
$nota02 = $_POST ['nota02'];
$nota03 = $_POST ['nota03'];

//calcular a média das notas
$média = ($nota01+$nota02+$nota03)/3;

//exibe o texto, "." é usado para concatenar = variavel ne texto a ser exibido

echo "Aluno: ".$nome_aluno;
echo "<br>";
echo "Sua média é: ". $média;

//Faz uma condição para aprovar, reprovar ou deixar de recuperação 
    if ($média> 5) {

        echo "Aprovado";


    }
     
    elseif ($média == 5) {

        echo "Reprovado";
    }
    
    else 
    {
        echo "Recuperação";
    }
    //
    ?> 