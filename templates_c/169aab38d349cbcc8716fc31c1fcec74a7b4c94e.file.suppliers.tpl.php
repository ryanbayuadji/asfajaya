<?php /* Smarty version Smarty-3.1.11, created on 2012-10-29 15:58:32
         compiled from ".\templates\suppliers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12274501e256dd0c1e8-72389325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169aab38d349cbcc8716fc31c1fcec74a7b4c94e' => 
    array (
      0 => '.\\templates\\suppliers.tpl',
      1 => 1344157360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12274501e256dd0c1e8-72389325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501e256de83835_17813236',
  'variables' => 
  array (
    'proses' => 0,
    'dataupdate_supplier' => 0,
    'aktif1' => 0,
    'aktif2' => 0,
    'datasupplier' => 0,
    'datauser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501e256de83835_17813236')) {function content_501e256de83835_17813236($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_supplier'){?>
	
	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Supplier</h1><span></span>
			</div>
			<form action="suppliers.php?module=act_add_supplier" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Supplier</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"></textarea></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"></textarea></p>
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

<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_supplier'){?>

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['name'] = 'dataupdate_supplier';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataupdate_supplier']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_supplier']['total']);
?>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Supplier</h1><span></span>
			</div>
			<form action="suppliers.php?module=act_update_supplier" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Supplier</label><input id="textfield" name="nama" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_supplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_supplier']['index']]['supplier'];?>
"><input id="textfield" name="supplier_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_supplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_supplier']['index']]['supplier_id'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['dataupdate_supplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_supplier']['index']]['address'];?>
</textarea></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_supplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_supplier']['index']]['phone'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['dataupdate_supplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_supplier']['index']]['description'];?>
</textarea></p>
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
	<h1>Manajemen Supplier</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="?module=add_supplier">Tambah Supplier</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Supplier</h1><span></span>
			
		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Supplier</th>
						<th>Address</th>
						<th>Active</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['name'] = 'datasupplier';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datasupplier']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupplier']['total']);
?>
					<tr class="gradeX">
						<td width="10"><?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['supplier'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['address'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['active'];?>
</td>
						<td class="center">
							<a href="?module=update_supplier&id=<?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['supplier_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['supplier'];?>
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