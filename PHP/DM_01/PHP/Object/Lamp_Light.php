<?php

// Exercice

/**
 * Créez deux classes Lamp et Ligth, la classe lampe possède un bouton pour alumer la lumière. La classe Ligth ne peut être que dans les états suivants : On ou Off
 * Trouvez la relation entre ces deux classes. Aidez-vous de l'exemple suivant
 * 
 * $lamp = new Lamp(new Ligth);
 * $lamp->switch();
 * echo $lamp; // __toString() pour connaître l'état de la lamp
 * 
 */

class Ligth
{
    private $state = "Off";

    public function turn(){
        if($this->state == "Off") $this->state = "On";
        else $this->state = "Off";
    }

    public function getState(){
        return $this->state;
    }
}

class Lamp
{
    private $ligth;

    public function __construct($ligth)
    {
        $this->ligth = $ligth;
    }

    public function switch()
    {
        $this->ligth->turn(); 
    }

    public function __toString()
    {
        return $this->ligth->getState();
    }
}

$lamp = new Lamp(new Ligth);
$lamp->switch();

echo $lamp;
echo PHP_EOL;

$lamp->switch();

echo $lamp;
echo PHP_EOL;

