<?php /* Smarty version Smarty-3.1.11, created on 2012-08-05 17:13:04
         compiled from ".\templates\merk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23465501e8d80093863-09965645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e19e7d2e401a7a919f0d5efc8ca9c86cba5e014' => 
    array (
      0 => '.\\templates\\merk.tpl',
      1 => 1344179478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23465501e8d80093863-09965645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'proses' => 0,
    'dataupdate_category' => 0,
    'aktif1' => 0,
    'aktif2' => 0,
    'datacategory' => 0,
    'datauser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501e8d8015e651_71945167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501e8d8015e651_71945167')) {function content_501e8d8015e651_71945167($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_merk'){?>
	
	<div class="grid_12">
		<h1>Manajemen Category</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Kategori</h1><span></span>
			</div>
			<form action="categories.php?module=act_add_category" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Kategori</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>
			
			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" checked> Y</label>
					<label><input type="radio" name="aktif" value="N"> N</label>
				</p>
			</div>
			
			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Simpan"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>

<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_category'){?>

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['name'] = 'dataupdate_category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataupdate_category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_category']['total']);
?>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Supplier</h1><span></span>
			</div>
			<form action="categories.php?module=act_update_category" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Category</label>
					<input id="textfield" name="nama" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_category']['index']]['category'];?>
">
					<input id="textfield" name="category_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_category']['index']]['category_id'];?>
"></p>
			</div>
			
			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" <?php echo $_smarty_tpl->tpl_vars['aktif1']->value;?>
> Y</label>
					<label><input type="radio" name="aktif" value="N" <?php echo $_smarty_tpl->tpl_vars['aktif2']->value;?>
> N</label>
				</p>
			</div>
			
			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Update"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	<?php endfor; endif; ?>
	
<?php }else{ ?>



<div class="grid_12">
	<h1>Manajemen Kategori</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="?module=add_category">Tambah Kategori</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Kategori</h1><span></span>
			
		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Aktif</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['name'] = 'datacategory';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datacategory']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datacategory']['total']);
?>
					<tr class="gradeX">
						<td width="10"><?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['category'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['active'];?>
</td>
						<td class="center">
							<a href="?module=update_category&id=<?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['category_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['category'];?>
"><img src="img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id=<?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['employe_id'];?>
" onclick="return confirm('Anda yakin ingin menghapus user <?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['name'];?>
?');" disabled><img src="img/hapus.png"></a> --></td> 
					</tr>
					<?php endfor; endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>