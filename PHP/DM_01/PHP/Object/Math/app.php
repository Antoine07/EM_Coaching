<?php

require_once __DIR__ . '/Maths.php';

$math = new Math('./Data/numbers.csv');

$math->shuffle();

// on les enregistre 

$math->persist('./Data/numbers_shuffle.csv');