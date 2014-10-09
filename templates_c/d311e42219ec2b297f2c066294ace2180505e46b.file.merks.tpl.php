<?php /* Smarty version Smarty-3.1.11, created on 2012-08-05 17:16:03
         compiled from ".\templates\merks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22735501e8df6ad9239-22519151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd311e42219ec2b297f2c066294ace2180505e46b' => 
    array (
      0 => '.\\templates\\merks.tpl',
      1 => 1344179749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22735501e8df6ad9239-22519151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501e8df6bca6f7_34658869',
  'variables' => 
  array (
    'proses' => 0,
    'dataupdate_category' => 0,
    'aktif1' => 0,
    'aktif2' => 0,
    'datamerk' => 0,
    'datauser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501e8df6bca6f7_34658869')) {function content_501e8df6bca6f7_34658869($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_merk'){?>
	
	<div class="grid_12">
		<h1>Manajemen Merk</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Merk</h1><span></span>
			</div>
			<form action="merks.php?module=act_add_merk" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Merk</label><input id="textfield" name="nama" class="required" type="text"></p>
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
	<h1>Manajemen Merk</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="?module=add_merk">Tambah Merk</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Merk</h1><span></span>
			
		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Merk</th>
						<th>Aktif</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['name'] = 'datamerk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datamerk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datamerk']['total']);
?>
					<tr class="gradeX">
						<td width="10"><?php echo $_smarty_tpl->tpl_vars['datamerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datamerk']['index']]['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datamerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datamerk']['index']]['merk'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datamerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datamerk']['index']]['active'];?>
</td>
						<td class="center">
							<a href="?module=update_merk&id=<?php echo $_smarty_tpl->tpl_vars['datamerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datamerk']['index']]['merk_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datamerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datamerk']['index']]['merk'];?>
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