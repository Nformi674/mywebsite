<!-- start session in php -->
 <?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
margin-top: 160px;
margin-bottom: 160px;
margin-left: 160px;
margin-right: 160px;

    text-align: center;
 
}




h1{
    text-align: center;
    color: rgb(17, 36, 235);
}
form{
    
}

h3{
    background-color: lightblue;  
}

label{

    background-color: yellowgreen;     
}

button{background-color: yellowgreen;

}


    </style>
</head>
<body>
    <h3>MY GUESSING GAME</h3>
    <form action = "TASK.php" method = "POST">
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
        echo "you loss. the correct number is $rand";
    } 
}   
?>

<!-- //session implimentation -->
 <?PHP
 if(isset[])
 $_SESSION["$rand"]="";

 ?>