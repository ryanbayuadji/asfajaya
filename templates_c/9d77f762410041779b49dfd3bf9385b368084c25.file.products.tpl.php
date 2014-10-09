<?php /* Smarty version Smarty-3.1.11, created on 2012-10-14 09:22:26
         compiled from ".\templates\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30608501e90dda24f48-21512591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d77f762410041779b49dfd3bf9385b368084c25' => 
    array (
      0 => '.\\templates\\products.tpl',
      1 => 1348939768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30608501e90dda24f48-21512591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501e90ddb94cc0_67643530',
  'variables' => 
  array (
    'proses' => 0,
    'datacategory' => 0,
    'datasupplier' => 0,
    'dataupdate_product' => 0,
    'datacat' => 0,
    'catid' => 0,
    'datasup' => 0,
    'supid' => 0,
    'aktif1' => 0,
    'aktif2' => 0,
    'dataupdate_category' => 0,
    'dataproduct' => 0,
    'datauser' => 0,
    'priceomset' => 0,
    'modalomset' => 0,
    'pmomset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501e90ddb94cc0_67643530')) {function content_501e90ddb94cc0_67643530($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_product'){?>
	
	<div class="grid_12">
		<h1>Manajemen Product</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Produk</h1><span></span>
			</div>
			<form action="products.php?module=act_add_product" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Kategori</label>
					<select name="category">
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
						<option value="<?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datacategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacategory']['index']]['category'];?>
</option>
					<?php endfor; endif; ?>
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
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
						<option value="<?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasupplier']['index']]['supplier'];?>
</option>
					<?php endfor; endif; ?>
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Modal (P.O.)</label><input id="textfield" name="harga_po" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Paling Murah (P.M.)</label><input id="textfield" name="harga_pm" class="required" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Stok Produk</label><input id="textfield" name="stok" class="required" type="text"></p>
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

<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_product'){?>
	<div class="grid_12">
		<h1>Manajemen Product</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['name'] = 'dataupdate_product';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataupdate_product']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate_product']['total']);
?>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Produk</h1><span></span>
			</div>
			<form action="products.php?module=act_update_product" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<input id="textfield" name="productid" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['product_id'];?>
">
			
			<div class="_100">
				<p><label for="textfield">Kategori</label>
					<select name="category">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['name'] = 'datacat';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datacat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datacat']['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['datacat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacat']['index']]['category_id']==$_smarty_tpl->tpl_vars['catid']->value){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datacat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacat']['index']]['category_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['datacat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacat']['index']]['category'];?>
</option>
						<?php }else{ ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datacat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacat']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datacat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datacat']['index']]['category'];?>
</option>
						<?php }?>
					<?php endfor; endif; ?>
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['name'] = 'datasup';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datasup']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datasup']['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['datasup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasup']['index']]['supplier_id']==$_smarty_tpl->tpl_vars['supid']->value){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datasup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasup']['index']]['supplier_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['datasup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasup']['index']]['supplier'];?>
</option>
						<?php }else{ ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['datasup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasup']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasup']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datasup']['index']]['supplier'];?>
</option>
						<?php }?>
					<?php endfor; endif; ?>
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label><input id="textfield" name="nama" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['product'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['price'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Modal (P.O.)</label><input id="textfield" name="harga_po" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['po_price'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Paling Murah (P.M.)</label><input id="textfield" name="harga_pm" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['pm_price'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Stok Produk</label><input id="textfield" name="stok" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['stock'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['dataupdate_product']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate_product']['index']]['description'];?>
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
	<h1>Manajemen Product</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="?module=add_product">Tambah Produk</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Produk  |</h1><h1><a href="products_report.php" target="_blank">Download Produk</a></h1><span></span>
			
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
							<a href="?module=update_product&id=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product_id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['category_id'];?>
&supid=<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['supplier_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataproduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataproduct']['index']]['product'];?>
"><img src="img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id=<?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['employe_id'];?>
" onclick="return confirm('Anda yakin ingin menghapus user <?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['name'];?>
?');" disabled><img src="img/hapus.png"></a> --></td> 
					</tr>
					<?php endfor; endif; ?>
					<tr>
						<td colspan="4"></td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['priceomset']->value;?>
</td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['modalomset']->value;?>
</td>
						<td>Rp. <?php echo $_smarty_tpl->tpl_vars['pmomset']->value;?>
</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>