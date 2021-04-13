<?php
require 'dbconnects.php';
var_dump($_GET);
	if (!(isset($_GET['btn_sub']))) {
		header("location:addcity.php");
		exit();
	}


	$cn=$_GET['city_name'];
	$state_id=$_GET['id'];
	 $isactive=1;
	 $dt=date("y-m-d");
	 

	 $qry="INSERT INTO `city_tble`(`city_name`,`state_id`,`isactive`,`doi`) VALUES('".$cn."','".$state_id."','$isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addcity.php");
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

