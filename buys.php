<?php
error_reporting(0);
$page = "buys";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/fungsi_rupiah.php";
include "function/fungsi_indotgl.php";

$smarty = new Smarty;

$buys_date = date('Y-m-d');
$hour		= date('H:i:s');
$date		= tgl_indo($buys_date);
$photo_ses= $_COOKIE['photo'];
$name	  = $_COOKIE['name'];

$module = $_GET['module'];

if ($module == 'add_transaction'){
	$sql = mysql_query("SELECT * FROM aj_products ORDER BY product ASC");
	while ($data_product = mysql_fetch_array($sql)){
		$dataproduct[] = array(	'product_id' => $data_product[product_id],
								'product' => $data_product[product]);
	}
	
	$sql = mysql_query("SELECT * FROM aj_suppliers ORDER BY supplier ASC");
	while ($data_supp = mysql_fetch_array($sql)){
		$datasupp[] = array('supplier_id' => $data_supp[supplier_id],
							'supplier' => $data_supp[supplier]);
	}
	
	$smarty->assign('date', $date);
	$smarty->assign('datasupp', $datasupp);
	$smarty->assign('dataproduct', $dataproduct);
	$smarty->assign('proses', 'add_transaction');
}

elseif ($module == 'act_add_transaction'){
	$supplier	= $_POST['supplier'];
	$product	= $_POST['product'];
	$price		= $_POST['harga'];
	$qty		= $_POST['qty'];
	$description= $_POST['description'];
	$subtotal	= $price * $qty;
	
	mysql_query("INSERT INTO aj_supp_transaction(supplier_id,product_id,supp_price,supp_qty,subtotal,description,buys_date,buys_time,user_id)
				VALUES('$supplier','$product','$price','$qty','$subtotal','$description','$buys_date','$hour','')");
				
	$data = mysql_fetch_array(mysql_query("SELECT stock FROM aj_products WHERE product_id = '$product'"));
	$sisa_stok = $data[stock] + $qty;
	mysql_query("UPDATE aj_products SET stock = '$sisa_stok', po_price = '$price' WHERE product_id = '$product'");
	header('location: buys.php');
}

elseif ($module == 'act_update_transaction'){
	$supplier	= $_POST['supplier'];
	$product_id	= $_POST['product_id'];
	$price		= $_POST['harga'];
	$qty		= $_POST['qty'];
	$description= $_POST['description'];
	$trx_id		= $_POST['trx_id'];
	$buys_qty	= $_POST['buys_qty'];
	$subtotal	= $price * $qty;
	
	mysql_query("UPDATE aj_supp_transaction SET supplier_id = '$supplier',
												supp_price = '$price',
												supp_qty = '$qty',
												subtotal = '$subtotal',
												description = '$description'
												WHERE trx_id = '$trx_id'");
	$data = mysql_fetch_array(mysql_query("SELECT stock FROM aj_products WHERE product_id = '$product_id'"));
	$buys_stock = ($data[stock] - $buys_qty) + $qty;
	mysql_query("UPDATE aj_products SET stock = '$buys_stock', po_price = '$price' WHERE product_id = '$product_id'");
	header('location: buys.php');
}

elseif ($module == 'cancel_buys'){
	$trx_id	= $_GET['id'];
	
	$sql = mysql_query("SELECT * FROM aj_supp_transaction WHERE trx_id = '$trx_id'");
	$data = mysql_fetch_array($sql);
	
	$supp_qty 	= $data[supp_qty];
	$product_id	= $data[product_id];
	
	$sql_product = mysql_query("SELECT * FROM aj_products WHERE product_id = '$product_id'");
	$data_product = mysql_fetch_array($sql_product);
	
	$sisa_stock = $data_product[stock] - $supp_qty;
	
	$update		= mysql_query("UPDATE aj_products SET stock = '$sisa_stock' WHERE product_id = '$product_id'");
	
	if ($update){
		mysql_query("DELETE FROM aj_supp_transaction WHERE trx_id = '$trx_id'");
	}
	header('location: buys.php');
}

elseif ($module == 'update_buys'){
	$supp_id	= $_GET['supp_id'];
	$trx_id		= $_GET['id'];
	$buys_qty	= $_GET['buys_qty'];
	
	$sql = mysql_query("SELECT * FROM aj_suppliers ORDER BY supplier ASC");
	while ($data = mysql_fetch_array($sql)){
			
		$datasupp[] = array('supplier_id' => $data[supplier_id],
							'supplier' => $data[supplier]);
	}
	
	$sql = mysql_query("SELECT * FROM aj_supp_transaction a, aj_products b WHERE a.trx_id = '$trx_id' AND a.product_id=b.product_id ORDER BY a.buys_time ASC");
	$i = 1;
	$data_buys = mysql_fetch_array($sql);
	
	$databuys[] = array('trx_id' => $data_buys[trx_id],
						'product_id' => $data_buys[product_id],
						'product' => $data_buys[product],
						'supp_price' => $data_buys[supp_price],
						'supp_id' => $data_buys[supplier_id],
						'stock' => $data_buys[stock],
						'supp_qty' => $data_buys[supp_qty],
						'subtotal' => $subtotal,
						'buys_date' => $data_buys[buys_date],
						'description' => $data_buys[description],
						'no' => $i);
						
	$smarty->assign('datasupp', $datasupp);
	$smarty->assign('databuys', $databuys);
	$smarty->assign('buys_qty', $buys_qty);
	$smarty->assign('selected', $selected);
	$smarty->assign('supp_id', $supp_id);
	$smarty->assign('proses', 'update_transaction');
}

else{
	$sql = mysql_query("SELECT * FROM aj_supp_transaction a, aj_products b WHERE a.buys_date = '$buys_date' AND a.product_id=b.product_id ORDER BY a.buys_time ASC");
	$i = 1;
	while ($data_buys = mysql_fetch_array($sql)){
		$price = format_rupiah($data_buys[supp_price]);
		$subtotal = format_rupiah($data_buys[subtotal]);
		$subtota += $data_buys[subtotal];
		$sub = format_rupiah($subtota);
		
		$databuys[] = array('trx_id' => $data_buys[trx_id],
							'product_id' => $data_buys[product_id],
							'product' => $data_buys[product],
							'supp_price' => $price,
							'supp_id' => $data_buys[supplier_id],
							'stock' => $data_buys[stock],
							'supp_qty' => $data_buys[supp_qty],
							'subtotal' => $subtotal,
							'no' => $i);
		$i++;
	}
	
	$smarty->assign('subtota', $sub);
	$smarty->assign('databuys', $databuys);
}
	
$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);	
$smarty->assign('content', $page);
$smarty->display('index.tpl');

?>