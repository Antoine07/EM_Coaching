

-- 1 

SELECT * FROM pilots WHERE compagny= "AUS";

-- 2 on peut ajouter dans la projection des comandes cela crée une colonne en plus

SELECT `name` FROM pilots WHERE compagny= "FRE1" AND numFlying > 15;

SELECT `name` AS 'super Name', CURRENT_TIMESTAMP as "Date request" FROM pilots WHERE compagny= "FRE1" AND numFlying > 15;

-- 3 même requêtes mais dans la réponse on voudrait avoir une colonne bonus qui attribue à chaque pilote un bonus aléatoire supplémentaire

SELECT `name` AS 'super Name', FLOOR(RAND()*10 + 1) as "bonus" FROM pilots WHERE compagny= "FRE1" AND numFlying > 15;


-- 4

SELECT `name` FROM pilots WHERE compagny= "FRE1" AND numFlying > 20;

-- 5 

SELECT `name` FROM pilots WHERE (compagny= "FRE1" OR  compagny= "FRE2") AND numFlying > 20;

SELECT `name` FROM pilots WHERE compagny IN ("FRE2", "FRE1")  AND numFlying > 20;


-- 6 sélectionnez les pilotes de la compagnie FRE1 ou la compagnie FRE2 qui a fait plus de 20 h de vols.

SELECT `name` FROM pilots WHERE compagny= "FRE1" OR  (compagny= "FRE2" AND numFlying > 20);

-- meme chose en jouant sur le AND prioritaire par rapport au OR

SELECT `name` FROM pilots WHERE compagny= "FRE1" OR  compagny= "FRE2" AND numFlying > 20;

-- 7 valeurs entre

SELECT `name`, numFlying
FROM pilots
WHERE numFlying  BETWEEN 190 AND 200;

-- 8

SELECT `name` FROM pilots WHERE compagny IN ("AUS", "FRE1")  ;


-- 9 compagnie dont le nom contient un a et commence par un F

-- % = n'importe quel caractères
-- _ un caractère

-- Notez que MySQL est CI insensible à la casse les match se feront sur a ou A, f ou F, ... Que l'on mette une majuscule ou une minuscule dans la recherche.

SELECT `name`, compagny FROM pilots WHERE compagny LIKE '%a%';

SELECT `name`, compagny FROM pilots WHERE compagny LIKE 'f%';

-- 10 compagnie dont le nom contient un i suivi d'un caractère uniquement

SELECT `name`, compagny FROM pilots WHERE compagny LIKE '%i_'  ;


-- Comptez le nombre de pilots

SELECT COUNT(*) FROM pilots;


-- Comptez le nombre de pilots dans la compagnie AUS, puis FRE1

-- Faites la somme des heures de vol de l'ensemble des pilots SUM 

-- Heure de vols distincts utilisez DISTINCT 

-- Comptez le nombre de pilots

SELECT COUNT(*) FROM pilots;

-- Comptez le nombre de pilots dans la compagnie AUS, puis FRE1

SELECT COUNT(*) FROM pilots WHERE compagny= 'AUS';

SELECT COUNT(*) FROM pilots WHERE compagny= 'FRE1';

-- Faites la somme des heures de vol de l'ensemble des pilots SUM 

SELECT SUM (numFlying) FROM pilots;

-- Heure de vols distincts utilisez DISTINCT 

SELECT COUNT( DISTINCT numFlying )
FROM pilots;


-- Sélectionnez le nombre de pilote(s) par compagnie et par type d'avion.

SELECT COUNT(certificate) as count_pilots, compagny, plane 
FROM pilots
GROUP BY compagny, plane ;

-- -- Sélectionnez le noms des pilotes par bonus.
SELECT bonus, GROUP_CONCAT(name,'') as names 
FROM pilots GROUP BY bonus; 

-- Sélectionnez le noms et la compagnie des pilotes par bonus.
 SELECT bonus, GROUP_CONCAT(compagny,' ', name) 
 FROM pilots GROUP BY bonus; 


-- Faites la somme du nombre de jours de vols par compagnie dont la somme est supérieur à 30

 SELECT ROUND(SUM(numFlying) / 24, 1) as nb_h, compagny 
 FROM pilots GROUP BY compagny HAVING SUM(numFlying) / 24 > 30;

 -- Calculez l'étendue du nombre d'heure de vol par compagnie.

 SELECT MAX(numFlying) - MIN(numFlying) as `expense`, compagny
 FROM pilots
 GROUP BY compagny;

 -- Calculez la fréquence du nombre d'heures de vols de chaque pilotes

 SELECT name, ROUND( numFlying/(SELECT SUM(numFlying) FROM pilots), 2 ) * 100 as fq 
 FROM pilots;

/*
Faites la somme du nombre d'heures et utiliser cette somme dans le SELECT
    heure_pilote/somme des heures des pilotes
*/

 -- Calculez la fréquence du nombre d'heures de vols par compagnie


SELECT compagny, ROUND( SUM(numFlying)/(SELECT SUM(numFlying) FROM pilots), 2 ) * 100 as fqR
FROM pilots
GROUP BY compagny;

