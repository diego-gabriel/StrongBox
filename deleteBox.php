<?php
	require ('conection.php');
	session_start();
	$database = Database::getInstance();

	if (isset($_GET['id']) && isset($_SESSION['user']) && $database->isUserBoxes($_SESSION['user'], $_GET['id'])){
		$box_id = $_GET['id'];
		$database->deleteBox($box_id, $_SESSION['user']);
	}
	header('location: index.php');
?>