# 08 Exercices add student

1. Créez une petite Web App  avec les composants suivants : App, Posts, Post et User, avec un routeur. Il n'y a qu'un auteur qui écrit les articles. Utilisez la même présentation pour toutes les pages.

2. Les articles sont cliquables et on affiche le détails d'un article.


Structures des données faites un json placez dans le composant Posts

```js

const posts = [
    { id: 1, title : "MongoDB", description : "blabla", text: "un texte plus long" },
    { id: 2, title : "MySQL", description : "blabla", text: "un texte plus long" },
    { id: 3,  title : "PHP", description : "blabla", text: "un texte plus long" },
    { id: 4,title : "Pyhton", description : "blabla", text: "un texte plus long" },
    { id: 5,title : "Docker", description : "blabla", text: "un texte plus long" },
];

```

Dans la page des articles chaque article, pour son url sera de la forme suivante, afin d'afficher un article spécifique.

```html
<router-link to="/post/{{id}}" >{{ title }} </router-link>
```


Contraintes : Vuejs, bootstrap.css, router Vuejs et structurez en composants à responsabilités uniques.


```txt
    App
     .
     .
   Posts User
     .
     .
    Post
```


```txt

[Home] [les articles] [qui-suis je]

--- 

affichez soit les derniers articles, soit les articles, soit un article, soit la page de l'auteur

```