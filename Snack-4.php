<?php
$arrayNumeri = [];

while (count($arrayNumeri) < 15) {
    $numeroRandom = rand(0, 100);
    if (!in_array($numeroRandom, $arrayNumeri)) {
        $arrayNumeri[] = $numeroRandom;
    }
}

echo implode(', ', $arrayNumeri);
