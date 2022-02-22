<?php

require_once __DIR__ . '/CreateNumberPush.php';

$createPushData = new CreateNumberPush('./Data/students_em.csv');

//push des lignes tableaux dans un plus grand tableau dans la classe
$createPushData->push( ['id', 'name', 'note'] ); // 1 entete du fichier csv
$createPushData->push( [1, 'Kevin', 17] ); // 2
$createPushData->push( [2, 'Dima', 18]); // 3
$createPushData->push( [3, 'Michel', 13] ); // 4

print_r($createPushData->getData());

$createPushData->createFile();