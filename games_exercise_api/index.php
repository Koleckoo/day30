<?php
require_once "DB.php";


DB::connect(
    'localhost',
    'games',
    'root',
    ''
);

$orderBy = $_GET["orderby"] ?? null;
$way = $_GET['way'] ?? null;

if ($orderBy) {
    $games = DB::select("
    SELECT {$orderBy}
    FROM `games`
    WHERE 1
    ORDER BY {$orderBy} {$way}
    ");
    
} else {
    $games = DB::select("
    SELECT *
    FROM `games`
    WHERE 1
    ");
};

header('Content-type: application/json');
echo json_encode($games);