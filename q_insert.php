<?php
session_start();
var_dump($_POST);
$u_id=$_SESSSION['id'];
$ad=$_GET['ad'];
require 'dbconnects.php';
	if(!isset($_POST['btn_sub']))
	{
		header("location:service-details.php");
		exit();
	}

$price=$_GET['price'];
$qty=$_GET['qty'];
$duration=$_GET['duration'];
$f_price=$_GET['f_price'];
header("location:invoice.php");
?>

