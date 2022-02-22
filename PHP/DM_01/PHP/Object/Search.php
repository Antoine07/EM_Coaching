<?php

class Search{

    private $numbers = [];

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function find(int $number){
        // trouver la position du nombre number 

        foreach($this->numbers as $k => $v){
            if($number == $v){

                return $k;
            }
        }

        return null;
    }

    /**
     *  $numbers = [1,7,10, 7, 8 ]
     *  replaceAll(7, 3)
     *      7 dans  [1,7,10, 7, 8 ] => true
     *          foreach [7,10, 7, 8  ] => k = 0, v = 1
     *              7 == 1 faux
     *          foreach [10, 7, 8 ] => k = 1, v = 7
     *              7 == 7 true
     *                  $numbers[1] = 3
     *          foreach [ 7, 8 ] => k = 2, v = 10
     *              7 == 10  faux
     *          foreach [ 8 ] => k = 3, v = 7
     *              7 == 7 true
     *                  $numbers[3] = 3
     *          foreach [  ] => k = 4, v = 8
     *              7 == 8 false
     *          foreach 
     *      
     *           return null 
     */
    public function replaceAll(int $number, int $replaceNumber){

        if(in_array($number, $this->numbers)){
            foreach($this->numbers as $k => $v){
                if($number == $v){
                    $this->numbers[$k] = $replaceNumber ;
                }
            }
        }

        return null;
    }

    /**
     *  $numbers = [1,7,10 ]
     *  replace(7, 3)
     *      7 dans  [1,7,10 ] => true
     *          foreach [7,10 ] => k = 0, v = 1
     *              1 == 7 faux
     *          foreach [10] => k = 1, v = 7
     *              7 == 7 true
     *                  $numbers[1] = 3
     *                  break
     *      
     *          return null 
     */
    public function replace(int $number, int $replaceNumber){

        if(in_array($number, $this->numbers)){
            foreach($this->numbers as $k => $v){
                if($number == $v){
                    $this->numbers[$k] = $replaceNumber ;
                    break;
                }
            }
        }

        return null;
    }

    public function __toString()
    {
        return print_r( $this->numbers );
    }
}

/*
Exercice 
1. 
La classe Search permet de trouver un élément dans une liste de nombres. Elle possède une méthode find qui prend un paramètre entier et qui retourne la position si elle existe de l'élément dans le tableau numbers.

2. Remplacez une valeur par une autre dans le tableau $numbers
replace($n, $r)
la méthode replace cherche $n dans le tableau numbers et remplace cette valeur par $r, si la valeur n'existe pas ($n ) la méthode ne fait rien.
*/

$search = new Search([9,10,11,4, 7, 8, 100, 10,  7]);

echo $search->find(4); // 3
echo PHP_EOL;
echo $search->find(13) == null ? "rien trouvé" : "Oui il y a ce nombre dans numbers" ; // null
echo PHP_EOL;


echo $search->replaceAll(7, 3); // 3
echo PHP_EOL;
echo $search->replace(10, 1000) == null ? "rien trouvé" : "Oui il y a ce nombre dans numbers" ; // null
echo PHP_EOL;

echo $search;
echo PHP_EOL;
