<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 23:04:49
         compiled from "smarty/templates/showBox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4382901345393793f517a84-48798292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319a306bc252eaadfa5e1e2afbdece2cb7a63989' => 
    array (
      0 => 'smarty/templates/showBox.tpl',
      1 => 1402174271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4382901345393793f517a84-48798292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5393793f5f1167_32796822',
  'variables' => 
  array (
    'title' => 0,
    'url' => 0,
    'password' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5393793f5f1167_32796822')) {function content_5393793f5f1167_32796822($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
<title>StrongBox - Ver Box!</title>
<script type="text/javascript" src = "./smarty/templates/showBox.js"></script>
<script type="text/javascript" src = "scripts/updateBox.js"></script>
</head>
<body>

	<form action = "updateBox.php" method = "POST" id = "updateBoxForm">
		<label>Titulo:</label>
		<input readonly value = "<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></input>
		<br>

		<label>URL:</label>
		<input readonly value = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></input>
		<br>

		<label>Contraseña:</label>
		<input readonly id = "password" type = "password" value = "<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"></input>
		<input id = "change" type = "button" onclick = "togglePassword()" value = "Ver"></input>
		<br>
		<label>Nombre de usuario:</label>
		<input readonly value = "<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"></input>
		<br>
	</form>
		<button onclick = "enableModify()" id = "modifyButton">Modificar</button>
</body>
</html><?php }} ?>
