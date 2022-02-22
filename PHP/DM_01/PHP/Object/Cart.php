<?php

class Cart{
    private $products = [];
    private $tva = 0.2;

    public function addProduct($price, $quantity){

        // on ajoute en arrondissant le prix X  quantité avec deux décimales après la virgule
        $this->products[] = round ( ($price + $price * $this->tva)  * $quantity, 2 );
    }

    public function total(){
        $total = 0.0 ;

        foreach($this->products as $price){
            $total += $price;
        }

        return $total;

        // return array_sum($this->products);
    }

    // modification de la tva
    public function setTva($tva){
        $this->tva = $tva ;
    }

    // vider le panier
    public function reset(){
        $this->products = [];
    }
}

$cart = new Cart;

$cart->addProduct(10, 10);
$cart->addProduct(5, 10);
$cart->addProduct(3.5, 10);

echo $cart->total();
echo PHP_EOL;

$cart->reset();
echo $cart->total();
echo PHP_EOL;

$cart->setTva(0.4);

$cart->addProduct(10, 10);
$cart->addProduct(5, 10);
$cart->addProduct(3.5, 10);

echo $cart->total();
echo PHP_EOL;