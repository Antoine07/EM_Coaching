<?php

require_once __DIR__ . '/SearchStr.php';

$search = new SearchStr("Bonjour tout le monde !");

echo $search->sentence();

echo PHP_EOL;

$search->reverse();

echo $search;
echo PHP_EOL;
