<?php
// algoritmo 484

// esse é um vetor de exemplo:

$dados = [123, 45, 67, 12, 78, 90, 36, 67, 125, 35,1 ];

/*
    armarzenando os dados me uma variável...
    usando a função "min" para buscar o menor valor do vetor "dados"
*/
$menor = min($dados);

// exibe o vetor
echo "VETOR\n";
foreach ($dados as $dados) {
    echo $dados . "  ";
}

// apresenta o menor valor encontrado
echo " </br> MENOR ELEMENTO: $menor\n";
?>
