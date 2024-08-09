<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>MY GUESSING GAME</h3>
    <form action = "TASK5_30_DAY_CHALENGE.php" method = "POST">
        <label>guess a number</label>
        <input type ="number" name = "guess">
        <button type = "submit" name = "submit" > click </button> 
    </form>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $rand =rand(1, 5);

    $guess = $_POST['guess'];
    


    if ($guess <1 || $guess>5 ){

        echo "invalid number ";

    }

    elseif($guess == $rand ){
        echo " you won ";
    }
    else  {
        echo "you loss";
    } 
}   
?>
