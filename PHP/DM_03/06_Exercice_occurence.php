<?php

// 1. Créez un script calcul la table de 7

$table = 7;

foreach(range(1, 10) as $num){
    echo $table * $num ;
    echo PHP_EOL;
}

// 2. Un script qui calcul toutes les tables de 1 à 10 dans un tableau de tableau

$res = []; // pour mettre les résultats des tables
foreach(range(1, 10) as $table){
    $res[] = []; // on crée un tableau dans un tableau pour chaque table, 
    foreach(range(1, 10) as $num){
        // les indices sont décalés on compte à partir de 0 - 9
        $res[$table-1][] =  $table * $num;
    }
}

print_r($res);
echo PHP_EOL;

/* 

1. écrire une fonction qui détermine la présence d'une chaine dans une autre. Utilisez la fonction 

2. Comptez le nombre de mots abc dans la chaîne de caractères $str.

*/

$str = "abcdefgabcjkhlabcklmnabc";

function isChar($str, $c){
    for ($i=0; $i < strlen($str); $i++) { 
        if($str[$i] === $c) return true; // Si on trouve le caractère on sort
    }

    return false;
}

print_r( isChar($str, "a"));
echo PHP_EOL;

function countChar($str, $c){
    $count = 0;
    for ($i=0; $i < strlen($str); $i++) { 
        if($str[$i] === $c)  $count++; // on compte les caractères
    }

    return $count;
}

echo countChar($str, "a");
echo PHP_EOL;
