<?php /* Smarty version Smarty-3.1.18, created on 2014-06-09 03:46:14
         compiled from "smarty/templates/showBox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4382901345393793f517a84-48798292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319a306bc252eaadfa5e1e2afbdece2cb7a63989' => 
    array (
      0 => 'smarty/templates/showBox.tpl',
      1 => 1402278372,
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
    'box_id' => 0,
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
<script type="text/javascript" src = "scripts/showBox.js"></script>
<script type="text/javascript" src = "scripts/updateBox.js"></script>
<script type="text/javascript" src = "scripts/createBox.js"></script>
</head>
<body>

	<form action = "updateBox.php?id=<?php echo $_smarty_tpl->tpl_vars['box_id']->value;?>
" method = "POST" id = "boxForm">
		<label for = "title">Titulo:</label>
		<input readonly value = "<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" name = "title" id = "title"></input>
		<br>

		<label for = "url">URL:</label>
		<input readonly value = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name = "url" id = "url"></input>
		<br>

		<label for = "password">Contraseña:</label>
		<input readonly required id = "password" type = "password" value = "<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" name = "password" id = "password"></input>
		<input id = "change" type = "button" onclick = "togglePassword()" value = "Ver"></input>
		<br>
		<label for = "username">Nombre de usuario:</label>
		<input readonly required value = "<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name = "username" id = "username"></input>
		<br>
		<?php echo $_smarty_tpl->getSubTemplate ("showExtras.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<br>
	</form>
	<button onclick = "enableModify()" id = "modifyButton" type = "button">Modificar</button>
	<button><a href="deleteBox.php?id=<?php echo $_smarty_tpl->tpl_vars['box_id']->value;?>
">Eliminar Box</a></button>

</body>
</html><?php }} ?>
