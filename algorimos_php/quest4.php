<?php
// algoritmo 57

// salvando as notas obtidas
$pr1 = 9;
$pr2 = 3;

//  média
$mf = ($pr1 + $pr2) / 2;

// média truncada 
$media_truncada = (int)(($mf - 0.5) + 0.001);

// média arredondada 
$media_arredondada = (int)($mf + 0.001);

// Imprime os resultados
echo "\nMédia truncada: " . $media_truncada;
echo "</br>";
echo "\nMédia arredondada: " . $media_arredondada;
echo "\n";
?>
