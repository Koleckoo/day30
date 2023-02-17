<?php

require_once ('DB.php');
require_once ('model/Country.php');

DB::connect('localhost', 'world', 'root', '');

$name = $_GET["name"] ?? '';
$continent = $_GET["continent"] ?? '';
$population = $_GET["population"] ?? 0;

$query = "
SELECT * 
FROM `countries`
WHERE `name` LIKE ?
AND `continent` LIKE ?
AND `population` > ?
";
$queryParams = [];
array_push($queryParams, $name . '%', $continent . '%', $population);


$resultList = DB::select($query, $queryParams, Country::class);

// var_dump($resultList);
header('Content-type: application/json');
$myJson = json_encode($resultList);
echo $myJson;