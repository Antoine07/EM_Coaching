# Cart

Vous avez à développer un panier pour que dans l'application on est un "système" permettant de gérer les commandes de produits dans un panier.

1. Recherchez toutes le(s)/la responsabilité(s), classe(s), qui vous semble nécessaire(s) à implémenter dans le projet. Faites un dessin, diagramme de classe(s), pour representer ces responsabilités.

```php
/**
 * Responsabilité : commander et calculer le prix des produits
 * */
class Cart{

}

/**
 * Responsabilité : permet de définir un produit
 * */
class Product{

}

/**
 * Responsabilité : faire persister les totaux des produits commandés key => value
 * */
class Storage{

    public function setValue(string $name, float $total){
        // dans une base de données ou session
    }
}
```

2. Imaginez comment ces trois classes travaillent ensemble. Faites un dessin.