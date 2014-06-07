<?php /* Smarty version Smarty-3.1.18, created on 2014-05-30 00:26:58
         compiled from "smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10480087605387b2bba7fe96-11939206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b06d19c646272078c10cfc04a699bd60ab3df33' => 
    array (
      0 => 'smarty/templates/index.tpl',
      1 => 1401402414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10480087605387b2bba7fe96-11939206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5387b2bbc6b6b3_59706344',
  'variables' => 
  array (
    'you' => 0,
    'me' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387b2bbc6b6b3_59706344')) {function content_5387b2bbc6b6b3_59706344($_smarty_tpl) {?><html>
<head>
	<title>Smarty</title>
</head>
<body>
	<p>Te amo <?php echo $_smarty_tpl->tpl_vars['you']->value;?>
</p>

	<p> <i>Atte: <?php echo $_smarty_tpl->tpl_vars['me']->value;?>
</i> </p>
</body>
</html><?php }} ?>
