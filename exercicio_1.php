<?php
$k =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$rotacoes = 3;

$j = [];
$tamanhoArray = count($k);

for ($rot = 0; $rot < $rotacoes; $rot++) {
    foreach ($k as $key => $numero) {
        $proximoIndice = $key + 1;

        if ($proximoIndice < $tamanhoArray) {
            $j[$key] = $k[$proximoIndice];
        }
    }

    for ($i = 0; $i < 1; $i++) {
        $j[$tamanhoArray - 1] = $k[$i];
    }

    $k = $j;

    if ($rot !== $rotacoes - 1) {
        $j = [];
    }
}

print_r($j);
