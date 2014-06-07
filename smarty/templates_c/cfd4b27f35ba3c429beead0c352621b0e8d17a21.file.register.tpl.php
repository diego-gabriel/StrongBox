<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 22:53:31
         compiled from "smarty/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815971255538cde46d56bc9-12292553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd4b27f35ba3c429beead0c352621b0e8d17a21' => 
    array (
      0 => 'smarty/templates/register.tpl',
      1 => 1401742337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815971255538cde46d56bc9-12292553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538cde46e1d2f0_81996244',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538cde46e1d2f0_81996244')) {function content_538cde46e1d2f0_81996244($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
	<title>StrongBox - Registro</title>
</head>
<body>
	<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
	<form action = "registerUser.php" method = "POST">
		<label for = "reg-username">Nombre de Usuario:
		</label>
		<input required type = "text" name = "username" placeholder = "usuario" id = "red-username"></input><br>

		<label for = "reg-password">Contraseña:
		</label>
		<input required type = "password" name = "password" placeholder = '*******' id = "reg-password"></input><br>
		<input type = "submit">

	</form>
</body>
</html><?php }} ?>
