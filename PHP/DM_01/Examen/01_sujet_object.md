# Examen PHP Objet

Vous avez 3h pour réaliser les 2 exercices ci-dessous. Si vous avez terminé avant un troisième exercice est proposé et permettra d'obtenir des points supplémentaires.

Créez un dossier général avec votre nom_prenon_promo zippé. Placez l'ensemble des exercices dans ce dossier.

## 01 Exercice SearchStr

Créez une classe **SearchStr** dans un fichier unique, dans un dossier SearchStr. Voyez comment organiser le code ci-après avant de vous lancez dans le développement.

### Organisation du code

- Créez un fichier app.php dans lequel vous importez la classe SearchStr.php pour tester votre code.

- Créez un fichier SearchStr.php pour votre classe métier.

```php
require_once __DIR__ . '/SearchStr.php';

$search = new SearchStr("Bonjour tout le monde !");

// ...
```

### Fonctionnalités

La classe SearchStr aura les fonctionnalités suivantes (méthodes), voyez les commentaires dans le code d'exemple ci-dessous pour comprendre ce que vous devez écrire dans celle-ci :

```php

$search = new SearchStr("Bonjour tout le monde !");

/** Compte le nombre de mots dans la phrase passée à la classe
*/
sentence();

/** Ne retourne rien,
 *  inverse la phrase passée à la classe (constructeur).
 */
reverse();

// Affiche la phrase, inversée ou pas.
echo $search;
```

## 02 Exercice SearchTitanic

Créez un autre dossier SearchTitanic dans lequel vous créez deux fichiers app.php et SearchTitanic.php. Organisez le code comme dans l'exercice précédent.

En utilisant l'exemple ci-dessous, comptez le nombre de femmes de moins de 20 qui ont survécu sur le Titanic. Affichez leur âge et leur classe.

Vous récupérez les données dans le dossier Data, sur notre dépôt de travail, que vous placerez dans le dossier de l'exercice.

Source des données : [titanic](https://raw.githubusercontent.com/Antoine07/revision_js/main/PHP/Object/Data/titanic.csv)

```php
$file =  "./Data/titanic.csv" ;

 // Ouvre une ressource avec l'adresse du fichier en lecture seule.
$handle = fopen($file, "r");

while( $data = fgetcsv($handle, 1000, ",") ){
    // votre code ...
}
```

## (facultatif) 03 Exercice Conception

Créez également un dossier Conception et trois fichiers : app.php, Vinyle.php et Platine.php

Soit une platine de Vinyle et un disque. Créez deux classes et mettez en relations ces deux classes, comme dans l'exercice Lamp.php vu en cours.
