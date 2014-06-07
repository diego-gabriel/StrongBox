<?php

require ('smarty/lib/Smarty.class.php');
require ('conection.php');
session_start();
$smarty = new Smarty();
if (isset($_SESSION['user'])){
	/*
	hacer cosas de index
	*/
	$database = Database::getInstance();
	$boxes = $database->allBox($_SESSION['user']);
	$smarty->assign('boxes', $boxes);
	$smarty->assign('user', $_SESSION['user']);
	$smarty->display("welcome.tpl");
}
else
{
	$message = "";
	if(isset($_GET['access']) && $_GET['access'] == "false")
	{
		$message = "Los datos son erroneos.";
	}

	$smarty->assign("message", $message);
	$smarty->display("login.tpl");
}

?>