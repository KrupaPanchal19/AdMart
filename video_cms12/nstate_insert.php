<?php
session_start();
var_dump($_GET);
require 'dbconnects.php';

	if (!(isset($_GET['btn_sub']))) {
		header("location:addstate.php");
		exit();
	}


	$sn=$_GET['state_name'];
	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $sn;

	 $qry="INSERT INTO state_tbl(state_name,isactive,doi) VALUES('".$sn."','$isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addstate.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

