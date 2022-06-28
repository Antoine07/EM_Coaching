<?php 

echo "Bonjour tout le monde";

// Une variable en PHP commence par un dolar
$numbers = [
    11, 16,100,9,7,8,19, 2, 10
];

echo PHP_EOL;

$candidate = array_shift($numbers); // 11

foreach($numbers as $number){
    if($number > $candidate){
        $candidate = $number;
    }
}

echo $candidate; // 100
echo PHP_EOL;

/**
 * //1
 * 16 > 11 
 *  $candidate = 16
 * 
 *  //2
 * 100 > 16
 *  $candidate = 100
 * 
 *  //3
 *  9, 7, 8, 19, 2, 10 > 100 Faux ...
 *
 * 
 * echo $candidate ; // 100 
 */

 // Exercice créez un script qui détermine le plus petit élément

// Exercice mettre tous les nombres de $numbers à puisse 2.