<?php

/**
 * Exercice
 * 
 * Soit le fichier texte names.csv dans le dossier Data.
 * 
 * 1. Comptez le nombre de a par prénon dans le fichier et les afficher lors de la lecture du fichier.
 * 
 */

 /* 
 * 2. (**) Trouvez le prénom qui a le plus de "a" dans le fichier.
 */

require_once __DIR__ . '/Str.php';

$str = new Str('./Data/names.csv');

$str->countChar('b');