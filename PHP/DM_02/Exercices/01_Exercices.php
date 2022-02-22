<?php

// Exercice 01
/*
    Ajoutez 1 à chaque note du tableau $st_notes
*/

//           0    1   2   3  4   5
$st_notes = [13, 17, 18, 14, 13, 18.5];

for ($i = 0; $i < count($st_notes); $i++) {
    $st_notes[$i] = $st_notes[$i] + 1;
}

print_r($st_notes);
echo PHP_EOL;

// Exercice 02
/*
    Mettre l'ensemble des prix HT en TTC à l'aide d'une boucle, prendre pour TVA 20%
*/

$prices_HT = [13, 17, 18, 14, 13, 18.5, 15, 11];
$prices_TTC = [];

for ($i = 0; $i < count($prices_HT); $i++) {
    $prices_TTC[] = $prices_HT[$i] * 1.2; // puscher un élément dans le tableau
}

print_r($prices_TTC);
echo PHP_EOL;

/**
 * Exercise 03
 *
 *    Essayez d'affichez j'ai trouvé 1 à l'indice ... en parcourant le tableau $data
 *
 *  */

// VARIABLES & CONSTANTES
$data = [1, 1, 201, 3, 4, 87, 809, 115, 6, 106, 9, 9, 10, 11, 12, 14, 48, 48, 51, 51, 1, 1, 1, 51, 3, 3, 3, 51, 51, 51, 51, 51, 0];
// évite le hardcoding pas de valeur constante dans le script
$searchNumber = 1;

// CODE LOGIQUE
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] == $searchNumber) {
        echo "J'ai trouvé $searchNumber à la poisition $i";
        echo PHP_EOL;
    }
}

foreach ($data as $pos => $number) {
    if ($number == $searchNumber) {
        echo "J'ai trouvé $searchNumber à la poisition $i";
        echo PHP_EOL;
    }
}

/*
 Exercice 04

Calculer la moyenne des valeurs suivantes, pensez à les ranger dans une collection de type array et pensez à utiliser les fonctions classiques de PHP.
Alan 13
Sandrine 17
Claire 18
Romain 14
Antoine 13
Sophie 18.5
*/

$students = [
    'Alan' => 13,
    'Sandrine' => 17,
    'Claire' => 18,
    'Romain' => 14,
    'Antoine' => 13,
    'Sophie' => 18.5
];

$sum = 0;

$sum = array_sum($students); // de préférence car plus rapide fonction PHP (compilée)

print_r($sum);
echo PHP_EOL;

// La somme calculer à la main
$sum = 0;
foreach ($students as $note) {
    $sum += $note;
}

print_r($sum);
echo PHP_EOL;


// Calcul de la moyenne

$nb = count($students);

if ($nb > 0) {
    $avg = round( $sum/$nb, 2 ) ; // paramètres de round : valeur et précision après la virgule
    print_r($avg);
    echo PHP_EOL;
}

