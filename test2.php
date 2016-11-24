<?php

require('statistiques.php');

function parAnnee($statistiques, $annee)
{

	$tab =[];
	$count = 0;
	for($i = 0; $i<count($statistiques); ++$i)
	{
		if(date_parse($statistiques[$i]['date'])['year'] == $annee)
		{
			$tab[$i] = true;
			$verifDay = date_parse($statistiques[$i]['date'])['day'];
			$id = strval($statistiques[$i]['id']);
			for($j = 0; $j<count($statistiques); ++$j)
			{
				if($j != $i && $statistiques[$j]['id'] == $id && date_parse($statistiques[$j]['date'])['day'] != $verifDay)
				{
					$tab[$j] = false;
				}
			}
		}
	}
	for($i = 0; $i<count($tab); $i++)
	{
		if($tab[$i] == true)
		$count++;
	}
	return $count." connexions en ".$annee;
}

function parMoisAnnee($statistiques, $annee, $mois)
{

	$tab =[];
	$count = 0;
	for($i = 0; $i<count($statistiques); ++$i)
	{
		if(date_parse($statistiques[$i]['date'])['year'] == $annee && date_parse($statistiques[$i]['date'])['month'] == $mois)
		{
			$tab[$i] = true;
			$verifDay = date_parse($statistiques[$i]['date'])['day'];
			$id = strval($statistiques[$i]['id']);
			for($j = 0; $j<count($statistiques); ++$j)
			{
				if($j != $i && $statistiques[$j]['id'] == $id && date_parse($statistiques[$j]['date'])['day'] != $verifDay)
				{
					$tab[$j] = false;
				}
			}
		}
	}
	foreach($tab as $value)
	{
		if($value == true)
			$count++;
	}
	return $count." connexions en ".$annee.'/'.$mois;
}

echo parAnnee($statistiques, 2016).'<br>';
echo parMoisAnnee($statistiques, 2016, 6);