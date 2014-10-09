{if $proses eq 'add_transaction'}
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
					{$date}</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				
				<select name="product">
				{section name=dataproduct loop=$dataproduct}
					<option value="{$dataproduct[dataproduct].product_id}">{$dataproduct[dataproduct].product}</option>
				{/section}
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

{elseif $proses eq 'update_sales'}

	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>
	
	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	{section name=dataproduct loop=$dataproduct}
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Transaksi Penjualan</h1><span></span>
			</div>
			<form action="sales.php?module=act_update_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					{$date}</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="{$dataproduct[dataproduct].product}" disabled><input id="textfield" name="product_id" class="required" type="hidden" value="{$dataproduct[dataproduct].product_id}">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="{$trx_id}">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="{$dataproduct[dataproduct].sales_price}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="{$dataproduct[dataproduct].sales_qty}">
					<input id="textfield" name="stock" class="required" type="hidden" value="{$dataproduct[dataproduct].stock}">
					<input id="textfield" name="sales_qty" class="required" type="hidden" value="{$dataproduct[dataproduct].sales_qty}">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40">{$dataproduct[dataproduct].description}</textarea></p>
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
	{/section}

{else}
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
						{section name=datasales loop=$datasales}
						<tr class="gradeX">
							<td width="10">{$datasales[datasales].no}</td>
							<td>{$datasales[datasales].product}</td>
							<td>{$datasales[datasales].category}</td>
							<td>Rp. {$datasales[datasales].sales_price}</td>
							<td>{$datasales[datasales].sales_qty}</td>
							<td>Rp. {$datasales[datasales].subtotal}</td>
							<td>Rp. {$datasales[datasales].profit}</td>
							<td>{$datasales[datasales].sales_stock}</td>
							<td class="center">
								<a href="?module=update_sales&id={$datasales[datasales].trx_id}&pro_id={$datasales[datasales].product_id}" title="{$datasales[datasales].product}"><img src="img/update.png"></a> &nbsp;
								<a href="?module=cancel_sales&id={$datasales[datasales].trx_id}" onclick="return confirm('Anda yakin ingin membatalkan transaksi {$datasales[datasales].product}?');"><img src="img/hapus.png"></a></td> 
						</tr>
						{/section}
						<tr>
							<td colspan="3"></td>
							<td colspan="2"><b>Total Transaksi</b></td>
							<td><b>Rp. {$subtota}</b></td>
							<td><b>Rp. {$pro}</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
{/if}
