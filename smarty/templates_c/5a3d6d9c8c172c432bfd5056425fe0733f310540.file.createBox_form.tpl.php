<?php /* Smarty version Smarty-3.1.18, created on 2014-06-09 03:49:32
         compiled from "smarty/templates/createBox_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295451217538fd6627b5355-60302315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a3d6d9c8c172c432bfd5056425fe0733f310540' => 
    array (
      0 => 'smarty/templates/createBox_form.tpl',
      1 => 1402278324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295451217538fd6627b5355-60302315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538fd66289e225_55575988',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fd66289e225_55575988')) {function content_538fd66289e225_55575988($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
	<title>StrongBox - Nuevo Box</title>
	<script type="text/javascript" src = "scripts/createBox.js"></script>
</head>
<body>
	<h4>Nuevo BOX</h4>
	<form action = "createBox.php" method = "POST" id = "boxForm">
		<label for = "title">Titulo:</label>
		<input type = "text" id = "title" name = "title">
		<br>
		<label for = "username">Nombre de usuario:</label>
		<input type = "text" required id = "username" name = "username">
		<br> 
		<label for = "password">Contraseña:</label>
		<input type = "password" required id = "password" name = "password">
		<br>
		<label for = "url">URL:</label>
		<input type = "url" id = "url" name = "url">
		<br>
		<button onclick = "newExtra()" type = "button">Añadir elemento</button>
		<input type = "submit">
	</form>
</body>
</html><?php }} ?>
