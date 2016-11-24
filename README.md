# README

## Objectif:

Ci joint un tableau de statistiques.  
Faire ressortir le nombre de connexion:  

1. Par année tout utilisateur confondu  
2. Par mois et par année tout utilisateur confondu  

Si un user se connecte plusieurs fois par jour, on ne comptabilisera qu'une seule connexion.  

### Exemple de retour:
1. Par année  
```
[2016] => 78  
```

2. Par mois et par année:
```
[2016-03] => 23 (Mars 2016, 23 connexion)
[2016-04] => 10	(Avril 2016, 10 connexion)
[2016-05] => 23 (Mai 2016, 23 connexion)
[2016-06] => 22 (Juin 2016, 6 connexion)
```

## Help (Les fonctions si dessous sont des propositions)
[Boucle **for**](http://php.net/manual/fr/control-structures.for.php)  
[Boucle **foreach**](http://php.net/manual/fr/control-structures.foreach.php)
[Fonction **count**](http://php.net/manual/fr/function.count.php)
[Fonction **substr**](http://php.net/manual/fr/function.substr.php)
[Fonction **date-parse**](http://php.net/manual/fr/function.date-parse.php)
[Fonction **array-key-exists**](http://php.net/manual/fr/function.array-key-exists.php)
[Mémo PHP](https://docs.google.com/document/d/1BnLRqMVgebwGzkSgxrnDgpMfJbH8w7xmOfQC0nMJ7Fs/edit)


