<?php

$numbers = ["alan", "sophie" , "bernard", "jacques"];

// Trouvez à la plus longue cha$înede caractère
// echo strlen("bonjour");

$plusGrand = 0;

foreach($numbers as $number){
    if( strlen($number) > $plusGrand ){
        $plusGrand  = $number;
    }
}

echo $plusGrand; 
echo PHP_EOL;