<?php /* Smarty version Smarty-3.1.18, created on 2014-06-06 15:37:46
         compiled from "smarty/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557293829538e42ed5b3ae0-16512098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41aaa01d28e1182a32e6383da6e61da782141ea9' => 
    array (
      0 => 'smarty/templates/welcome.tpl',
      1 => 1402061768,
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
    'boxes' => 0,
    'Value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e42ed64fce1_58076013')) {function content_538e42ed64fce1_58076013($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
<title>StrongBox - Bienvenido!</title>
</head>
<body>
<h4>Hola <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
! Bienvenido a tu StrongBox.</h4>
<?php if (empty($_smarty_tpl->tpl_vars['boxes']->value)) {?>
	<p>Usted no tiene boxes.<p>
<?php } else { ?>
	<table>
	<tr>
	  <th>Numero</th>
	  <th>Titulo</th>		
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['boxes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
		<tr>
	      <?php  $_smarty_tpl->tpl_vars["Value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["Value"]->_loop = false;
 $_smarty_tpl->tpl_vars["Key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['boxes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["Value"]->key => $_smarty_tpl->tpl_vars["Value"]->value) {
$_smarty_tpl->tpl_vars["Value"]->_loop = true;
 $_smarty_tpl->tpl_vars["Key"]->value = $_smarty_tpl->tpl_vars["Value"]->key;
?>
	      	<td><?php echo $_smarty_tpl->tpl_vars['Value']->value;?>
<td>
	      <?php } ?>
	  </tr>
	  <?php endfor; endif; ?>
	</table>
<?php }?>
<a href="closeSession.php">Cerrar Sesion</a>
<a href="createBox.php">Crear Box</a>
<a href="deleteBox.php">Eliminar Box</a>
</body>
</html><?php }} ?>
