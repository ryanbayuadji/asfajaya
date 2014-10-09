{if $proses eq 'add_user'}
	
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
				<p><label for="textfield">NIK</label><input id="textfield" name="nik" class="required" type="text" value="{$nikdate}" disabled><input id="textfield" name="nik" class="required" type="hidden" value="{$nikdate}"></p>
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

{elseif $proses eq 'update_user'}

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
			{section name=dataupdate loop=$dataupdate}
			<form action="users.php?module=act_update_user" method="post" class="block-content form" enctype="multipart/form-data"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">NIK</label><input id="textfield" name="nik" class="required" type="text" value="{$dataupdate[dataupdate].nik}" disabled><input id="textfield" name="nik" class="required" type="hidden" value="{$nikdate}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama</label><input id="textfield" name="nama" class="required" type="text" value="{$dataupdate[dataupdate].name}"></p>
			</div>
		
			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40">{$dataupdate[dataupdate].address}</textarea></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text" value="{$dataupdate[dataupdate].phone}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Email</label><input id="textfield" name="email" type="text" value="{$dataupdate[dataupdate].email}"></p>
			</div>
			
			{if $dataupdate[dataupdate].photo != ''}
			<div class="_100">
				<p><label for="textfield">Photo</label><a href="img/photo/{$dataupdate[dataupdate].photo}" target="_blank"><img src="img/photo/{$dataupdate[dataupdate].photo}" width="100"></a></p>
			</div>
			{/if}
			
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
					<label><input type="radio" name="level" value="Administrator" {$level1}> Administrator</label>
					<label><input type="radio" name="level" checked value="Sales" {$level2}> Sales</label>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Username</label><input id="textfield" name="username" type="text" value="{$dataupdate[dataupdate].username}" disabled></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Password</label><input id="textfield" name="password" type="text" value="{$dataupdate[dataupdate].password}" disabled></p>
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
			{/section}
		</div>
	</div>
	
	
{else}



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
					{section name=datauser loop=$datauser}
					<tr class="gradeX">
						<td width="10">{$datauser[datauser].no}</td>
						<td>{$datauser[datauser].nik}</td>
						<td>{$datauser[datauser].name}</td>
						<td>{$datauser[datauser].username}</td>
						<td>{$datauser[datauser].level}</td>
						<td class="center">
							<a href="?module=update_user&id={$datauser[datauser].employe_id}" title="{$datauser[datauser].name}"><img src="img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id={$datauser[datauser].employe_id}" onclick="return confirm('Anda yakin ingin menghapus user {$datauser[datauser].name}?');" disabled><img src="img/hapus.png"></a> --></td> 
					</tr>
					{/section}
				</tbody>
			</table>
		</div>
	</div>
</div>
{/if}
