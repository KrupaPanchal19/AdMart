<?php
require 'dbconnects.php';
var_dump($_POST);
var_dump($_FILES);
	require 'edit_image.php';
	$ct=$target_file;
	$cn=$_POST['client_name'];
	 $isactive=1;
	 $dt=date("y-m-d");
	 echo $cn,$ct;

	 $qry="INSERT INTO client_tbl(client_name,client_image,isactive,doi) VALUES('".$cn."','".$ct."','isactive','".$dt."')";
	 echo $qry;

	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	header("location:addclient.php");
	 }
	 else
	 {
	 	echo "Insert error";
	 }
?>

