<?php
require 'dbconnects.php';
var_dump($_GET);


	// if (!(isset($_GET['btn_sub']))) {
	// 	header("location:addcont.php");
	// 	exit();
	// }


	$n=$_GET['name'];
	$cn=$_GET['contact_no'];
	$e=$_GET['email'];
	$ct=$_GET['id'];
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
	 	header("location:contact.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

