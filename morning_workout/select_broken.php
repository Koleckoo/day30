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
";

$resultList = DB::select($query,[], Country::class);

header('Content-type: application/json');
echo json_encode($resultList);

