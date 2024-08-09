<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Calculator.php" method="POST">
<label>Enter The First Number</label><br>
<input type="number " name="number1">


    <select  type="select" name="operation"><br>
    <option value=" ">None</option>
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
    </select><br>

    <label>Enter The Second Number</label><br>
    <input type="number" name="number2">
   
    <input type="submit" name="submit" value="Submit">

</form>
<?php

if($_SERVER["REQUEST_METHOD" ] == 'POST'){

    if(isset($_POST["submit"])){

$number1 = $_POST["number1"];
$number2 = $_POST['number2'];
$operator = $_POST['operation'];

switch($operator) {
    case 'add':
        echo $number1 + $number2;
        break;
    case'sub':
        echo $number1 - $number2;
        break;
    case'mul':
        echo $number1 * $number2;
        break;
    case 'div':
        if($number2!=0){
            echo $number1 / $number2;
        } else {
            echo "Syntax Error";
        }
        break;

        default :
        echo "Invalid CHARACTER";
        break;
}
}
}
?>
</body>
</html>