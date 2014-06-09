<?php /* Smarty version Smarty-3.1.18, created on 2014-06-09 03:33:23
         compiled from "smarty/templates/showExtras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1589713575394d041a3c105-54016432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a493910a75c5e4e2eec4ec55a86b3003d5e87c2' => 
    array (
      0 => 'smarty/templates/showExtras.tpl',
      1 => 1402277592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589713575394d041a3c105-54016432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5394d041b19934_23707001',
  'variables' => 
  array (
    'extras' => 0,
    'flag' => 0,
    'number' => 0,
    'Value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5394d041b19934_23707001')) {function content_5394d041b19934_23707001($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["flag"] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars["number"] = new Smarty_variable(1, null, 0);?>
<?php if (empty($_smarty_tpl->tpl_vars['extras']->value)) {?>
	<p id = "noExtras">Usted no tiene extras.<p>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['extras']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	
		<?php  $_smarty_tpl->tpl_vars["Value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["Value"]->_loop = false;
 $_smarty_tpl->tpl_vars["Key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['extras']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["Value"]->key => $_smarty_tpl->tpl_vars["Value"]->value) {
$_smarty_tpl->tpl_vars["Value"]->_loop = true;
 $_smarty_tpl->tpl_vars["Key"]->value = $_smarty_tpl->tpl_vars["Value"]->key;
?>
			
			<?php if ((1 & $_smarty_tpl->tpl_vars['flag']->value)) {?>
			<div>
      			<label for = "title-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
">Titulo <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
:</label>	
      			<input required name = "title-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
" class = "extra" readonly type = "text" value = "<?php echo $_smarty_tpl->tpl_vars['Value']->value;?>
" id = "title-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"></input>
      		<?php } else { ?>
      			<label for = "value-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
">Valor <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
:</label>	
      			<input required name = "value-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
" class = "extra" readonly type = "text" value = "<?php echo $_smarty_tpl->tpl_vars['Value']->value;?>
" id = "value-<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"></input>
      		</div>
      		<?php }?>
      		<br>
      		<?php $_smarty_tpl->tpl_vars["flag"] = new Smarty_variable($_smarty_tpl->tpl_vars['flag']->value+1, null, 0);?>
		<?php } ?>
		<?php $_smarty_tpl->tpl_vars["number"] = new Smarty_variable($_smarty_tpl->tpl_vars['number']->value+1, null, 0);?>
	<?php endfor; endif; ?>
<?php }?><?php }} ?>
