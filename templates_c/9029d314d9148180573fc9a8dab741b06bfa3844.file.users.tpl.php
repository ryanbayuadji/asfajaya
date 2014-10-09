<?php /* Smarty version Smarty-3.1.11, created on 2012-11-10 18:55:40
         compiled from ".\templates\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31355501cc073433181-92026069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9029d314d9148180573fc9a8dab741b06bfa3844' => 
    array (
      0 => '.\\templates\\users.tpl',
      1 => 1345197766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31355501cc073433181-92026069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501cc073447459_32425786',
  'variables' => 
  array (
    'proses' => 0,
    'nikdate' => 0,
    'dataupdate' => 0,
    'level1' => 0,
    'level2' => 0,
    'datauser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501cc073447459_32425786')) {function content_501cc073447459_32425786($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['proses']->value=='add_user'){?>
	
	<div class="grid_12">
		<h1>Manajemen User</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah User</h1><span></span>
			</div>
			<form action="users.php?module=act_add_user" method="post" class="block-content form" enctype='multipart/form-data'> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">NIK</label><input id="textfield" name="nik" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['nikdate']->value;?>
" disabled><input id="textfield" name="nik" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nikdate']->value;?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>
		
			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"></textarea></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Email</label><input id="textfield" name="email" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Upload Photo</label><input id="textfield" name="photo" type="file""></p>
			</div>

			<!-- <div class="_100">
				<p><label for="datepicker">Datepicker</label><input id="datepicker" name="datepicker" class="required" type="text" value="" /></p>
			</div> 
						
			<div class="_100">
				<p>
					<label for="select">Select</label>
					<select>
						<option>Lorem Ipsum</option>
						<option>Consetetur Sadipscing</option>
						<option>Eirmod Tempor</option>
					</select>
				</p>
			</div>
			
			<div class="_100">
			<p>
				<label for="file">Upload a file</label>
				<input type="file">
			</p>
			</div> -->
			
			<div class="_50">
				<p>
					<span class="label">Level</span>
					<label><input type="radio" name="level" value="Administrator"/> Administrator</label>
					<label><input type="radio" name="level" checked value="Sales"> Sales</label>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Username</label><input id="textfield" name="username" type="text"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Password</label><input id="textfield" name="password" type="text"></p>
			</div>
			<!--<div class="_50">
			<p>
				<span class="label">Checkboxes</span>
				<label><input type="checkbox" name="checkbox" /> Check me</label>
				<label><input type="checkbox" /> Or me</label>
				<label><input type="checkbox" /> Lorem ipsum</label>
			</p>
			</div> -->
						
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

<?php }elseif($_smarty_tpl->tpl_vars['proses']->value=='update_user'){?>

	<div class="grid_12">
		<h1>Manajemen User</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah User</h1><span></span>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['name'] = 'dataupdate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataupdate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataupdate']['total']);
?>
			<form action="users.php?module=act_update_user" method="post" class="block-content form" enctype="multipart/form-data"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">NIK</label><input id="textfield" name="nik" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['nik'];?>
" disabled><input id="textfield" name="nik" class="required" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nikdate']->value;?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama</label><input id="textfield" name="nama" class="required" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['name'];?>
"></p>
			</div>
		
			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['address'];?>
</textarea></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['phone'];?>
"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Email</label><input id="textfield" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['email'];?>
"></p>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['photo']!=''){?>
			<div class="_100">
				<p><label for="textfield">Photo</label><a href="img/photo/<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['photo'];?>
" target="_blank"><img src="img/photo/<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['photo'];?>
" width="100"></a></p>
			</div>
			<?php }?>
			
			<div class="_100">
				<p><label for="textfield">Upload Photo</label><input id="textfield" name="photo" type="file""></p>
			</div>

			<!-- <div class="_100">
				<p><label for="datepicker">Datepicker</label><input id="datepicker" name="datepicker" class="required" type="text" value="" /></p>
			</div> 
						
			<div class="_100">
				<p>
					<label for="select">Select</label>
					<select>
						<option>Lorem Ipsum</option>
						<option>Consetetur Sadipscing</option>
						<option>Eirmod Tempor</option>
					</select>
				</p>
			</div>
			
			<div class="_100">
			<p>
				<label for="file">Upload a file</label>
				<input type="file">
			</p>
			</div> -->
			
			<div class="_50">
				<p>
					<span class="label">Level</span>
					<label><input type="radio" name="level" value="Administrator" <?php echo $_smarty_tpl->tpl_vars['level1']->value;?>
> Administrator</label>
					<label><input type="radio" name="level" checked value="Sales" <?php echo $_smarty_tpl->tpl_vars['level2']->value;?>
> Sales</label>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Username</label><input id="textfield" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['username'];?>
" disabled></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Password</label><input id="textfield" name="password" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataupdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataupdate']['index']]['password'];?>
" disabled></p>
			</div>
			<!--<div class="_50">
			<p>
				<span class="label">Checkboxes</span>
				<label><input type="checkbox" name="checkbox" /> Check me</label>
				<label><input type="checkbox" /> Or me</label>
				<label><input type="checkbox" /> Lorem ipsum</label>
			</p>
			</div> -->
						
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
	<h1>Manajemen User</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="?module=add_user">Tambah User</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Pengguna</h1><span></span>
			
		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['name'] = 'datauser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datauser']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datauser']['total']);
?>
					<tr class="gradeX">
						<td width="10"><?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['nik'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['username'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['level'];?>
</td>
						<td class="center">
							<a href="?module=update_user&id=<?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['employe_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datauser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datauser']['index']]['name'];?>
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