<?php

$geburtstag = "23.06.1996";
$birth_date = explode(".", $geburtstag);

$birth_year = $birth_date[2];
$birth_month = $birth_date[1];
$birth_day = $birth_date[0];
 
$current_date = explode(".",date("d.m.Y", time()));

$current_year = $current_date[2];
$current_month = $current_date[1];
$current_day = $current_date[0];



$age = (int)$current_year - (int)$birth_year;
if($current_month < $birth_month || $current_month == $birth_month && $current_day < $birth_day)
{
    $age = $age -1;
}


echo($age);
 ?>
