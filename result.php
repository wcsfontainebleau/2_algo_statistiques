<?php

require "statistiques.php";

// $stat = array('id', 'id_user', 'date, nb_visites_accueil', 'nb_visites_agenda', 'nb_visites_annuaire', 'nb_visites_formation', 'nb_visites_emploi', 'nb_visites_dialogue');

function statAnnee($statistiques) {	
	foreach ($statistiques as $key_tab => $value) {
		foreach ($value as $key => $value) {
			$result = count($statistiques);
      		echo($result) . ' ';
		}
	}	
}

echo statAnnee($statistiques);


// Reflexion :
// if array_key_exists
// verifier value arrey_key > 1 	||	 incrémenter $value
// => value array_key = 1
// count value array_key
// return nb array_key

// recupérer par année et par an ensuite