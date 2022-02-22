<?php 

// chemin vers le fichier 
$file =  "./Data/titanic.csv" ;

// Ouvre le fichier pour récupérer ses données en lecture seule "r"
// On ouvre une porte par laquelle on récupèrera les données
$ressource = fopen($file, "r"); 

// paramètre de la fonction fgetcsv 1 la ressource ouverte, le nombre de caractères sur ligne à récupérer, le dernier paramètre c'est le séparateur permettant de créer un tableau (split).
while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data);
}

// 01 Exercice 
// Affichez l'age des passagés
$ressource = fopen($file, "r");  // r en lecture seule 
$data = fgetcsv($ressource, 1000, ",");

while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data[5]);
    echo PHP_EOL;
}

fclose($ressource); // fermer la ressource

// 02 Exercice 
// Faire la somme de tous les ages et calculer la moyenne des ages

$sumAge = 0;
$count = 0;

$ressource = fopen($file, "r"); // r en lecture seule 
$data = fgetcsv($ressource, 1000, ",");

while( $data = fgetcsv($ressource, 1000, ",") ){
    $sumAge +=  (float) $data[5] ;
    $count++;
}

print_r(round( $sumAge/$count, 2 ));
echo PHP_EOL;