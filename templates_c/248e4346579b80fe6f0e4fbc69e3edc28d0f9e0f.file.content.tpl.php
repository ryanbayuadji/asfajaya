<?php /* Smarty version Smarty-3.1.11, created on 2012-08-04 06:08:20
         compiled from "templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8845501ca034665bd4-44478369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248e4346579b80fe6f0e4fbc69e3edc28d0f9e0f' => 
    array (
      0 => 'templates\\content.tpl',
      1 => 1344052955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8845501ca034665bd4-44478369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501ca03467cc05_02539760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501ca03467cc05_02539760')) {function content_501ca03467cc05_02539760($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<!-- <div class="grid_12">
	<h1>Forms</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
	</div>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Form-Elements with Validation</h1><span></span>
			</div>
			<form id="validate-form" class="block-content form" action="" method="post">
			<div class="_100">
				<p><label for="textfield">Textfield</label><input id="textfield" name="textfield" class="required" type="text" value="" /></p>
			</div>
		
			<div class="_100">
				<p><label for="textarea">Textarea</label><textarea id="textarea" name="textarea" class="required" rows="5" cols="40"></textarea></p>
			</div>

			<div class="_100">
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
			</div>
			
			<div class="_50">
				<p>
					<span class="label">Radio-Buttons</span>
					<label><input type="radio" name="radio" /> Dolor sit</label>
					<label><input type="radio" name="radio" /> Et accusam</label>
					<label><input type="radio" name="radio" /> Justo duo</label>
				</p>
			</div>
			<div class="_50">
			<p>
				<span class="label">Checkboxes</span>
				<label><input type="checkbox" name="checkbox" /> Check me</label>
				<label><input type="checkbox" /> Or me</label>
				<label><input type="checkbox" /> Lorem ipsum</label>
			</p>
			</div>
						
			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Click here to validate the form!"></li>
					</ul>
				</div>
			</form>
		</div>
	</div> --><?php }} ?>