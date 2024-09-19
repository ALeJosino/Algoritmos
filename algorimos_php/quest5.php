<?php
//  algoritmo 98

// Valores fictícios
$salario_bruto = 2500; // Exemplo de salário bruto
$valor_prestacao = 800; // Exemplo de valor da prestação

// Calcula o limite de 30% do salário bruto
$limite = 0.3 * $salario_bruto;

// Verifica se o valor da prestação está dentro do limite
if ($valor_prestacao <= $limite) {
    echo "\nEmpréstimo concedido\n";
} else {
    echo "\nEmpréstimo negado\n";
}

// Exibe os valores para referência
echo "\nSalário bruto: R$ " . $salario_bruto;
echo "</br>";
echo "\nValor da prestação: R$ " . $valor_prestacao;
echo "</br>";
echo "\nLimite de 30% do salário: R$ " . $limite;
?>
