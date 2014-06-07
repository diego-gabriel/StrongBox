<?php
require ('conection.php');

if (isset($_POST['username']) && $_POST['password']){
	$database = Database::getInstance();
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!$database->existUser($username)){
		$database->createUser($username, md5($password));
	}
	else{
		header("location: register.php?freeuser=false");
	}
}	
else
header("location: index.php");

?>