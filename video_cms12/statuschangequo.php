<?php 
require 'dbconnects.php';
var_dump($_GET);
$q_id=$_GET['q_id'];
echo $q_id;
$qry="SELECT * FROM quoo_tbl WHERE q_id=$q_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE quoo_tbl SET isactive=1 WHERE q_id='$q_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE quoo_tbl SET isactive=0 WHERE q_id='$q_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewquotation.php");
	exit();
}
else
{
	echo "Error";
}
?>