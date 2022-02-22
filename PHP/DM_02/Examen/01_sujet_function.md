# Examen PHP Objet

Vous avez 3h pour réaliser les 2 exercices ci-dessous. Si vous avez terminé avant un troisième exercice est proposé et permettra d'obtenir des points supplémentaires.

Créez un dossier général avec votre nom_prenon_promo zippé. Placez l'ensemble des exercices dans ce dossier.

## 01 Exercice SearchStr

Créez les fonctions : **shuffleStr**, **countLetters** et **isLetter** dans un fichier unique app.php, dans un dossier **Str**. Voyez comment organiser le code ci-après avant de vous lancez dans le développement.

### Organisation du code

- fichier app.php, les fonctions demandées :

```php

// définitions des fonctions
function shuffleStr(string $str):string{
    // ...
}

echo shuffleStr("Bonjour tout le monde !");

// ...

function countLetters(string $str):int{
    // ...
}

echo countLetters("Bonjour tout le monde !"); 

// ...
```

### Fonctionnalités

Voyez les fonctionnalités à implémenter dans les commentaires ci-dessous :

```php
function shuffleStr(string $str):string{
    // mélange les caractères d'une phrase passée en 
    // paramètre et retourne celle-ci dans le script courant.
}

function countLetters(string $str){
    // Compte le nombre de caractères d'une phrase passée en paramètre
}

function isLetter(string $str, string $letter):int|bool{
    // cherche la position de la première lettre dans la chaîne 
    // et la retourne ou retourne false si elle n'est pas trouvée.
}

```

## 02 Exercice SearchTitanic

Dans cet exercice c'est à vous de donner le nom des fonctions à créer.

Créez un autre dossier **SearchTitanic** dans lequel vous créez un fichier app.php et deux fonctions (voyez plus bas).

Utilisez la source des données ci-dessous pour faire cet exercice. 

Source des données : [titanic](https://raw.githubusercontent.com/Antoine07/revision_js/main/PHP/Object/Data/titanic.csv)

Rappels pour lire un fichier.

```php
$file =  "./Data/titanic.csv" ;

 // Ouvre une ressource avec l'adresse du fichier en lecture seule.
$handle = fopen($file, "r");

while( $data = fgetcsv($handle, 1000, ",") ){
    // votre code ...
}
```

1. Créez une fonction qui compte le nombre de surviants (0 mort 1 vivant, voyez les données dans la source).

2. Créez une fonction qui compte le nombre de surviants ou morts selon le sex. Utilisez les paramètres de la fonction.

## (facultatif) 03 Exercice Conception

Créez également un dossier Conception et trois fichiers : app.php, Vinyle.php et Disque.php

Soit une platine de Vinyle et un disque. Créez deux fonctions et mettez en relations ces fonctions.

Indications : une platine "consomme" un disque ou si vous préférez on passe en paramètre un disque à une platine.
