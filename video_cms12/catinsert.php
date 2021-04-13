<?php
require 'dbconnects.php';	
var_dump($_GET);

	if (!isset($_GET['btn_sub'])) {
		header("location:addcate.php");
		exit();
	}


		$cn=$_GET['cate_name'];
		$ct=$_GET['price'];
		$isactive=1;
		$dt=date("Y-m-d");
		echo $cn;
	 		 $qry="INSERT INTO cate_tble(cate_name,price,isactive,doi) VALUES('".$cn."','".$ct."','$isactive','".$dt."')";
	 		echo $qry;
	 	
	 	 $rs=mysqli_query($conn,$qry);
	 		if($rs)
	 		{
	 			echo "Insert success";
	 			header("location:addcate.php");
	 			exit();
	 		}
	 		else
	 		{
	 			echo "Insert error";
	 		}
?>