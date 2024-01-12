<?php 
require_once("Movies.php");

$despicableMe = new Movies("Despicable Me", "10-settembre", "160 min", "comedy");
echo $despicableMe;

$tenet = new Movies("TENET", "11-settembre", "190 min", "action");
echo $tenet;


// array di oggetti
$matrix = [ $despicableMe, $tenet ];