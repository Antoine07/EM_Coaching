<?php

require_once __DIR__ . '/CreateNumberPush.php';

$createPushData = new CreateNumberPush('./Data/students_em.csv');

//push des valeurs 
$createPushData->push( ['id', 'name', 'note'] ); // 1
$createPushData->push( [1, 'Kevin', 17] ); // 2
$createPushData->push( [2, 'Dima', 18]); // 3
$createPushData->push( [3, 'Michel', 13] ); // 4

print_r($createPushData->getData());

$createPushData->createFile();