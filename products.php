<?php
error_reporting(0);
$page = "products";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/fungsi_rupiah.php";

$smarty = new Smarty;

$module = $_GET['module'];
$user_id = $_COOKIE['user_id'];
$photo_ses= $_COOKIE['photo'];
$name	  = $_COOKIE['name'];
$date = date('Y-m-d H:i:s');

if ($module == 'add_product'){
	$sql = mysql_query("SELECT * FROM aj_categories ORDER BY category ASC");
	while ($data_category = mysql_fetch_array($sql)){
		$datacategory[] = array('category_id' => $data_category[category_id],
								'category' => $data_category[category]);
	}
	
	$sql = mysql_query("SELECT * FROM aj_suppliers ORDER BY supplier ASC");
	while ($data_supplier = mysql_fetch_array($sql)){
		$datasupplier[] = array('supplier_id' => $data_supplier[supplier_id],
								'supplier' => $data_supplier[supplier]);
	}
	
	$smarty->assign('datacategory', $datacategory);
	$smarty->assign('datasupplier', $datasupplier);
	$smarty->assign('proses', 'add_product');
}

elseif ($module == 'act_add_product'){
	$category = $_POST['category'];
	$supplier = $_POST['supplier'];
	$name	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$harga_po = $_POST['harga_po'];
	$harga_pm = $_POST['harga_pm'];
	$stok	  = $_POST['stok'];
	$active	= $_POST['aktif'];
	$description = $_POST['description'];
	$createdDate = date('Y-m-d H:i:s');
	
	mysql_query("INSERT INTO aj_products (category_id,supplier_id,product,price,po_price,pm_price,stock,active,description,created_user,created_date,modified_user,modified_date)
				VALUES('$category','$supplier','$name','$harga','$harga_po','$harga_pm','$stok','$active','$description','$user_id','$createdDate','','')");
				
	header('location: products.php'); 
}

elseif ($module == 'update_category'){
	$id = $_GET['id'];
	$sql = mysql_query("SELECT * FROM aj_categories WHERE category_id='$id'");
	$data_category = mysql_fetch_array($sql);
	
	if ($data_category['active'] == 'Y'){
		$aktif1 = 'checked';
	}
	elseif($data_category['active'] == 'N'){
		$aktif2 = 'checked';
	}
	else{
		$aktif1 = '';
		$aktif2 = '';
	}
	
	$datacategory[] = array('category_id' => $data_category['category_id'],
							'category' => $data_category['category'],
							'active' => $data_category['active']);

	$smarty->assign('proses', 'update_category');
	$smarty->assign('dataupdate_category', $datacategory);
	$smarty->assign('aktif1', $aktif1);
	$smarty->assign('aktif2', $aktif2);
}

elseif ($module == 'update_product'){
	$id = $_GET['id'];
	$catid = $_GET['catid'];
	$supid = $_GET['supid'];
	
	$sql = mysql_query("SELECT * FROM aj_products WHERE product_id = '$id'");
	$data = mysql_fetch_array($sql);
	
	if ($data['active'] == 'Y'){
		$aktif1 = 'checked';
	}
	elseif($data['active'] == 'N'){
		$aktif2 = 'checked';
	}
	else{
		$aktif1 = '';
		$aktif2 = '';
	}
	
	$sql_cat = mysql_query("SELECT * FROM aj_categories ORDER BY category ASC");
	while ($data_cat = mysql_fetch_array($sql_cat)){
		$datacat[] = array(	'category_id' => $data_cat[category_id],
							'category' => $data_cat[category]); 
	}
	
	$sql_sup = mysql_query("SELECT * FROM aj_suppliers ORDER BY supplier ASC");
	while ($data_sup = mysql_fetch_array($sql_sup)){
		$datasup[] = array(	'supplier_id' => $data_sup[supplier_id],
							'supplier' => $data_sup[supplier]); 
	}
	
	$dataupdate_product[] = array(	'supplier_id' => $data[supplier_id],
									'category_id' => $data[category_id],
									'product_id' => $data[product_id],
									'product' => $data[product],
									'price' => $data[price],
									'po_price' => $data[po_price],
									'pm_price' => $data[pm_price],
									'stock' => $data[stock],
									'active' => $data[active],
									'description' => $data[description]);
								
	$smarty->assign('aktif1', $aktif1);
	$smarty->assign('aktif2', $aktif2);
	$smarty->assign('catid', $catid);
	$smarty->assign('supid', $supid);
	$smarty->assign('datacat', $datacat);
	$smarty->assign('datasup', $datasup);
	$smarty->assign('dataupdate_product', $dataupdate_product);
	$smarty->assign('proses', 'update_product');
}

elseif ($module == 'act_update_category'){
	$id		= $_POST['category_id'];
	$category = $_POST['nama'];
	$aktif	= $_POST['aktif'];
	
	mysql_query("UPDATE aj_categories SET 	category = '$category',
											active	 = '$aktif'
											WHERE category_id = '$id'");
	header('location: categories.php');
}

elseif ($module == 'act_update_product'){
	$productid 	= $_POST['productid'];
	$category	= $_POST['category'];
	$supplier	= $_POST['supplier'];
	$name		= $_POST['nama'];
	$price		= $_POST['harga'];
	$po_price	= $_POST['harga_po'];
	$pm_price	= $_POST['harga_pm'];
	$stock		= $_POST['stok'];
	$description= $_POST['description'];
	$active		= $_POST['aktif'];
	$modified_date = date('Y-m-d H:i:s');
	
	mysql_query("UPDATE aj_products SET category_id = '$category',
										supplier_id = '$supplier',
										product		= '$name',
										price		= '$price',
										po_price	= '$po_price',
										pm_price	= '$pm_price',
										stock		= '$stock',
										active		= '$active',
										description	= '$description',
										modified_user = '$user_id',
										modified_date = '$modified_date'
										WHERE product_id = '$productid'");
	
	header('location: products.php');
}

else{
	$sql = mysql_query("SELECT * FROM aj_products a, aj_categories b, aj_suppliers c WHERE a.category_id=b.category_id AND a.supplier_id=c.supplier_id ORDER BY a.product ASC");
	$i = 1;
	while ($data_product = mysql_fetch_array($sql)){
		$price = format_rupiah($data_product[price]);
		$po_price = format_rupiah($data_product[po_price]);
		$pm_price = format_rupiah($data_product[pm_price]);
		
		$dataproduct[] = array(	'product_id' => $data_product[product_id],
								'category' => $data_product[category],
								'category_id' => $data_product[category_id],
								'supplier_id' => $data_product[supplier_id],
								'product' => $data_product[product],
								'stock' => $data_product[stock],
								'price' => $price,
								'po_price' => $po_price,
								'pm_price' => $pm_price,
								'no' => $i);
		$qtyomset = $data_product[stock] * $data_product[po_price];
		$modalomset += $qtyomset;
		$pmqomset = $data_product[stock] * $data_product[pm_price];
		$pmomset += $pmqomset;
		$promset = $data_product[stock] * $data_product[price];
		$priceomset += $promset;		
		$i++;
	}
	$modalom = format_rupiah($modalomset);
	$pmomset = format_rupiah($pmomset);
	$priomset = format_rupiah($priceomset);
	
	$smarty->assign('modalomset', $modalom);
	$smarty->assign('pmomset', $pmomset);
	$smarty->assign('priceomset', $priomset);
	$smarty->assign('dataproduct', $dataproduct);
}

$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>