<?php
error_reporting(0);
$page = "suppliers";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";

$smarty = new Smarty;

$module = $_GET['module'];
$name	  = $_COOKIE['name'];
$user_id = $_COOKIE['user_id'];
$photo_ses= $_COOKIE['photo'];
$date = date('Y-m-d H:i:s');

if ($module == 'add_supplier'){
	$smarty->assign('proses', 'add_supplier');
}

elseif ($module == 'act_add_supplier'){
	$name	= $_POST['nama'];
	$address= $_POST['alamat'];
	$phone	= $_POST['phone'];
	$active	= $_POST['aktif'];
	$description = $_POST['description'];
	$createdDate = date('Y-m-d H:i:s');
	
	mysql_query("INSERT INTO aj_suppliers (supplier,address,phone,active,description,created_user,created_date,modified_user,modified_date)
				VALUES('$name','$address','$phone','$active','$description','$user_id','$createdDate','','')");
				
	header('location: suppliers.php'); 
}

elseif ($module == 'update_supplier'){
	$id = $_GET['id'];
	$sql = mysql_query("SELECT * FROM aj_suppliers WHERE supplier_id='$id'");
	$data_supplier = mysql_fetch_array($sql);
	
	if ($data_supplier[active] == 'Y'){
		$aktif1 = checked;
	}
	elseif($data_supplier[active] == 'N'){
		$aktif2 = checked;
	}
	else{
		$aktif1 = '';
		$aktif2 = '';
	}
	
	$datasupplier[] = array('supplier_id' => $data_supplier[supplier_id],
							'supplier' => $data_supplier[supplier],
							'address' => $data_supplier[address],
							'active' => $data_supplier[active],
							'phone' => $data_supplier[phone],
							'description' => $data_supplier[description]);

	$smarty->assign('proses', 'update_supplier');
	$smarty->assign('dataupdate_supplier', $datasupplier);
	$smarty->assign('aktif1', $aktif1);
	$smarty->assign('aktif2', $aktif2);
}

elseif ($module == 'act_update_supplier'){
	$id		= $_POST['supplier_id'];
	$supplier = $_POST['nama'];
	$address= $_POST['alamat'];
	$phone	= $_POST['phone'];
	$description = $_POST['description'];
	$aktif	= $_POST['aktif'];
	
	mysql_query("UPDATE aj_suppliers SET 	supplier = '$supplier',
											address	 = '$address',
											phone	 = '$phone',
											description = '$description',
											active	 = '$aktif',
											modified_user = '$user_id',
											modified_date = '$date'
											WHERE supplier_id = '$id'");
	header('location: suppliers.php');
}

else{
	$sql = mysql_query("SELECT * FROM aj_suppliers");
	$i = 1;
	while ($data_supplier = mysql_fetch_array($sql)){
		$datasupplier[] = array('supplier_id' => $data_supplier[supplier_id],
								'supplier' => $data_supplier[supplier],
								'address' => $data_supplier[address],
								'active' => $data_supplier[active],
								'no' => $i);
		$i++;
	}
	
	$smarty->assign('datasupplier', $datasupplier);
}

$date = date('Ymd');
$smarty->assign('nikdate', $date);
$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>