<?php

/**
 *  Exercice 
 *  1. Faite la somme des entiers pairs de la colonne number, créez une méthode
 *  $number->countEven(); 
 *  2. Faites une méthode qui fait la somme module un entier passé en paramètre
 * $number->sumModulo(3); // somme des nombres modulo 3 ou multiple de 3
 * 
 *  3. Faites une méthode count($number) elle comptera combien il y a de nombre valant number
 * $number->count(10); // donne le nombre de 10 par exemple
 * 
 * 4. Récupérez les noms des étudiants dans le fichier notes.csv qui ont eu une note égale 15. Vous mettez ces noms dans un tableau PHP. Faites en sorte que votre méthode soit dynamique.
 * 
 * $number->searchStudent($number);
 * 
 * 4. Créez une fonction qui ajoute des nombres dans un fichier notes_year.csv en respectant le format : 
 *  id, number
 *  1, 11
 * 
 * Utilisez la fonction https://www.php.net/manual/fr/function.fputcsv.php
 */

// 

require_once __DIR__ . '/Number.php';
require_once __DIR__ . '/CreateNumber.php';

$number = new Number('./Data/notes.csv');

echo $number->countEven();
echo PHP_EOL;

echo $number->sumModulo(3);
echo PHP_EOL;

echo $number->count(10);
echo PHP_EOL;

$data = [
    ['id', 'number'],
    [1,11],
    [2,17],
    [3,18],
    [4,11],
    [5,20],
];

$createNumber->createData($data);
$createNumber->createData($data);

// --------------------------- //

