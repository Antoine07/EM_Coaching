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

echo $candidate;
echo PHP_EOL;
