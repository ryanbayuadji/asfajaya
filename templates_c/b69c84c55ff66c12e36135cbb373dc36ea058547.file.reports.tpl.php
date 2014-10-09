<?php /* Smarty version Smarty-3.1.11, created on 2012-10-14 09:22:31
         compiled from ".\templates\reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22772502761cbab9141-02350076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69c84c55ff66c12e36135cbb373dc36ea058547' => 
    array (
      0 => '.\\templates\\reports.tpl',
      1 => 1344766714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22772502761cbab9141-02350076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502761cbb81334_76231586',
  'variables' => 
  array (
    'proses' => 0,
    'start_date' => 0,
    'end_date' => 0,
    'datareport' => 0,
    'subtota' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502761cbb81334_76231586')) {function content_502761cbb81334_76231586($_smarty_tpl) {?><div class="grid_12">
	<h1>Laporan Penjualan</h1>
	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
</div>
	
<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
</ul>

<div class="grid_6">
	<div class="block-border">
		<div class="block-header">
			<h1>Pilih Periode Laporan</h1><span></span>
		</div>
		<form action="reports.php?module=act_reports" method="post" class="block-content form"> <!-- id="validate-form"  -->
		
		<div class="_50">
			<p><label for="datepicker">Pilih Tanggal Awal</label><input id="datepicker_awal" name="periode_awal" class="required" type="text" value="" /></p>
		</div>
		
		<div class="_50">
			<p><label>Pilih Tanggal Akhir</label><input id="datepicker_akhir" name="periode_akhir" class="required" type="text" value="" /></p>
		</div>
		<p>&nbsp;</p>
		<div class="clear"></div>
			<div class="block-actions">
				<ul class="actions-left">
					<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
				</ul>
				<ul class="actions-right">
					<li><input type="submit" class="button" value="Tampilkan Transaksi"></li>
				</ul>
			</div>
		</form>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['proses']->value=='report'){?>
<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1><a href="downloads.php?start_date=<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
&end_date=<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
" target="_blank">Download Transaksi</a></h1><span></span>
			</div>
			<div class="block-header">
				<h1>Transaksi Hari Ini</h1><span></span>
			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th width="80">Tanggal</th>
							<th width="140">Produk</th>
							<th width="130">Kategori</th>
							<th>Harga Satuan</th>
							<th width="18">Qty</th>
							<th>Subtotal</th>
							<th>Untung</th>
							<th width="20">Sisa Stok</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['name'] = 'datareport';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datareport']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datareport']['total']);
?>
						<tr class="gradeX">
							<td width="10"><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['no'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['sales_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['category'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['sales_price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['sales_qty'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['subtotal'];?>
</td>
							<td>Rp. <?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['profit'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['datareport']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datareport']['index']]['sales_stock'];?>
</td> 
						</tr>
						<?php endfor; endif; ?>
						<tr>
							<td colspan="4"></td>
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