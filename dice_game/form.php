<?php
require_once "Dice.php";
// getting the number of dice set by user
$numberOfDice = $_POST["dice"] ?? null;
// getting the number of sides each Dice will have
$numberOfSides = $_POST["sides"] ?? 4;


//creating results array
$results = [];
//looping through the number of dices set by user 
//creating a new dice for each loop
// rolling the dice and pushing the result into 
// results array
for ($i = 1; $i <= $numberOfDice; $i++) {
    $dice = new Dice($numberOfSides);
    //function roll called with a parameter set by user
    $dice->roll();
    array_push($results, $dice);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Number of dice:
        <input type="number" name="dice">
        <br>
        Number of sides dices will have:
        <select name="sides" id="sides">
            <option value="4">4</option>
            <option value="6">6</option>
            <option value="10">10</option>
            <option value="20">20</option>
        </select>
        <br>
        <button type="submit">Roll</button>
    </form>
    You have rolled these numbers:
    <style>
        .container {
            display: flex;
            height: 35px;   
        }
        .dice {
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid 1px black;
            width: 4%;
            margin-right: 15px;
        }
    </style>
    <!-- creating a div with a class container for styling purpose -->
    <div class="container">
        <!-- looping through results array and creating a new div for each result -->
        <?php foreach($results as $dice): ?>  
            <?= $dice?>
        <?php endforeach;?>
    </div>
</body>
</html>