<?php
require 'statistiques.php';
require 'analyse_statistiques.php';

function tests($statistiques)
{
    $dates = [['year' => '2016'], ['year' => '2015'], ['year' => '2016', 'month' => '03'], ['year' => '2016', 'month' => '03', 'day' =>'01']];
    foreach ($dates as $date) {
        echo 'Date = '.toString($date).
            '<br>Res = '.toString(getStatsCountBy($statistiques, $date), $sep = '<br>');
        echo str_repeat("<br>", 3)."<hr>";
    }
}

function toString($variable, $sep = ', ') {
    if(is_array($variable)) {
        $res = [];
        foreach($variable as $key => $value)
            $res[] = strval($key)." => ".toString($value);
        return '[ '.implode($sep, $res).' ]';
    }
    return strval($variable);
}

tests($statistiques);