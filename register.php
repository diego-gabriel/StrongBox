<?php

require ('smarty/lib/Smarty.class.php');
$smarty = new Smarty();
$message = "";
if (isset($_GET['freeuser']) && $_GET['freeuser'] == "false")
	$message = 'El usuario que escogiste ya existe, por favor intenta con otro.';
$smarty->assign('message', $message);
$smarty->display("register.tpl");

?>