<?php /* Smarty version Smarty-3.1.11, created on 2012-10-16 17:51:24
         compiled from ".\templates\searchs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2347450261040280317-90622550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6459286bb011dbd907a4f9536b8d25efd9425f87' => 
    array (
      0 => '.\\templates\\searchs.tpl',
      1 => 1344672820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2347450261040280317-90622550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50261040399571_71767406',
  'variables' => 
  array (
    'dataproduct' => 0,
    'datauser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50261040399571_71767406')) {function content_50261040399571_71767406($_smarty_tpl) {?><div class="grid_12">
	<h1>Manajemen Product</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="products.php?module=add_product">Tambah Produk</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Hasil Pencarian:</h1><span></span>
			
		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Kategori</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Modal</th>
						<th>Harga Paling Murah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
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
					<tr class="gradeX">
						<td width="10"><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['category'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['stock'];?>
</td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['price'];?>
</td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['po_price'];?>
</td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['pm_price'];?>
</td>
						<td class="center">
							<a href="products.php?module=update_product&id=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product_id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['category_id'];?>
&supid=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['supplier_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product'];?>
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
</div><?php }} ?>