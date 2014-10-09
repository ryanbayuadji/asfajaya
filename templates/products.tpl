{if $proses eq 'add_product'}
	
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
					{section name=datacategory loop=$datacategory}
						<option value="{$datacategory[datacategory].category_id}">{$datacategory[datacategory].category}</option>
					{/section}
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
					{section name=datasupplier loop=$datasupplier}
						<option value="{$datasupplier[datasupplier].supplier_id}">{$datasupplier[datasupplier].supplier}</option>
					{/section}
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

{elseif $proses eq 'update_product'}
	<div class="grid_12">
		<h1>Manajemen Product</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	{section name=dataupdate_product loop=$dataupdate_product}
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Produk</h1><span></span>
			</div>
			<form action="products.php?module=act_update_product" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<input id="textfield" name="productid" class="required" type="hidden" value="{$dataupdate_product[dataupdate_product].product_id}">
			
			<div class="_100">
				<p><label for="textfield">Kategori</label>
					<select name="category">
					{section name=datacat loop=$datacat}
						{if $datacat[datacat].category_id == $catid}
							<option value="{$datacat[datacat].category_id}" SELECTED>{$datacat[datacat].category}</option>
						{else}
							<option value="{$datacat[datacat].category_id}">{$datacat[datacat].category}</option>
						{/if}
					{/section}
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
					{section name=datasup loop=$datasup}
						{if $datasup[datasup].supplier_id == $supid}
							<option value="{$datasup[datasup].supplier_id}" SELECTED>{$datasup[datasup].supplier}</option>
						{else}
							<option value="{$datasup[datasup].supplier_id}">{$datasup[datasup].supplier}</option>
						{/if}
					{/section}
					</select>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label><input id="textfield" name="nama" class="required" type="text" value="{$dataupdate_product[dataupdate_product].product}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="{$dataupdate_product[dataupdate_product].price}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Modal (P.O.)</label><input id="textfield" name="harga_po" class="required" type="text" value="{$dataupdate_product[dataupdate_product].po_price}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Paling Murah (P.M.)</label><input id="textfield" name="harga_pm" class="required" type="text" value="{$dataupdate_product[dataupdate_product].pm_price}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Stok Produk</label><input id="textfield" name="stok" class="required" type="text" value="{$dataupdate_product[dataupdate_product].stock}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40">{$dataupdate_product[dataupdate_product].description}</textarea></p>
			</div>
			
			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" {$aktif1}> Y</label>
					<label><input type="radio" name="aktif" value="N" {$aktif2}> N</label>
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
	{/section}

{elseif $proses eq 'update_category'}

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	{section name=dataupdate_category loop=$dataupdate_category}
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Supplier</h1><span></span>
			</div>
			<form action="categories.php?module=act_update_category" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Category</label>
					<input id="textfield" name="nama" class="required" type="text" value="{$dataupdate_category[dataupdate_category].category}">
					<input id="textfield" name="category_id" class="required" type="hidden" value="{$dataupdate_category[dataupdate_category].category_id}"></p>
			</div>
			
			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" {$aktif1}> Y</label>
					<label><input type="radio" name="aktif" value="N" {$aktif2}> N</label>
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
	{/section}
	
{else}



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
					{section name=dataproduct loop=$dataproduct}
					<tr class="gradeX">
						<td width="10">{$dataproduct[dataproduct].no}</td>
						<td>{$dataproduct[dataproduct].product}</td>
						<td>{$dataproduct[dataproduct].category}</td>
						<td>{$dataproduct[dataproduct].stock}</td>
						<td>Rp. {$dataproduct[dataproduct].price}</td>
						<td>Rp. {$dataproduct[dataproduct].po_price}</td>
						<td>Rp. {$dataproduct[dataproduct].pm_price}</td>
						<td class="center">
							<a href="?module=update_product&id={$dataproduct[dataproduct].product_id}&catid={$dataproduct[dataproduct].category_id}&supid={$dataproduct[dataproduct].supplier_id}" title="{$dataproduct[dataproduct].product}"><img src="img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id={$datauser[datauser].employe_id}" onclick="return confirm('Anda yakin ingin menghapus user {$datauser[datauser].name}?');" disabled><img src="img/hapus.png"></a> --></td> 
					</tr>
					{/section}
					<tr>
						<td colspan="4"></td>
						<td>Rp. {$priceomset}</td>
						<td>Rp. {$modalomset}</td>
						<td>Rp. {$pmomset}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
{/if}
