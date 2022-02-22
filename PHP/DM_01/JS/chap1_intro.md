# Introduction

Objectif de ce cours interactif :

- Découvrir JavaScript dans le contexte d'une page Web afin de présenter le DOM, les événements et quelques notions importantes du langage : définition de variables (première approche), boucle, type des données et gestion des chaînes de caractères.

On dit JS pour dire JavaScript. 

Pour nous, dans nos métiers Full-Stack, il sera utilisé dans les cas suivants :

- Pour gérer le rendu de page HTML.

- Pour développer des API (application programming interface), côtés serveurs avec NodeJS.

- Pour développer des applications front-end très techniques, avec React ou Angular par exemples, côté client.


## Présentation

Nous allons travailler avec le DOM. Document Object Model, c'est une interface de programmation, elle représente la structure HTML de votre page Web, JS nous permettra d'interagir avec lui (objet).

Le DOM est un arbre avec un élément racine : la balise html, elle a pour enfant : head, body. Nous travaillerons avec un objet spécifique : **document**. C'est le point d'entrée dans le contenu de votre page Web.

Avec JavaScript on peut 

- Modifier le contenu d'un élément spécifique du DOM.

- Modifier le style d'un élément HTML.

- Créer ou supprimer un élément HTML.

- écouter les changements d'état d'un élément HTML et déclencher en conséquence une action spécifique.

- ...Et plein d'autres choses.

Nous allons faire 3 exercices.

Si Git est installé sur votre machine, clonez le dépôt suivant dans le dossier de votre serveur Apache (localhost) :

```bash
git clone https://github.com/Antoine07/oclock-live-coding.git live
```

Vous devriez avoir un dossier **live** dans lequel vous trouverez l'ensemble des fichiers par dossier pour suivre chacun des exercices.


## Exercice 01 liste de nombres 

Ouvrez dans le dossier **projet_01_list_numbers_start** le fichier index.html avec VSCODE.

1. Utilisez **querySelectorAll**, méthode de l'interface **Document**, afin de sélectionner tous les éléments li du ul.numbers. Cette méthode permet de cibler des éléments du DOM à l'aide d'une règle CSS. 

Puis dans la partie script de la page index.html faites un console.log pour afficher ces éléments, vous devriez "voir" nos ul/li :

```js

let els = document.querySelectorAll(Votre_regles_css);
console.log(els)
```

Remarques : un **console.log** permet d'afficher un résultat dans l'inspecteur de votre navigateur. Faites un click droit sur votre navigateur puis *Inspecter* et enfin sélectionner *Console* dans la fenêtre de l'inspecteur.

2. En utilisant maintenant **querySelector**, qui permet de cibler un élément unique dans le DOM, et innerHTML qui permet de modifier le contenu d'un élément HTML, permutez les valeurs A, B et C. Attention chaque valeur se trouve dans un sous-élément span. N'utilisez pas de boucle pour l'instant pour répondre à cette question. Aidez-vous des remarques ci-après.

```txt
A = 3
B = 1
C = 2
```

*Remarques :* 

- Pour modifier la valeur du span :

```js
element.querySelector('span').innerHTML = 2
```

- Pour accéder à une valeur d'un array en JS utilisez la syntaxe suivante :

```js
let myArray = [1, 2, 3];

myArray[0]; // 1
myArray[1]; // 2
myArray[2]; // 3
```

3. Vous allez maintenant utiliser une boucle JS pour faire la même chose, permutez les valeurs A, B et C. Utilisez également la méthode length qui permet de calculer la longueur d'un tableau.

```js
// Boucles JS
for(let i = 0; i < 3; i++){
    console.log(i);
}

// Calculer la longueur d'un tableau
myArray.length
```

## Exercice 02 Créer un élément HTML

Commencez avec l'index.html dans le dossier **projet_02_create_start** dans VSCODE.

Nous allons maintenant créer des éléments dans le DOM. La méthode createElement permet de créer un élément HTML :

```js
let li = document.createElement('li');
```

Pour sélectionner un élément du DOM on peut également utiliser un **getElementById** qui cible un identifiant unique d'une balise :

```js
let container = document.getElementById('numbers');
```

Puis, avec la fonction **appendChild** on ajoute l'élément créé à l'élément sélectionné, il est créé et se placera à la suite des autres li :

```js
container.appendChild(li);
```

Créez 5 autres éléments à la suite des trois premiers (voir le fichier source pour commencer) en respectant l'ordre alphabétique et en incrémentant de +1 chacune des valeurs :

```txt
A=1
B=2
C=3
D=4   <-- créer les nouveaux éléments
E=5
F=6
G=7
H=8
```

## Exercice 03 nombre de caractères (écouter un événement)

Commencez avec l'index.html dans le dossier **projet_03_number_char_start**.

Nous allons créer un formulaire pour saisir une phrase, puis une fois que l'on aura cliqué sur le bouton "Calculer" nous afficherons le nombre de mot(s) saisi(s).

Utilisez le code suivant pour écouter les changements input de l'élément du formulaire :

```js
let elInput = document.querySelector('.phrase');

// une fonction de callback que l'on passera à addEventListener
function eventInput(event){
    let value = event.target.value;

    console.log(value);
}

// On écoute les changement des inputs
elInput.addEventListener('input', eventInput);
```

1. Affichez en temps réel le nombre de caractères dans l'élément HTML dont la classe est result.

2. Lorsqu'on clique sur Calculer affichez maintenant le nombre de mot(s) que l'on a saisi dans le champ texte. Utilisez le code source de l'exercice.

Si on a le temps ...

3. Gérez le cas où l'utilisateur saisit une chaîne de caractères vide et qu'il clique sur "Calculer". Affichez dans ce cas un message d'erreur.

4. L'utilisateur peut saisir des mots et introduire des espaces avant, après et entre les mots, ce qui fausse le calcul du nombre de mot(s). Trouvez une solution pour nettoyer la phrase saisie afin de compter le bon nombre de mot(s).

## Exercice 04 CRYPTO

Dans la partie COACH modifiez le script pour considérer le cryptage des lettres accentués.