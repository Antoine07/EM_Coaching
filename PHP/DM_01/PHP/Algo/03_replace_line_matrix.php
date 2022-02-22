<?php

$A = [
    [5, 3, 1, 2, 1, 2, 1],
    [7, 8, 4, 3, 9, 7, 8],
    [8, 1, 2, 4, 1, 0, 3],
    [3, 2, 1, 2, 1, 7, 8],
    [1, 2, 1, 2, 1, 2, 1]
];

/*
Exercice suite :
Ajoutez chaque ligne de la matrice $A dans la matrice $B uniquement si ces lignes ne comportent pas de 0
*/
$B = [];
foreach( $A as $line ){
  $testSearchZero = false ; // réinitailisation du test de recherche
  // $line c'est les sous-tableaux
  foreach( $line as $num){
    // ce test $testSearchZero change si la condition est vérifiée : au moins un 0 sur la ligne
    if($num == 0) $testSearchZero = true;
  }
  // VOUS DEVZE PUSHER LA LIGNE DANS $B APRIS LA DEUXIEME BOUCLE  ICI !!!!
  // En fonction de la valeur de test on ajoute la ligne à la matrice $b

  if($testSearchZero == false){
    $B[] = $line;
  }
}

print_r($B);