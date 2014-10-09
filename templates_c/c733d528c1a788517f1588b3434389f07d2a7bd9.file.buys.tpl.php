<?php /* Smarty version Smarty-3.1.11, created on 2012-10-14 17:25:24
         compiled from ".\templates\buys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2569550228b1a6f9727-01395388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c733d528c1a788517f1588b3434389f07d2a7bd9' => 
    array (
      0 => '.\\templates\\buys.tpl',
      1 => 1344628112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2569550228b1a6f9727-01395388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50228b1a979d27_23706406',
  'variables' => 
  array (
    'proses' => 0,
    'date' => 0,
    'datasupp' => 0,
    'dataproduct' => 0,
    'databuys' => 0,
    'supp_id' => 0,
    'buys_qty' => 0,
    'subtota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50228b1a979d27_23706406')) {function content_50228b1a979d27_23706406($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_transaction'){?>
	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Transaksi Pembelian</h1><span></span>
			</div>
			<form action="buys.php?module=act_add_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
				
				<select name="supplier">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['name'] = 'datasupp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datasupp']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total']);
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier'];?>
</option>
				<?php endfor; endif; ?>
				</select>
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
				<p><label for="textfield">Harga Satuan Modal</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity Stock (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="1"></p>
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
	
<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_transaction'){?>
	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Transaksi Pembelian</h1><span></span>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['name'] = 'databuys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['databuys']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total']);
?>
			<form action="buys.php?module=act_update_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['buys_date'];?>
</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
				
				<select name="supplier">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['name'] = 'datasupp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datasupp']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datasupp']['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier_id']==$_smarty_tpl->tpl_vars['supp_id']->value){?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier'];?>
</option>
					<?php }else{ ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasupp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupp']['index']]['supplier'];?>
</option>
					<?php }?>
				<?php endfor; endif; ?>
				</select>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['product'];?>
" disabled>
				<input id="textfield" name="product_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['product_id'];?>
">
				<input id="textfield" name="buys_qty" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['buys_qty']->value;?>
">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['trx_id'];?>
">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Satuan Modal</label><input id="textfield" name="harga" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_price'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity Stock (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_qty'];?>
"></p>
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
			<?php endfor; endif; ?>
		</div>
	</div>

<?php }else{ ?>
	<div class="grid_12">
		<h1>Transaksi Pembelian Produk</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="?module=add_transaction">Tambah Transaksi</a>
	</ul>
	
	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1>Transaksi Pembelian Hari Ini</h1><span></span>
				
			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th width="200">Produk</th>
							<th width="130">Harga Satuan (Modal)</th>
							<th width="50">Qty</th>
							<th>Subtotal</th>
							<th>Stok Saat Ini</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['name'] = 'databuys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['databuys']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['databuys']['total']);
?>
						<tr class="gradeX">
							<td width="10"><?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['no'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['product'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_qty'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['subtotal'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['stock'];?>
</td>
							<td class="center">
								<a href="?module=update_buys&id=<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['trx_id'];?>
&buys_qty=<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_qty'];?>
&supp_id=<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['product'];?>
"><img src="img/update.png"></a> &nbsp;
								<a href="?module=cancel_buys&id=<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['trx_id'];?>
&buys_qty=<?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['supp_qty'];?>
" onclick="return confirm('Anda yakin ingin membatalkan transaksi <?php echo $_smarty_tpl->tpl_vars['databuys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['databuys']['index']]['product'];?>
?');"><img src="img/hapus.png"></a></td> 
						</tr>
						<?php endfor; endif; ?>
						<tr>
							<td colspan="4"><b>Total Transaksi</b></td>
							<td><b>Rp. <?php echo $_smarty_tpl->tpl_vars['subtota']->value;?>
</b></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php }?>
<?php }} ?>