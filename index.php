<?php
error_reporting(0);
$page = "index";
require('libs/Smarty.class.php');
$smarty = new Smarty;

$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$level	  = $_COOKIE['level'];
$user_id  = $_COOKIE['user_id'];
$name	  = $_COOKIE['name'];
$photo_ses= $_COOKIE['photo'];

if (empty($username) AND empty($password)){
	header('location: login.php');
}
$smarty->assign('level', $level);
$smarty->assign('photo_ses', $photo_ses);
$smarty->assign('name', $name);
$smarty->display("index.tpl");	
?>