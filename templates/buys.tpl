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
				<h1>Tambah Transaksi Pembelian</h1><span></span>
			</div>
			<form action="buys.php?module=act_add_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					{$date}</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
				
				<select name="supplier">
				{section name=datasupp loop=$datasupp}
					<option value="{$datasupp[datasupp].supplier_id}">{$datasupp[datasupp].supplier}</option>
				{/section}
				</select>
				</p>
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
	
{elseif $proses eq 'update_transaction'}
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
			{section name=databuys loop=$databuys}
			<form action="buys.php?module=act_update_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->
			
			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					{$databuys[databuys].buys_date}</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Supplier</label>
				
				<select name="supplier">
				{section name=datasupp loop=$datasupp}
					{if $datasupp[datasupp].supplier_id == $supp_id}
						<option value="{$datasupp[datasupp].supplier_id}" SELECTED>{$datasupp[datasupp].supplier}</option>
					{else}
						<option value="{$datasupp[datasupp].supplier_id}">{$datasupp[datasupp].supplier}</option>
					{/if}
				{/section}
				</select>
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="{$databuys[databuys].product}" disabled>
				<input id="textfield" name="product_id" class="required" type="hidden" value="{$databuys[databuys].product_id}">
				<input id="textfield" name="buys_qty" class="required" type="hidden" value="{$buys_qty}">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="{$databuys[databuys].trx_id}">
				</p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Harga Satuan Modal</label><input id="textfield" name="harga" class="required" type="text" value="{$databuys[databuys].supp_price}"></p>
			</div>
			
			<div class="_100">
				<p><label for="textfield">Quantity Stock (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="{$databuys[databuys].supp_qty}"></p>
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
			{/section}
		</div>
	</div>

{else}
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
						{section name=databuys loop=$databuys}
						<tr class="gradeX">
							<td width="10">{$databuys[databuys].no}</td>
							<td>{$databuys[databuys].product}</td>
							<td>Rp. {$databuys[databuys].supp_price}</td>
							<td>{$databuys[databuys].supp_qty}</td>
							<td>Rp. {$databuys[databuys].subtotal}</td>
							<td>{$databuys[databuys].stock}</td>
							<td class="center">
								<a href="?module=update_buys&id={$databuys[databuys].trx_id}&buys_qty={$databuys[databuys].supp_qty}&supp_id={$databuys[databuys].supp_id}" title="{$databuys[databuys].product}"><img src="img/update.png"></a> &nbsp;
								<a href="?module=cancel_buys&id={$databuys[databuys].trx_id}&buys_qty={$databuys[databuys].supp_qty}" onclick="return confirm('Anda yakin ingin membatalkan transaksi {$databuys[databuys].product}?');"><img src="img/hapus.png"></a></td> 
						</tr>
						{/section}
						<tr>
							<td colspan="4"><b>Total Transaksi</b></td>
							<td><b>Rp. {$subtota}</b></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
{/if}
