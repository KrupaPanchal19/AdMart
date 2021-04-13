<?php
session_start();
var_dump($_GET);
require 'dbconnects.php';

	if (!(isset($_GET['btn_sub']))) {
		header("location:addseq.php");
		exit();
	}


	$q=$_GET['question'];
	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $q;

	 $qry="INSERT INTO securityque_tbl(question,isactive,doi) VALUES('".$q."','$isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addseq.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

