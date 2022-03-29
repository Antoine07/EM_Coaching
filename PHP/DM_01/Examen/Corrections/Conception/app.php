<?php

require_once __DIR__ . '/Platine.php';
require_once __DIR__ . '/Vinyle.php';

$acdc = new Vinyle(name : 'Highway To Hell', author : 'AC/DC');
$platine = new Platine($acdc);

// on pose le vinyle sur la platine
echo $platine->setVinyle($acdc);
echo PHP_EOL ;

// on le retire en récupérant de la platine

echo $platine;
echo PHP_EOL ;

$acdc2 = new Vinyle(name : 'Highway To Hell 2', author : 'AC/DC');

// retirer le disque de la platine
print_r($platine->getVinyle());

echo $platine->setVinyle($acdc2);

// le deuxième disque sur la platine
echo $platine;
echo PHP_EOL ;

