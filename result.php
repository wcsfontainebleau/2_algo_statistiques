<?php

include('statistiques.php'); 

function Annee($statistiques){
	foreach ($statistiques as $nb_visites_accueil) {
		foreach ($nb_visites_accueil as $value) {
			$value = count($value);
		}
	}
	return ($value);
}
echo Annee($statistiques);