<?php

    $unixnumber = strtotime('now') - strtotime('03:00 25 january 1999');

    $years = $unixnumber / 31556926;
    $months = $unixnumber / 2629743;
    $weeks = $unixnumber / 604800;
    $days = $unixnumber / 86400;
    $hours = $unixnumber / 3600;
    $minutes = $unixnumber / 60;
    $seconds = $unixnumber;

    echo /*(int)*/$years + " years";
    echo /*(int)*/$months + " months";
    echo /*(int)*/$weeks + " weeks";
    echo /*(int)*/$days + " days";
    echo /*(int)*/$hours + " hours";
    echo /*(int)*/$minutes + " minutes";
    echo /*(int)*/$seconds + " seconds";

?>