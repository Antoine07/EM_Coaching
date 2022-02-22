<?php

// importe le fichier Student.php avec un chemin absolu
require_once __DIR__ . '/Student.php';

$student = new Student('./Data/notes.csv'); // crée un objet

echo $student->avg(); // calcul la moyenne
echo PHP_EOL;

// Calculez la moyenne en considérant le coefficient de chaque note

// 12, 2 
// 11, 3
// (12*2 + 11*3) / (2 + 3)

echo $student->avgCoeff(); // calcul la moyenne
echo PHP_EOL;