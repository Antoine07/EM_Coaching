<?php

$numbers = [1,9,10, 7, 2 ];

// Trouvez à l'aide d'un script l'élément le plus grand du tableau

$plusGrand = 0;

foreach($numbers as $number){
    if( $number > $plusGrand ){
        $plusGrand  = $number;
    }
}

echo $plusGrand; 
echo PHP_EOL;