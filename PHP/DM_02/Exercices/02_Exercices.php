<?php

/*
Exercice 01
    Faites la somme des nombres pairs du tableau suivant
*/
$data = [1, 1, 201, 3, 4, 87, 809, 115, 6, 106, 9, 9, 10, 11, 12, 14, 48, 48, 51, 51, 1, 1, 1, 51, 3, 3, 3, 51, 51, 51, 51, 51, 0];

$sumEven = 0;

foreach($data as $num){
    if($num % 2 == 0){
        $sumEven += $num;
    }
}

echo $sumEven ;
echo PHP_EOL;

$sumEven = 0;
foreach($data as $num){
    if($num % 2 == 1) continue ; // passe à l'itération suivante

    $sumEven += $num;
}

echo $sumEven ;
echo PHP_EOL;
/*
Exercice 02
   Inverser circulairement les valeurs du tableau suivant
*/

$numbers = [1, 2, 3, 4, 5];

// 5, 4, 3, 2, 1