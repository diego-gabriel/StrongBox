<?php
require ('smarty/lib/Smarty.class.php');
if (isset($_POST['username'])){
	require ('conection.php');
	session_start();
	$database = Database::getInstance();
	$user = $_POST['username'];
	$password = $_POST['password'];
	$title = $_POST['title'];
	$url = $_POST['url'];

	if ($title == "") $title = $url;
	
	$boxId = $database->createBox($user, $password, $title, $url, $_SESSION['user']);	
	if ($url == "" && $title == ""){
		$database->setBoxProperty($boxId, "title", "Box $boxId ".time());
	}	

	$i = 1;
	while (isset($_POST["title-$i"])){
		$database->createExtra($boxId, $_POST["title-$i"], $_POST["value-$i"]);
		$i++;
	}

	header("location: index.php");

}
else{
	$smarty = new Smarty();
	$smarty->display("createBox_form.tpl");
}
?>