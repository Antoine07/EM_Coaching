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

$str = "mississippi";
$dejavu = [];
$comptage = [];

for($i=0; $i < strlen($str); $i++){
    $letter = $str[$i];
    // penser à ré-initialiser le comptage de la lettre
    $count = 0;

    // si on a déjà compte le nombre d'occurence(s) de cette lettre, on passe à l'itération suivante dans la première boucle dans l'objectif de ne pas recompter deux fois les occurences pour la même lettre
    if(in_array($letter, $dejavu)) continue;

    // On compte le nombre d'occurence(s) d'une lettre que l'on n'a pas déjà comptée
    for($j=0; $j < strlen($str); $j ++){
        if($letter == $str[$j]){
            $count++;
        }
    }

    // On enregistre la lettre dans un tableau, pour ne pas re-compter deux fois la même chose
    $dejavu[]= $letter; // les crochets, sur la variable $dejavu, permettent de pusher l'élément dans ce tableau

    // On garde le nombre d'occurence(s) par lettre dans un tableau associatif
    $comptage[] = [$letter => $count];
}

print_r($comptage);
echo PHP_EOL;