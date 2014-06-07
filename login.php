<?php
require ('conection.php');

if(isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$database = Database::getInstance();

	if($database->existUser($username) && $database->goodPassword($username, md5($password)))
	{
		session_start();
		$_SESSION['user'] = $username;
		header("Location: index.php");
	}
	else
	{
		header("Location: index.php?access=false");
	}
}

?>