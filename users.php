<?php
error_reporting(0);
$page = "users";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";

$smarty = new Smarty;

$module = $_GET['module'];
$user_id = $_COOKIE['user_id'];
$photo_ses= $_COOKIE['photo'];
$name	  = $_COOKIE['name'];
$date = date('Y-m-d H:i:s');

if ($module == 'add_user'){
	$smarty->assign('proses', 'add_user');
}

elseif ($module == 'act_add_user'){
	
	$nik		= $_POST['nik'];
	$name 		= $_POST['nama'];
	$address 	= $_POST['alamat'];
	$phone		= $_POST['phone'];
	$email		= $_POST['email'];
	$level		= $_POST['level'];
	$username	= $_POST['username'];
	$password	= md5($_POST['password']);
	$photo		= $_FILES['photo']['tmp_name'];
	$photo_name	= $_FILES['photo']['name'];
	$photo_fix_name = $nik.$photo_name;
	$createdDate= date('Y-m-d H:i:s');
	$direktori	= "img/photo/$phone_name";
	
	if (!empty($photo)){
		move_uploaded_file($photo, "img/photo/$photo_fix_name");
		
		mysql_query("INSERT INTO aj_employes(nik,name,address,phone,email,photo,created_user,created_date,modified_user,modified_date)
					VALUES ('$nik','$name','$address','$phone','$email','$photo_fix_name','$user_id','$createdDate','','')");
		mysql_query("INSERT INTO aj_users(username,passwd,nik,level) VALUES('$username','$password','$nik','$level')");
	}
	else{
	  
		mysql_query("INSERT INTO aj_employes(nik,name,address,phone,email,created_user,created_date,modified_user,modified_date)
					VALUES ('$nik','$name','$address','$phone','$email','$user_id','$createdDate','','')");
					
		mysql_query("INSERT INTO aj_users(username,passwd,nik,level) VALUES('$username','$password','$nik','$level')");
	}
	header('location: users.php');
}

elseif ($module == 'update_user'){
	$id = $_GET['id'];
	
	$sql = mysql_query("SELECT * FROM aj_employes,aj_users WHERE employe_id='$id' AND aj_users.nik=aj_employes.nik");
	$datauser_update = mysql_fetch_array($sql);
	
	if ($datauser_update[level] == 'Y'){
		$level1 = checked;
	}
	elseif($datauser_update[level] == 'N'){
		$level2 = checked;
	}
	else{
		$level1 = '';
		$level2 = ''; 
	}
	
	$dataupdate[] = array(	'employe_id' => $datauser_update['employe_id'],
							'nik' => $datauser_update['nik'],
							'name' => $datauser_update['name'],
							'address' => $datauser_update['address'],
							'phone' => $datauser_update['phone'],
							'email' => $datauser_update['email'],
							'photo' => $datauser_update['photo'],
							'level' => $datauser_update['level'],
							'username' => $datauser_update['username'],
							'password' => $datauser_update['password']);
	
	$smarty->assign('level1', $level1);
	$smarty->assign('level2', $level2);
	$smarty->assign('dataupdate', $dataupdate);
	$smarty->assign('proses', 'update_user');
}

elseif ($module == 'act_update_user'){
	$nik	= $_POST['nik'];
	$name	= $_POST['nama'];
	$address= $_POST['alamat'];
	$phone	= $_POST['phone'];
	$email	= $_POST['email'];
	$level	= $_POST['level'];
	$photo		= $_FILES['photo']['tmp_name'];
	$photo_name	= $_FILES['photo']['name'];
	$photo_fix_name = $nik.$photo_name;
	
	if (!empty($photo)){
		move_uploaded_file($photo, "img/photo/$photo_fix_name");
			
		mysql_query("UPDATE aj_employes SET name = '$name',
										address = '$address',
										phone = '$phone',
										email = '$email',
										photo = '$photo_fix_name',
										modified_user = '$user_id',
										modified_date = '$date'
										WHERE nik = '$nik'");
		mysql_query("UPDATE aj_users SET level = '$level' WHERE nik = '$nik'");
	}
	else{
		mysql_query("UPDATE aj_employes SET name = '$name',
											address = '$address',
											phone = '$phone',
											email = '$email',
											modified_user = '$user_id',
											modified_date = '$date'
											WHERE nik = '$nik'");
		mysql_query("UPDATE aj_users SET level = '$level' WHERE nik = '$nik'");
	}
	header('location: users.php');
}

else{
	$sql = mysql_query("SELECT DISTINCT aj_employes.nik,name,level,username,employe_id FROM aj_employes,aj_users WHERE level != 'Administrator' AND aj_employes.nik=aj_users.nik");
	$i = 1;
	while ($data_user = mysql_fetch_array($sql)){
		$datauser[] = array('nik' => $data_user['nik'],
							'name' => $data_user['name'],
							'level' => $data_user['level'],
							'employe_id' => $data_user['employe_id'],
							'username' => $data_user['username'],
							'no' => $i);
		$i++;
	}
	
	$smarty->assign('datauser', $datauser);
}

$date = date('Ymd');
$smarty->assign('nikdate', $date);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('name', $name);
$smarty->assign('content', $page);
$smarty->display('index.tpl');

?>