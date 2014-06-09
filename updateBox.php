<?php
	require ('conection.php');
	session_start();
	$database = Database::getInstance();
	
	if (isset($_GET['id']) && isset($_SESSION['user']) && isset($_POST['username']) && 
	$database->isUserBoxes($_SESSION['user'], $_GET['id'])){
		$box_id = $_GET['id'];
		$database->setBoxProperty($box_id, "title", $_POST['title']);
		$database->setBoxProperty($box_id, "password", $_POST['password']);
		$database->setBoxProperty($box_id, "username", $_POST['username']);
		$database->setBoxProperty($box_id, "url", $_POST['url']);

		$i = 1;
		$database->deleteAllExtras($box_id);
		
		while (isset($_POST["title-$i"])) {
			$database->createExtra($box_id, $_POST["title-$i"], $_POST["value-$i"]);
			$i++;
		}
		header("location: showBox.php?id=$box_id");

	}
	else
		header("location: index.php");
?>