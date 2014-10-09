<?php
error_reporting(0);
$page = "sales";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/fungsi_rupiah.php";
include "function/fungsi_indotgl.php";

$smarty = new Smarty;

$sales_date = date('Y-m-d');
$hour		= date('H:i:s');
$photo_ses= $_COOKIE['photo'];
$name	  = $_COOKIE['name'];
$date		= tgl_indo($sales_date);

$module = $_GET['module'];

if ($module == 'add_transaction'){
	
	$sql = mysql_query("SELECT * FROM aj_products ORDER BY product ASC");
	while ($data_product = mysql_fetch_array($sql)){
		$dataproduct[] = array(	'product_id' => $data_product[product_id],
								'product' => $data_product[product]);
	}
	
	$smarty->assign('date', $date);
	$smarty->assign('dataproduct', $dataproduct);
	$smarty->assign('proses', 'add_transaction');
}

elseif ($module == 'update_sales'){
	$trx_id = $_GET['id'];
	$pro_id = $_GET['pro_id'];
	
	$data = mysql_fetch_array(mysql_query("SELECT a.description, a.sales_qty, a.sales_price, a.sales_stock, b.product, b.product_id FROM aj_sales_transaction a,aj_products b WHERE a.trx_id = '$trx_id' AND a.product_id=b.product_id"));
	$datasales[] = array(	'product_id' => $data[product_id],
							'product' => $data[product],
							'stock' => $data[sales_stock],
							'sales_price' => $data[sales_price],
							'sales_qty' => $data[sales_qty],
							'description' => $data[description]);
	
	$smarty->assign('date', $date);
	$smarty->assign('dataproduct', $datasales);
	$smarty->assign('proses', 'update_sales');
	$smarty->assign('trx_id', $trx_id);
}

elseif ($module == 'act_update_transaction'){
	$product_id	= $_POST['product_id'];
	$price		= $_POST['harga'];
	$qty		= $_POST['qty'];
	$sales_qty	= $_POST['sales_qty'];
	$description= $_POST['description'];
	$trx_id		= $_POST['trx_id'];
	$stock		= $_POST['stock'];
	
	$sql	= mysql_query("SELECT * FROM aj_products WHERE product_id = '$product_id'");
	$data	= mysql_fetch_array($sql);
	$subtotal = $price * $qty;
	$profit	= ($price * $qty) - ($data[po_price] * $qty);
	$sales_stock = ($stock + $sales_qty) - $qty;
	
	
	mysql_query("UPDATE aj_sales_transaction SET	sales_price = '$price',
													profit	= '$profit',
													sales_qty = '$qty',
													sales_stock = '$sales_stock',
													subtotal	= '$subtotal',
													description = '$description'
													WHERE trx_id = '$trx_id'");
	mysql_query("UPDATE aj_products SET stock = '$sales_stock' WHERE product_id = '$product_id'");
	header('location: sales.php');
	
}

elseif ($module == 'cancel_sales'){
	$trx_id	= $_GET['id'];
	
	$sql = mysql_query("SELECT * FROM aj_sales_transaction WHERE trx_id = '$trx_id'");
	$data = mysql_fetch_array($sql);
	
	$sales_qty 	= $data[sales_qty];
	$product_id	= $data[product_id];
	
	$sql_product = mysql_query("SELECT * FROM aj_products WHERE product_id = '$product_id'");
	$data_product = mysql_fetch_array($sql_product);
	
	$sisa_stock = $data[sales_qty] + $data_product[stock];
	
	$update		= mysql_query("UPDATE aj_products SET stock = '$sisa_stock' WHERE product_id = '$product_id'");
	
	if ($update){
		mysql_query("DELETE FROM aj_sales_transaction WHERE trx_id = '$trx_id'");
	}
	header('location: sales.php');
}

elseif ($module == 'act_add_transaction'){
	$product	= $_POST['product'];
	$price		= $_POST['harga'];
	$qty		= $_POST['qty'];
	$description= $_POST['description'];
	
	$sql 	= mysql_query("SELECT * FROM aj_products WHERE product_id = '$product'");
	$data 	= mysql_fetch_array($sql);
	$subtotal= $price * $qty;
	$profit	= ($price * $qty) - ($data[po_price] * $qty);
	$sales_stock = $data[stock] - $qty;
	
	if ($data[stock] == 0){
		echo "<script language='javascript'>alert('Stock product kosong, silahkan cek kembali.');
					window.location = 'sales.php?module=add_transaction'</script>";
	}
	
	else{
		
		mysql_query("INSERT INTO aj_sales_transaction (	product_id,
														sales_price,
														profit,
														sales_qty,
														sales_stock,
														subtotal,
														sales_date,
														sales_time,
														description,
														user_id)
												VALUES(	'$product',
														'$price',
														'$profit',
														'$qty',
														'$sales_stock',
														'$subtotal',
														'$sales_date',
														'$hour',
														'$description',
														'')");
		
		mysql_query("UPDATE aj_products SET stock = '$sales_stock' WHERE product_id = '$product'");
		header('location: sales.php');
	}
}

else{
	$sql = mysql_query("SELECT * FROM aj_sales_transaction a, aj_products b, aj_categories c WHERE a.sales_date = '$sales_date' AND a.product_id=b.product_id AND b.category_id=c.category_id ORDER BY a.sales_time ASC");
	$i = 1;
	while ($data_sales = mysql_fetch_array($sql)){
		$sales_price = format_rupiah($data_sales[sales_price]);
		$po_price	 = format_rupiah($data_sales[po_price]);
		$profit		 = format_rupiah($data_sales[profit]);
		$subtotal	 = format_rupiah($data_sales[subtotal]);
		
		$total_price += $data_sales[sales_price];
		$totalprice = format_rupiah($total_price);
		
		$po_pri += $data_sales[po_price];
		$popri = format_rupiah($po_pri);
		
		$pro_f += $data_sales[profit];
		$pro = format_rupiah($pro_f);
		
		$sub += $data_sales[subtotal];
		$subtota = format_rupiah($sub);
		
		$datasales[] = array(	'trx_id' => $data_sales[trx_id],
								'product_id' => $data_sales[product_id],
								'product' => $data_sales[product],
								'category' => $data_sales[category],
								'sales_qty' => $data_sales[sales_qty],
								'sales_stock' => $data_sales[sales_stock],
								'subtotal' => $subtotal,
								'sales_price' => $sales_price,
								'po_price' => $po_price,
								'profit' => $profit,
								'no' => $i);
		$i++;
	}
}

$smarty->assign('subtota', $subtota);
$smarty->assign('pro', $pro);
$smarty->assign('popri', $popri);
$smarty->assign('total_price', $totalprice);
$smarty->assign('datasales', $datasales);
$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>