<?php 

// ça peut etre quelque chose de précis, déterminé qui a des responsablités limitées, mais cela ne peut pas être n'importe ... C'est à dire la classe spaguetti (qui trop responsabilité et aucun rôle précis).

// Déf c'est abstrait 
class Car{

    // DANS LA CLASSE CHEZ VOUS DANS UNE ENCEINTE FERMEE
    // VARIABLE DE CLASSE privée
    private $model;

    // Le constructeur est exécuté lorsqu'on instancie la classe Car
    public function __construct($model)
    {
        echo $model; 
        echo PHP_EOL;
        // $this représente un objet en particulier une instance
        $this->model = $model;
    }

    // Crée une méthode public
    public function showHello(){
        echo "Hello";
    }

    public function getModel(){

        return $this->model;
    }
}

// DANS LA RUE DANS LA VIE DEHORS <=> SCRIPT COURANT

// On a créé 3 objets concret <=> variables, dans le script, distincts
$teslaS = new Car('Telsa S');
$tesla3 = new Car('Telsa 3');
$teslaX = new Car('Telsa X');

// la flèche permet d'accéder à une méthode ou variable de la classe
// IMPOSSIBLE CAR LA VARIABLE EST PRIVEE DANS LA CLASSE
// echo $tesla3->model;


// méthode publique on peut y accéder dans la vie dans le script courant
$tesla3->showHello();
echo PHP_EOL;

/*
Exercice
Créez une méthode qui permet d'afficher le modèle de votre voiture (objet) définit à l'instanciation de la classe 
*/

echo $teslaS->getModel();
echo PHP_EOL;

echo $tesla3->getModel();
echo PHP_EOL;

echo $teslaX->getModel();
echo PHP_EOL;