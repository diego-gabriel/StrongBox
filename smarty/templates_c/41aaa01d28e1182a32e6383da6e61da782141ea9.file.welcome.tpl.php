<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 22:40:51
         compiled from "smarty/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557293829538e42ed5b3ae0-16512098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41aaa01d28e1182a32e6383da6e61da782141ea9' => 
    array (
      0 => 'smarty/templates/welcome.tpl',
      1 => 1402173611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557293829538e42ed5b3ae0-16512098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538e42ed64fce1_58076013',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e42ed64fce1_58076013')) {function content_538e42ed64fce1_58076013($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
<title>StrongBox - Bienvenido!</title>
</head>
<body>
<h2>Hola <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
! Bienvenido a tu StrongBox.</h2>
<?php echo $_smarty_tpl->getSubTemplate ("boxList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<a href="closeSession.php">Cerrar Sesion</a>
<a href="createBox.php">Crear Box</a>
<a href="deleteBox.php">Eliminar Box</a>
</body>
</html><?php }} ?>
