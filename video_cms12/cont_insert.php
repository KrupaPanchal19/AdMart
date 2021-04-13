<?php
session_start();
var_dump($_GET);
require 'dbconnects.php';

	if (!(isset($_GET['btn_sub']))) {
		header("location:addcont.php");
		exit();
	}

	$n=$_GET['name'];
	$cn=$_GET['contact_no'];
	$e=$_GET['email'];
	$ct=$_GET['city'];
	$des=$_GET['description'];
	

	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $cn;

	 $qry="INSERT INTO cont_tbl(name,contact_no,email,city,description,isactive,doi) VALUES('".$n."','".$cn."','".$e."','".$ct."','".$des."','$isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addcont.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

