<?php

/*

1. Comptez le nombre de i dans la chaîne de caractères str.

2. Comptez le nombre de lettres différentes dans la chaîne de caractères. (à relire )

3. Inversez la chaîne de caractères en utilisant une boucle.

indications : vous n'utiliserez que la fonction strlen et 
*/

$str = "mississippi";

$count = 0 ;

for($i=0; $i < strlen($str); $i ++){
    if($str[$i] === 'i') {
        $count++;
    }
}

print('nb de i ' . $count);
echo PHP_EOL;


// -------------------------

$dejavu = [];
$comptage = [];

for($i=0; $i < strlen($str); $i++){
    $letter = $str[$i];
    $count = 0;

    // si on a déjà compter le nombre d'occurence de cette lettre on passe à l'itération suivante dans la première boucle dans l'objectif de ne pas recompter deux fois la même lettre
    if(in_array($letter, $dejavu)) continue;

    // on compte le nombre d'occurence d'une lettre que l'on a pas déjà compté
    for($j=0; $j < strlen($str); $j ++){
        if($letter == $str[$j]){
            $count++;
        }
    }

    // on mémorise les lettres déjà compter
    $dejavu[]= $letter; // les crochets permettent de pusher un élément dans un tableau

    // mémoriser le comptage lui-même
    $comptage[] = [$letter => $count];
}

print_r($comptage);
echo PHP_EOL;
