<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dice Generator Web App</title>
</head>
<body>

<form action="" method="post">

    <label for="diceNumber">Number of Dice </label>
    <br>
    <input type="number" min="1" id="diceNumber" name="diceNumber">
    <br>


    <label for="dices">Choose Dice</label>
    <br>
    <select name="dices" id="dices">
        <option value="4">D4</option>
        <option selected="selected" value="6">D6</option>
        <option value="8">D8</option>
        <option value="10">D10</option>
        <option value="12">D12</option>
        <option value="20">D20</option>
    </select>
    <br><br>
    <input type="submit" value="Roll">

</form>

<?php

if(isset($_POST['dices'])) {
    for($i = 0; $i < $_POST['diceNumber']; $i++){
        echo 'Dice Number '. ($i+1) .': ';
        print_r(mt_rand(1, $_POST['dices']));
        echo '<br>';
    }
}


?>
</body>
</html>