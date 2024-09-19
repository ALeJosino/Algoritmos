<?php
//algoritmo 70

$valorConta = 300;

$valorTotal = $valorConta * 1.10;
echo "O valor da conta foi: " . "R$ " . $valorConta;
echo "</br>";
echo "O valor da conta com a gorjeta será: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";
?>
