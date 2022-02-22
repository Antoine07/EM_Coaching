<?php

/**
 * Exercice 
 *  1. On jete un dé à 6 faces équilibrés. Créez une fonction qui simule un lancer.
 * 
 *  2. Répétez 100000 fois un lancer de dé et calculez la probabilité d'obtenir un 3 
 */

// 1
// On peut du reste utiliser directement la fonction random_int sans re-créer une autre fonction
//  function laner(int $numFaces = 6){

//     return random_int(1, $numFaces);
//  }

//  laner(); // 1, 2, 3, 4,..., 6

// 2
$count = 0; // comptez le nombre de fois que vous obtenez 3
$max = 100000;
$numFaces = 6;
$face = 3;
$nbFace = 0;

while ($count < $max) {
    $count++;
    if (random_int(1, $numFaces) == $face) {
        $nbFace++;
    }
}

// Affichez la proba
echo print_r($nbFace / $max);
echo PHP_EOL;

/**
 * Exercice lancer 2 dés
 * Calculez la proba d'obtenir le couple (3,3), refaites une simulation avec 100000
 * 
 * 1. Créez une fonction lancerArray qui lance deux dés et retourne un tableau à deux valeurs
 * 
 *  lancerArray() // [1,6] ou [5,2] ou [3,3] ...
 * 
 * 2. Calculez cette proba comme dans l'exercice précédent
 */

function lancerArray($numFaces = 6)
{

    return [
        random_int(1, $numFaces),
        random_int(1, $numFaces)
    ];
}

$count = 0; // comptez le nombre de fois que vous obtenez 3
$max = 100000;
$numFaces = 6;
$face = 3;
$nbFace = 0;

while ($count < $max) {
    $count++;
    $res = lancerArray();
    if ($res[0] == 3 && $res[1] == 3) {
        $nbFace++;
    }
}

echo print_r($nbFace / $max);
echo PHP_EOL;

/**
 * Exercice lancer 2 dés
 * Calculez la proba d'obtenir le couple (1,3) dans le désordre, refaites une simulation avec 100000
 * 
 * 1. Créez une fonction lancerArray qui lance deux dés et retourne un tableau à deux valeurs
 * 
 *  lancerArray() // [1,6] ou [5,2] ou [3,3] ...
 * 
 * 2. Calculez cette proba comme dans l'exercice précédent
 */

$count = 0; // comptez le nombre de fois que vous obtenez 3
$max = 100000;
$numFaces = 6;
$face = 3;
$nbFace = 0;

while ($count < $max) {
    $count++;
    $res = lancerArray();
    if (($res[0] == 1 && $res[1] == 3) || ($res[0] == 3 && $res[1] == 1) ) {
        $nbFace++;
    }
}

echo print_r($nbFace / $max);
echo PHP_EOL;