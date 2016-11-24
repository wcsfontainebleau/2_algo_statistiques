<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Algo</title>

    </head>
    <body>
        <?php
        // put your code here

        require 'statistiques.php';
//        var_dump($statistiques);

        $nb_visites = 0;
        $mois = array(
            'janvier' => 0,
            'fevrier' => 0,
            'mars' => 0,
            'avril' => 0,
            'mai' => 0,
            'juin' => 0,
            'juillet' => 0,
            'aout' => 0,
            'septembre' => 0,
            'octobre' => 0,
            'novembre' => 0,
            'decembre' => 0            
        );

        // préparation tri par date
        foreach ($statistiques as $key => $row) {
            $date_tri[$key] = $row['date'];
        }

        // tri par date 
        array_multisort(SORT_ASC, $date_tri, $statistiques);


        foreach ($statistiques as $row) {

            if (intval($row['nb_visites_accueil']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_ged']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_agenda']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_annuaire']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_formation']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_emploi']) > 0)
                $nb_visites++;
            if (intval($row['nb_visites_dialogue']) > 0)
                $nb_visites++;
        }

        echo '[2016] => ' . $nb_visites . '<br>';
        
        ?>


    </body>
</html>
