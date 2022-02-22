<?php

/**
 * Importez la classe User qui possède les attributs suivants 
 * 
 * id, name age propriétés privées dans la classe User
 * 
 * Créez les setter et getter de la classe User
 * getId() setId($id) pour la pp $id
 * 
 * Puis créez autant d'objets de type User que vous avez d'utilisateurs dans le tableau suivant :
 * 
 * 1. Hydrater créer un objet de type User
 * 
 *  dont l'id est 2 le nom est Bernard et l'age 34
 * 
 * Ajoutez un constructeur pour instancier plus rapidement votre classe.
 * 
 * 2. Puis généraliser l'hydratation à partir d'un tableau, créer les instances d'objets de type User 
 */

  $users = [
   [1,"Alan", 45], // new User
   [2,"Alice", 45], // new User
   [6,"Michel", 27], // new User
   [7,"Kevin", 30], // new User
 ];

 require_once __DIR__ . '/User.php';

 $user = new User(2, "Bernard", 34);
//  $user->setId(2);
//  $user->setAge(34);
//  $user->setName("Bernard");

foreach($users as [$id, $name, $age]){

    echo "id $id, name $name age $age";
    echo PHP_EOL;
    // crée les objets
    $objectUsers[] = new User(name: $name, age: $age, id: $id);
}

$objectUsers = [];
foreach($users as $u){

    echo $u[0], $u[1], $u[2];
    $objectUsers[] = new User(name: $u[1], age: $u[2], id: $u[0]);

    echo PHP_EOL;
}