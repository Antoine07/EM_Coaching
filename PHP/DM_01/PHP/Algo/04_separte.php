<?php

$data =  [5, 3, 11, 22, 121, 2, 11];

//  Exercice
// 1 Récupérer les nombre selon un critère : que des multiple de 11
$seprate = [];
foreach ($data as $number) {
    if ($number % 11 == 0) {
        $seprate[] = $number;
    }
}

echo PHP_EOL;
print_r($seprate);
echo PHP_EOL;

// 2 Les récupérer qu'une fois
$seprateUnique = [];
foreach ($data as $number) {
    // Si dans number est dans le tableau on passe à l'itération suivante à l'aide de l'insctruction continue 
    // cela évitera de pusher deux fois le même élément.
    if (in_array($number, $seprateUnique)) {
        continue; // itération suivante directement, sans exécuter la suite du script dans la boucle
    }

    // ici le script est exécuté que si l'élément n'est pas déjà dans le tableau 
    if ($number % 11 == 0) {
        $seprateUnique[] = $number;
    }
}

echo PHP_EOL;
print_r($seprateUnique);
echo PHP_EOL;

// 3
// voici un tableau de longueur paire spliter le tableau en deux tableaux de longueur identique
$dataset = [1, 2, 3, 4];

// $leftTab = [1,2];
// $rightTab = [3,4];
$leftTab = [];
$rightTab = [];

$len = count($dataset);
// On vérifie que la longueur du tableau est bien paire
if ($len % 2 == 0) {
    $middle = $len / 2; // 2
    for ($i = 0; $i < $len; $i++) {
        if ($i < $middle) {
            $leftTab[] = $dataset[$i];
        } else {
            $rightTab[] = $dataset[$i];
        }
    }
}

echo PHP_EOL;
print_r($leftTab);
echo PHP_EOL;

echo PHP_EOL;
print_r($rightTab);
echo PHP_EOL;

// Exercice 

/**
 * Parcourir le dataset séparer en deux tableaux les nombres pairs et impairs
 */

$datasetNumbers = [1, 55, 2, 3, 71, 25, 4, 5, 6, 7, 8, 9, 10, 11, 12, 18, 23, 100];

$datasetNumbers = [1, 55, 2, 3, 71, 25, 4, 5, 6, 7, 8, 9, 10, 4, 11, 12, 18, 23, 100, 11];
$unevenNum = [];
$evenNum = [];
$len2 = count($datasetNumbers); // length of 18      
 
foreach ($datasetNumbers as $k => $v) { 
     if (in_array($datasetNumbers[$k], $evenNum)) {
            continue;         
     } elseif ( in_array($datasetNumbers[$k], $unevenNum) ) {
            continue;
     } elseif ($v % 2 == 0) {
            $evenNum[] = $datasetNumbers[$k];
     } else {
            $unevenNum[] = $datasetNumbers[$k];                
     }                          
}     
            
echo PHP_EOL;     
echo PHP_EOL;          
print_r($evenNum);     

echo PHP_EOL;            
print_r($unevenNum);     
echo PHP_EOL; 
