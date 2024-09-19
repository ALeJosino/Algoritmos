<?php
// algoritmo 72

$deposito = 1000;

$taxa = 2;

$valor = $deposito * $taxa / 100;

$total = $deposito + $valor;

echo "Rendimentos: R$ " . number_format($valor, 2, ',', '.') . "\n";
echo "Total: R$ " . number_format($total, 2, ',', '.') . "\n";
?>
