<?php /* Smarty version Smarty-3.1.11, created on 2012-10-14 09:22:22
         compiled from ".\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29985501c9cd117fb64-01415848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2b524f65c2ea7ddf3e1c7ae4f51406fb191bee' => 
    array (
      0 => '.\\templates\\content.tpl',
      1 => 1344758546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29985501c9cd117fb64-01415848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501c9cd119d207_92995175',
  'variables' => 
  array (
    'content' => 0,
    'name' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501c9cd119d207_92995175')) {function content_501c9cd119d207_92995175($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['content']->value=='users'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='suppliers'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("suppliers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='categories'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='merks'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("merks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='products'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='sales'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("sales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='buys'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("buys.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='searchs'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("searchs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_smarty_tpl->tpl_vars['content']->value=='reports'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("reports.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<?php }else{ ?>
	Hai, <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b>.<br>
	Selamat datang di Aplikasi Point of Sales ASFA Jaya, sebuah aplikasi yang dapat membantu anda untuk mengerjakan transaksi
	secara cepat dan mudah.<br>
	Saat ini, Anda login sebagai <?php echo $_smarty_tpl->tpl_vars['level']->value;?>

	<br><br>
	Persembahan dari ASFA Solution, best solution for your business<br>
	Website: <a href="http://www.agussaputra.com" target="_blank">http://www.agussaputra.com</a>
<?php }?><?php }} ?>