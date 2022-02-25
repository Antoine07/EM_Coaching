# Laravel exercices

## 01 Exercice

- Créez la liaison entre la table auhtors et books à l'aide d'un alter table au regard de du schéma UML fournit dans le cours. Pour définir un auteur qui sera le manager du livre

- Créez des auteurs manager à l'aide d'un seeder.

## 02 Exercice 

- Créez un troisième livre sur MongoDB puis associez ce livre à son genre. Terminez les associations de tous les livres créent.

## 02 Exercice faker

Créez un faker pour les auteurs à l'aide de la commande suivante 

```bash
php artisan make:factory AuthorFactory
```

Puis dans le seeder AuthorSeeder créez 10 auteurs. 

Indications : regardez dans la correction dans BookSeeder et BookFactory comment on a mis en place les factories pour ces entités.

Relancez les commandes habituelles 

```bash
php artisan migrate:refresh
php artisan db:seed
```

