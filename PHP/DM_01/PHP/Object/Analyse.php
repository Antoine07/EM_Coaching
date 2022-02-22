<?php

$file =  "./Data/titanic.csv" ;
// $handle = fopen($file, "r"); // ouvre une ressource avec l'adresse du fichier

// // tant que je n'arrive pas à la fin du fichier je boucle
// while(!feof($handle)){
//     // lire les données ligne par ligne
//     $content =  fgets($handle);
//     print_r(explode(",", $content));
//     echo PHP_EOL ;
//     break;
// }

// fclose($handle); // on ferme le fichier lu

// Exercice 01 
// Comptez le nombre de survivant sur le titanic sachant que survivre 1 et ne pas survivre c'est 0

// indications :
// Pour lire un fichier csv avec la fonction fgetcsv de PHP

// ré-ouvre la ressource
$handle = fopen($file, "r"); 

// l'assignation se fait avant l'évaluation dans le while pour arrêter la boucle

// je récupère la première ligne lecture ligne par ligne, à la fin il retourne false quand fgetcsv n'a plus rien à lire 
$data = fgetcsv($handle, 1000, ",");
print_r($data);
$survived = 0;
while( $data = fgetcsv($handle, 1000, ",") ){
    $survived += $data[1];
}

echo "survived $survived";
echo PHP_EOL ;
fclose($handle);

// Exercice 02 
// Comptez le nombre d'homme et de femme qui ont survécu

$handle = fopen($file, "r"); 

$data = fgetcsv($handle, 1000, ",");
print_r($data);
$survivedMale = 0;
$survivedFemale = 0;

while( $data = fgetcsv($handle, 1000, ",") ){
    $sex = strtolower($data[4]);
    if($sex == 'male') $survivedMale += $data[1];
    if($sex == 'female') $survivedFemale += $data[1];
}

echo "Survived Female: $survivedFemale, Male: $survivedMale ";
echo PHP_EOL ;


// 03 Exercice 
// Créez une classe Titanic avec une méthode qui s'appelle survived elle possède deux paramètre pour spéicifier si on a survécu ou pas et si on est un homme ou une femme.

/*
$titanic->survived(1,"male"); // surivivant male
*/