<?php
error_reporting(0);
$page = "categories";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";

$smarty = new Smarty;

$module = $_GET['module'];
$user_id = $_COOKIE['user_id'];
$photo_ses= $_COOKIE['photo'];
$name	  = $_COOKIE['name'];
$date	= date('Y-m-d H:i:s');

if ($module == 'add_category'){
	$smarty->assign('proses', 'add_category');
}

elseif ($module == 'act_add_category'){
	$name	= $_POST['nama'];
	$active	= $_POST['aktif'];
	$createdDate = date('Y-m-d H:i:s');
	
	mysql_query("INSERT INTO aj_categories (category,active,created_user,created_date,modified_user,modified_date)
				VALUES('$name','$active','$user_id','$createdDate','','')");
				
	header('location: categories.php'); 
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

elseif ($module == 'act_update_category'){
	$id		= $_POST['category_id'];
	$category = $_POST['nama'];
	$aktif	= $_POST['aktif'];
	
	mysql_query("UPDATE aj_categories SET 	category = '$category',
											active	 = '$aktif',
											modified_user = '$user_id',
											modified_date = '$date'
											WHERE category_id = '$id'");
	header('location: categories.php');
}

else{
	$sql = mysql_query("SELECT * FROM aj_categories ORDER BY category ASC");
	$i = 1;
	while ($data_category = mysql_fetch_array($sql)){
		$datacategory[] = array('category_id' => $data_category[category_id],
								'category' => $data_category[category],
								'active' => $data_category[active],
								'no' => $i);
		$i++;
	}
	$smarty->assign('datacategory', $datacategory);
}

$smarty->assign('name', $name);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>