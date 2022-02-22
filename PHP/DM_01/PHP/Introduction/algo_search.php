<?php

/*

Comptez le nombre de fois que 1 apparait dans le tableau suivant
*/
$data = [1, 10, 1, 12, 45, 89, 100, 120, 1, 145, 200, 1, 247, 1, 300, 458, 1, 1];

$count = 0; // variable 
foreach ($data as $num) {
    if ($num == 1) $count++;
}

echo PHP_EOL;
echo $count;
echo PHP_EOL;

// parcourir le tableau suivant et compter le nombre de 1
$data2d = [
    [1, 1, 2],
    [11, 12, 21],
    [11, 1, 2],
    [10, 1, 2],
];

$count = 0; // variable 
foreach ($data2d as $data) {
    foreach ($data as $num) {
        if ($num == 1) $count++;
    }
}

echo PHP_EOL;
echo $count;
echo PHP_EOL;

// Exercice 
// Vérifiez si dans le tableau data il existe un sous-tableau contenant que des 1
$data = [
    [1, 1, 2],
    [11, 12, 21],
    [1, 1, 1, 1, 1, 1, 1],
    [10, 1, 2],
];

$testOne = false;

foreach ($data as $line) {
    $len = count($line); // longueur du sous tableau
    $count = 0;
    foreach ($line as $num) {
        if ($num == 1) {
            $count++;
        }
    }
    // si le nombre de fois que l'on trouve 1 est égale à la longueur du sous-tableau
    // alors cela veut dire qu'il n'y a que des 1 dans ce sous tableau et dans ce cas on a trouvé
    // un sous tableau qui vérifie notre condition.
    if ($count == $len) {
        $testOne = true;
        break;
    }
}

echo PHP_EOL;
echo $testOne ? "YES" : "NO";
echo PHP_EOL;
