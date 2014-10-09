<?php /* Smarty version Smarty-3.1.11, created on 2012-10-14 17:24:07
         compiled from ".\templates\sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113515021390b2d47e4-78280112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938b1a22f98f19d099007f8fb1c4c98ad29a90bc' => 
    array (
      0 => '.\\templates\\sales.tpl',
      1 => 1344531434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113515021390b2d47e4-78280112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5021390b6ebd10_75982133',
  'variables' => 
  array (
    'proses' => 0,
    'date' => 0,
    'dataproduct' => 0,
    'trx_id' => 0,
    'datasales' => 0,
    'subtota' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5021390b6ebd10_75982133')) {function content_5021390b6ebd10_75982133($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_transaction'){?>
	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Transaksi Penjualan</h1><span></span>
			</div>
			<form action="sales.php?module=act_add_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				
				<select name="product">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['name'] = 'dataproduct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataproduct']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total']);
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product'];?>
</option>
				<?php endfor; endif; ?>
				</select>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="1"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40">-</textarea></p>
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

<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_sales'){?>

	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['name'] = 'dataproduct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataproduct']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataproduct']['total']);
?>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Transaksi Penjualan</h1><span></span>
			</div>
			<form action="sales.php?module=act_update_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product'];?>
" disabled><input id="textfield" name="product_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product_id'];?>
">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['trx_id']->value;?>
">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['sales_price'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['sales_qty'];?>
">
					<input id="textfield" name="stock" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['stock'];?>
">
					<input id="textfield" name="sales_qty" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['sales_qty'];?>
">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['description'];?>
</textarea></p>
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
	<?php endfor; endif; ?>

<?php }else{ ?>
	<div class="grid_12">
		<h1>Transaksi Penjualan</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="?module=add_transaction">Tambah Transaksi</a>
	</ul>
	
	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1>Transaksi Hari Ini</h1><span></span>
				
			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Kategori</th>
							<th>Harga Satuan</th>
							<th>Qty</th>
							<th>Subtotal</th>
							<th>Untung</th>
							<th>Sisa Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['name'] = 'datasales';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datasales']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datasales']['total']);
?>
						<tr class="gradeX">
							<td width="10"><?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['no'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['category'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['sales_price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['sales_qty'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['subtotal'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['profit'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['sales_stock'];?>
</td>
							<td class="center">
								<a href="?module=update_sales&id=<?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['trx_id'];?>
&pro_id=<?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['product_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['product'];?>
"><img src="img/update.png"></a> &nbsp;
								<a href="?module=cancel_sales&id=<?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['trx_id'];?>
" onclick="return confirm('Anda yakin ingin membatalkan transaksi <?php echo $_smarty_tpl->tpl_vars['datasales']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasales']['index']]['product'];?>
?');"><img src="img/hapus.png"></a></td> 
						</tr>
						<?php endfor; endif; ?>
						<tr>
							<td colspan="3"></td>
							<td colspan="2"><b>Total Transaksi</b></td>
							<td><b>Rp. <?php echo $_smarty_tpl->tpl_vars['subtota']->value;?>
</b></td>
							<td><b>Rp. <?php echo $_smarty_tpl->tpl_vars['pro']->value;?>
</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php }?>
<?php }} ?>