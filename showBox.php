<?php
require ('smarty/lib/Smarty.class.php');
require ('conection.php');

	if(isset($_GET['id'])){
		session_start();
		$id = $_GET['id'];
		$database = Database::getInstance();
		if($database->isUserBoxes($_SESSION['user'], $id)){
			$fields = $database->getFields($id);
			$extras = $database->getExtras($id);
			$title = $fields['title'];
			$url =  $fields['url'];
			$password = $fields['password'];
			$username = $fields['username'];
			
			$smarty = new Smarty();
			$smarty->assign('extras', $extras);
			$smarty->assign('title', $title);
			$smarty->assign('url', $url);
			$smarty->assign('password', $password);
			$smarty->assign('username', $username);
			$smarty->display("showBox.tpl");
		}
		else
		{
			header("Location: index.php");
		}
	}
?>