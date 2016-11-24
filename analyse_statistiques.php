<?php


/*
    Par année tout utilisateur confondu
    Par mois et par année tout utilisateur confondu
*/

function getStatsCountBy($statistiques, $date=null) {
    //$date = date_parse($date);
    $res = 0;
    foreach ($statistiques as $stat) {
        $stat_date = date_parse($stat['date']);
        $res += dateMatch($date, $stat_date);
    }
    return $res;
}

function getStatsBy($statistiques, $date=null) {
    //$date = date_parse($date);
    $res = [];
    foreach ($statistiques as $stat) {
        $stat_date = date_parse($stat['date']);
        if (dateMatch($date, $stat_date))
            $res[] = $stat;
    }
    return $res;
}


function dateMatch($date, $date2) {
    foreach(['year', 'month', 'day', 'hour'] as $key) {
        if (!isset($date[$key]))
            return true;
        if (!isset($date2[$key]) || $date[$key] != $date2[$key])
            return false;
    }
    return true;
}