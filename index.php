<?php
session_start(); 
require_once 'function.php';
ischeck();

if($_SERVER['REQUEST_METHOD']==='post'){
	$action=$_POST['action'];

	switch($action){
		case'add':
		$task= $_POST['task'];
		if (ADD($task)){
			$success="successfully add add a task";

		}
		else{
			$error="error adding task";

		}
		break;
		default:
		$error= "undefine";
		break;

	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>TODO LIST</h1>

<?Php
if(isset($sucess)){
	echo'<font color= "green">'.$succes.'</font>';
}
else
	if(isset($error)){
		echo'<font color="red">'.$error.'<font>';
	}
?>
<form method="POST">
<input type="text" name="task"placeholder= "write your text">
<button type ="submit ">add </button>
<input type="hidden" name ="action" value="add"> 

</form>
</body>
</html>