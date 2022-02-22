<?php

$str = "mississippi";
// Compter le nombre de i dans la chaîne de caractères
// longueur strlen($str);
// une boucle for
// $str[0] m
// $str[1] i

$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    // on compte tous les i minuscule(s) et majuscule(s)
    if (strtolower($str[$i]) == 'i') $count++;
}

echo "count i $count";
echo PHP_EOL;

$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    // on compte tous les m minuscule(s) et majuscule(s)
    if (strtolower($str[$i])  == 'm') $count++;
}

echo "count m $count";
echo PHP_EOL;

// Exercice
// Mettre en majuscule les i dans la chaîne de caractère $str

$strTmp = '';
for ($i = 0; $i < strlen($str); $i++) {
    // soit on a un i soit on a une autre lettre
    if ($str[$i]  == 'i') {
        $strTmp .= strtoupper($str[$i]);
    } else {
        $strTmp .= $str[$i]; // . concaténation 
    }
}

echo $strTmp;
echo PHP_EOL;
