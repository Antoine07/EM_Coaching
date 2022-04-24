<?php

$str = "montage";
function shuffleStr($str)
{
    $shuffles = [];
    $len = strlen($str);
    // tant qu'on a pas mélangé toutes les lettres
    while (count( $shuffles) != $len ) {
        // on pioche une lettre au harsard
        $rand = rand(0, $len - 1);
        $l = $str[$rand];

        // on regarde si la lettre pris au hasard n'est pas dans le tableau
        if (!in_array($l, $shuffles)) {
            $shuffles[] = $l;
        }
    }

    // on transforme le tableau en chaine de caractères
    return implode("", $shuffles);
}

echo shuffleStr($str);
echo PHP_EOL;
