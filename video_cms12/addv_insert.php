<?php
require 'dbconnects.php';
var_dump($_GET);
	if (!(isset($_GET['btn_sub']))) {
		header("location:addaddvet.php");
		exit();
	}

	$an=$_GET['advertisment_name'];
	$at=$_GET['advertisment_type'];
	$cate_id=$_GET['cate_id'];
	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $an,$at,$cate_id;

	 $qry="INSERT INTO advertisment_tbl(advertisment_name,advertisment_type,cate_id,isactive,doi) VALUES('".$an."','".$at."','".$cate_id."','$isactive','".$dt."')";
	 echo $qry;


	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addaddvet.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>