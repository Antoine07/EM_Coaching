<?php

$table = 7;

foreach(range(1, 10) as $number){
    print_r($table*$number);
    echo PHP_EOL;
}

$tables = [];
for($i=1; $i < 11; $i++){
    foreach(range(1, 10) as $number){
        $tables[] = $i*$number;
    }
}

print_r($tables);
echo PHP_EOL;

// Comptez le nombre de mots abc dans la chaîne de caractères suivantes 

$str = "abcdefgabcjkhlabcklmnabc";

$pattern = "abc";

function isPattern($str, $pattern){

    $count = strlen($pattern);
    for($i=0; $i<strlen($str) - $count; $i++){
        $test = 0;
        for($j=0; $j < $count; $j++){
            if($pattern[$j] == $str[$i+$j]){
                $test++;
            }
        }

        if($test == $count){

            return true;
        }

    }

    return false;
}

print_r(isPattern($str, $pattern ) ? "Yes" : "No" );

echo PHP_EOL;

// TODO 