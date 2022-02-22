<?php

// si il y a une erreur on récupère celle-ci dans le catch
try {

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $dbh = new PDO('mysql:host=localhost;dbname=db_aviation', 'root', 'root', $options);
} catch (PDOException $e) {
    // Si une erreure
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

print_r($dbh);
$stmt = $dbh->query('SELECT * from pilots');

// while ($row = $stmt->fetch()) {
//     print_r($row);
// }

// fetch c'est la vie ! pas d'empreinte mémoire importante dépile 1 à 1
// fetchAll c'est big fat ... dur de se lever car grosse empreinte mémoire possible récupère tout 

/**
 * Exercice faire la somme des heures des vols de chaque pilots
 * 
 */

$stmt = $dbh->query("SELECT SUM(numFlying) as sum_numFlying FROM pilots");
print_r($stmt->fetch(PDO::FETCH_ASSOC)['sum_numFlying']);

echo PHP_EOL ;

$stmt = $dbh->query("SELECT numFlying FROM pilots");

$sum = 0;
while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $sum += $row['numFlying'];
}

print_r( $sum);
echo PHP_EOL ;

// Contre les injections 

// INJECTION SQL => attaque pour supprimer les données de la table pilots
$bonus = "; DELETE pilots;";
$query = "SELECT name FROM pilots WHERE bonus > $bonus";

print_r($query);

$query = "SELECT bonus FROM pilots WHERE bonus > :bonus";
$stmt = $dbh->prepare($query); // compilée => non MODIFIABLE <=> protégé
$stmt->execute([':bonus' => 400 ]);

// 1 prepare crée un exécutable donc plus rapide
// 2 prepare compile la requête donc elle n'est plus modifiable donc sécurisante contre les injections
echo PHP_EOL ;
// affichez les bonus ici 
$sum = 0;
while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $sum += $row['bonus'];
}

print_r($sum);
echo PHP_EOL ;

/**
 * 02 Exercice 
 * Faites une requête permettant de récupérer le nombre d'heure de vols du pilot Alan
 */
