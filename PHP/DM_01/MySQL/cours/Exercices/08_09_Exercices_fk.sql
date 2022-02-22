
ALTER TABLE pilots DROP FOREIGN KEY fk_pilots_compagny_compagnies;

UPDATE compagnies SET comp = 'CHO' WHERE comp = 'CHI' ;

-- 

UPDATE compagnies SET comp = 'CHI' WHERE comp = 'CHO' ;

-- CHANGE LA CLE

ALTER TABLE pilots ADD CONSTRAINT fk_pilots_compagny_compagnies FOREIGN KEY (compagny) REFERENCES compagnies(`comp`) ON DELETE SET NULL; 


-- Exercice mettre en application ce qui précède dans votre table puis supprimez la compagnie CHI dans la table compagnies et vérifiez que les pilots associés à cette compagnie n'ont pas été supprimés. Moralité avec la nouvelle contrainte on peut supprimer une compagnie ayant référence dans la table pilots alors qu'avant cela était impossible

DELETE FROM compagnies WHERE comp = 'CHI'; 

-- RemetteZ la compagnie CHI et remettre les pilots associés à CHI dans la table pilots qui ont été modifié.

/*

Exercice
Faire une sauvegarde des tables pilots et compagnies

Modifiez la clé FK pilots --> compagnies et ajoutez la contrainte on delete cascade
Supprimez la compagnie CHI et constatez que tous les pilots de la pilots référencés CHI sont supprimés

*/

-- avant de faire l'exercice on remet les données en place

INSERT INTO compagnies 
SET comp='CHI', status='draft', street='chine street', city='Pekin', name='CHINA Air', numStreet=19;

-- UPDATE avec IS NULL

UPDATE SET compagny='CHI' WHERE compagny IS NULL ;

-- sauvegarde ne sauvegarde pas les clés ...
CREATE TABLE `dump_pilots` (SELECT * FROM `pilots`);
CREATE TABLE `dump_compagnies` (SELECT * FROM `compagnies`);

INSERT INTO
pilots (
    `certificate`,
    `bonus`,
    `numFlying`,
    `compagny`,
    `name`,
    `plane`,
    `plane`,
    `created`,
    `birth_date`,
    `next_flight`,
    `num_jobs`
) SELECT * FROM `dump_pilots`;

INSERT INTO
compagnies (
    `comp`,
    `status`,
    `city`,
    `name`,
    `numStreet`
) SELECT * FROM `dump_compagnies`;

-- drop foreign key

-- on delete cascade très dangeureux => suppression en cascade
ALTER TABLE pilots 
ADD CONSTRAINT fk_pilots_compagny_compagnies 
FOREIGN KEY (compagny) REFERENCES compagnies(`comp`) ON DELETE CASCADE; 

-- Expérience de la cascade...Attention on va supprimer de l'information en cascade danger !

DELETE FROM compagnies WHERE comp = 'CHI';

-- on remet les données dans le sens suivant : 1 compagnies 2 pilots c'est pas possible dans l'autre sens ! On ne peut pas insérer des pilotes référencés sur une compagnie qui n'existe pas ...

INSERT INTO
compagnies (
    `comp`,
    `status`,
    `street`,
    `city`,
    `name`,
    `numStreet`
) SELECT * FROM `dump_compagnies` WHERE comp='CHI';

-- remet les données dans la table pilots

INSERT INTO
pilots (
    `certificate`,
    `bonus`,
    `numFlying`,
    `compagny`,
    `name`,
    `plane`,
    `created`,
    `birth_date`,
    `next_flight`,
    `num_jobs`
) SELECT * FROM `dump_pilots` WHERE compagny = 'CHI';