<?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("dbasfa_jaya");
$page = "reports";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/fungsi_rupiah.php";
include "function/fungsi_indotgl.php";

$smarty = new Smarty;

$module = $_GET['module'];
$photo_ses= $_COOKIE['photo'];
$user_id = $_COOKIE['user_id'];
$name	  = $_COOKIE['name'];

if ($module == 'act_reports'){
	$periode_awal = $_POST['periode_awal'];
	$periode_akhir = $_POST['periode_akhir'];
	
	$date_awal = explode("/", $periode_awal);
	$date1 = $date_awal[1];
	$month1= $date_awal[0];
	$year1 = $date_awal[2];
	$date_fix_awal = $year1."-".$month1."-".$date1;
	
	$date_akhir = explode("/", $periode_akhir);
	$date2 = $date_akhir[1];
	$month2 = $date_akhir[0];
	$year2 = $date_akhir[2];
	$date_fix_akhir = $year2."-".$month2."-".$date2;
	
	header('location: reports.php?module=report&start_date='.$date_fix_awal.'&end_date='.$date_fix_akhir);
}

elseif ($module == 'report'){
	$start_date = $_GET['start_date'];
	$end_date	= $_GET['end_date'];

	$sql_report = mysql_query("SELECT * FROM aj_sales_transaction a, aj_products b, aj_categories c WHERE a.sales_date BETWEEN '$start_date' AND '$end_date' AND a.product_id=b.product_id AND b.category_id=c.category_id ORDER BY a.sales_date,a.sales_time ASC");
	$i = 1;
	while ($data_report = mysql_fetch_array($sql_report)){
		$sales_date	 = tgl_indo($data_report[sales_date]);
		$sales_price = format_rupiah($data_report[sales_price]);
		$po_price	 = format_rupiah($data_report[po_price]);
		$profit		 = format_rupiah($data_report[profit]);
		$subtotal	 = format_rupiah($data_report[subtotal]);
		
		$total_price += $data_report[sales_price];
		$totalprice = format_rupiah($total_price);
		
		$po_pri += $data_report[po_price];
		$popri = format_rupiah($po_pri);
		
		$pro_f += $data_report[profit];
		$pro = format_rupiah($pro_f);
		
		$sub += $data_report[subtotal];
		$subtota = format_rupiah($sub);
		
		$datareport[] = array(	'trx_id' => $data_report[trx_id],
								'product_id' => $data_report[product_id],
								'product' => $data_report[product],
								'category' => $data_report[category],
								'sales_qty' => $data_report[sales_qty],
								'sales_stock' => $data_report[sales_stock],
								'subtotal' => $subtotal,
								'sales_date' => $sales_date,
								'sales_price' => $sales_price,
								'po_price' => $po_price,
								'profit' => $profit,
								'no' => $i);
		$i++;
	}
	$smarty->assign('start_date', $start_date);
	$smarty->assign('end_date', $end_date);
	$smarty->assign('subtota', $subtota);
	$smarty->assign('pro', $pro);
	$smarty->assign('popri', $popri);
	$smarty->assign('total_price', $totalprice);
	$smarty->assign('datareport', $datareport);
	
	$smarty->assign('proses', 'report');
}

$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>