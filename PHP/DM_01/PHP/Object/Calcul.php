<?php

class Calcul
{

    private $result = 0;

    public function add($num1, $num2)
    {
        $this->result = $num1 + $num2;
    }

    public function getResult()
    {

        return $this->result;
    }

    public function sum($numbers)
    {
        foreach ($numbers as $num) {
            $this->result += $num;
        }
    }

    public function mults($numbers)
    {
        $this->result = 1; // avez vous pensé à mettre cette valeur à 1
        foreach ($numbers as $num) {
            $this->result *= $num;
        }
    }

    public function divide($a, $b)
    {

        if ($b == 0) return false;

        $this->result = round($a / $b, 2);
    }

    public function reset(){
        $this->result = 0;
    }
}

/*

Exercice 

1. écrire le code utile dans la méthode add qui ajoute deux valeurs à la variable  de classe $result. La méthode getResult affiche la valeur calculé par la méthode add.

2. Implémentez (faire le code) de la méthode sum de la classe Calcul, 
elle fera la somme des valeurs numériques d'un tableau, le résultat sera assigné à notre variable de classe $result (comme la méthode add). La méthode getResult continuera à afficher le resultat.

3. Faites la méthode mults qui multiplie toutes les valeurs d'un tableau de nombres.

4. Essayez de faire une méthode qui remet à 0 la variable de classe $result

5. Faite également la méthode divide qui divise deux nombres.x@
*/

$calculatrice = new Calcul();

$calculatrice->add(1, 2);
echo $calculatrice->getResult();
echo PHP_EOL;

echo $calculatrice->sum([1, 2, 3, 4, 5]);
echo $calculatrice->getResult();
echo PHP_EOL;

$calculatrice->reset();

echo $calculatrice->mults([1, 2, 3, 4, 5]);
echo $calculatrice->getResult();
echo PHP_EOL;

$calculatrice->reset();

echo $calculatrice->divide(1,10);
echo $calculatrice->getResult();
echo PHP_EOL;