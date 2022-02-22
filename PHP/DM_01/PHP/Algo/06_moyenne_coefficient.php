<?php

$notes = [11, 12, 14, 17, 2];

// 1. calculez la moyenne avec un script 

$sum = 0;
for($i = 0; $i < count($notes); $i++){
    $sum += $notes[$i];
}

// moyenne round est une fonction qui arrondi avec une décimale après la virgule
echo round( $sum/count($notes), 1 );
echo PHP_EOL;

// 2. Calculez la moyenne des notes suivantes en considérant le coéfficient.
// [note,  coefficient] chaque élément du tableau
$notes = [ [11, 2] , [12,1], [14,3], [17,2], [2,1]];
         // 0          1       2       3       4
$sum = 0;
$sumCoeff  =0 ;
for($i = 0; $i < count($notes); $i++){
    $sum += $notes[$i][0] * $notes[$i][1]; // on multiplie la note par son coefficient
    $sumCoeff += $notes[$i][1] ; // somme des coefficient
}

// la somme des notes divisée par la somme des coefficients
echo round( $sum/$sumCoeff, 1 );
echo PHP_EOL;

