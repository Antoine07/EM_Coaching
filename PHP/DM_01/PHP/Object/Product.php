<?php 

class Product{
    private $price ;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function setPriceTTC($tva){
        
        $this->price = $tva * $this->price + $this->price;
    }

    public function getPrice(){
        
        return $this->price;
    }
}



/*
Exercice Créez un produit (c'est fait) et 
1. définir une tva pour le calcul TTC du prix
2. Affichez le prix TTC
*/
$apple = new Product(0.5);

// On passe une valeur en paramètre
$apple->setPriceTTC(0.2);

// on accède à une valeur dans le script courant
echo $apple->getPrice();
echo PHP_EOL;