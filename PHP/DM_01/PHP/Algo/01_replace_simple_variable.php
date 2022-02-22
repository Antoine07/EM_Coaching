<?php

/**
 * Exercice 
 * 
 * Remplacez la valeur $a par la valeur $b et la valeur $b par la valeur $a à l'aide d'un script
 */

$a = 10;
$b = 11;
echo "a : $a";
echo PHP_EOL;
echo "b : $b";
echo PHP_EOL;
$c = $a;
$a = $b;
$b = $c;
echo PHP_EOL;
echo "a : $a";
echo PHP_EOL;
echo "b : $b";
// attention simple cote n'évalue pas les variables dans la chaîne de caractères.
// echo PHP_EOL;
// echo 'b : $b';

echo PHP_EOL;
