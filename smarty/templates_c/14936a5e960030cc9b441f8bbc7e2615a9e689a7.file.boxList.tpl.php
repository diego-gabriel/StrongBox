<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 22:40:51
         compiled from "smarty/templates/boxList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499546656539378d31129a0-18549530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14936a5e960030cc9b441f8bbc7e2615a9e689a7' => 
    array (
      0 => 'smarty/templates/boxList.tpl',
      1 => 1402173611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499546656539378d31129a0-18549530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boxes' => 0,
    'flag' => 0,
    'number' => 0,
    'Value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539378d31f4b65_53179406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539378d31f4b65_53179406')) {function content_539378d31f4b65_53179406($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['boxes']->value)) {?>
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
	<tbody>
		<tr>
	      <?php  $_smarty_tpl->tpl_vars["Value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["Value"]->_loop = false;
 $_smarty_tpl->tpl_vars["Key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['boxes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["Value"]->key => $_smarty_tpl->tpl_vars["Value"]->value) {
$_smarty_tpl->tpl_vars["Value"]->_loop = true;
 $_smarty_tpl->tpl_vars["Key"]->value = $_smarty_tpl->tpl_vars["Value"]->key;
?>
	      	<?php if ((1 & $_smarty_tpl->tpl_vars['flag']->value)) {?>
	      		<?php $_smarty_tpl->tpl_vars["number"] = new Smarty_variable($_smarty_tpl->tpl_vars['number']->value+1, null, 0);?>
	      		<td><a href="showBox.php?id=<?php echo $_smarty_tpl->tpl_vars['Value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</a></td>	
	      	<?php } else { ?>
	      		<td><?php echo $_smarty_tpl->tpl_vars['Value']->value;?>
</td>
	      	<?php }?>
	      	<?php $_smarty_tpl->tpl_vars["flag"] = new Smarty_variable($_smarty_tpl->tpl_vars['flag']->value+1, null, 0);?>
	      <?php } ?>
	  	</tr>
	</tbody>
	  <?php endfor; endif; ?>
	</table>
<?php }?><?php }} ?>
