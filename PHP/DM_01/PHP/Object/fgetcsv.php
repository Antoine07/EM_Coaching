<?php

$file =  "./Data/titanic.csv" ;

// ré-ouvre la ressource
$ressource = fopen($file, "r"); 

// quand fgetcsv n'a plus de ligne à afficher la fonction retourne false et la boucle s'arrête
// ça marche car l'assignation est prioritaire sur la condition
$data = fgetcsv($ressource, 1000, ",") ; // première ligne 
print_r($data);

$data = fgetcsv($ressource, 1000, ",");
print_r($data);

$data = fgetcsv($ressource, 1000, ",");
print_r($data);

$data = fgetcsv($ressource, 1000, ",");
print_r($data);

// on commencera à la cinquième ligne
while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data);
}