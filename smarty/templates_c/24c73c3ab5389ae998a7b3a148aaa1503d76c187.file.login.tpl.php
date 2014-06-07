<?php /* Smarty version Smarty-3.1.18, created on 2014-06-03 23:35:58
         compiled from "smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626306230538c958b9bd3d1-47138827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24c73c3ab5389ae998a7b3a148aaa1503d76c187' => 
    array (
      0 => 'smarty/templates/login.tpl',
      1 => 1401830498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626306230538c958b9bd3d1-47138827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538c958bb17d64_51684066',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c958bb17d64_51684066')) {function content_538c958bb17d64_51684066($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
	<title>StrongBox-Login</title>
</head>
<body>
	<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
	<form action = "login.php" method = "POST">
		<label>Nombre de usuario:</label>
		<input required type = "text" name = "username"></input>
		<br>
		<label>Contraseña:</label>
		<input required type = "password" name = "password"></input>
		<br>
		<input type = "submit">
	</form>

	<p>Aun no tienes una cuenta? <a href="register.php">Registrate aqui!</a> </p>
</body>
</html><?php }} ?>
