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
	if($ad==1)
	{
	$final_price=$_POST['final_price'];
	$qnty=$_POST['qty'];
	$price=$_POST['price'];
	$month=$_POST['duration'];
	$isactive='1';
	$dt=date("Y-m-d");
	echo $qnty."</br>".$price."</br>".$month."</br>".$isactive."</br>".$dt."</br>"."</br>";

	$a=$qnty;
	$b=$price;


	$qry="SELECT * FROM subcate_tbl WHERE isactive=1";
    $rs=mysqli_query($conn,$qry);

    $row=mysqli_fetch_assoc($rs);
    $c=$row['rate'];
	

	$total =$a*$b*$c*$month;

	 $qry="INSERT INTO quoo_tbl(quantity,price,duration,isactive,doi) VALUES('".$qnty."','".$price."','".$month."','$isactive','".$dt."')";
	 echo $qry;
	 $rs=mysqli_query($conn,$qry);
	 if($rs)
	 {
	 	echo "Insert Success";
	 	echo $total;
	 	header("location:invoice.php");
	 	exit();
	 }
	 else
	 {
	 	echo "Insert error";
	 }
	}
?>

