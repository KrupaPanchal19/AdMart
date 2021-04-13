<?php 
require 'dbconnects.php';
var_dump($_GET);
$s_id=$_GET['s_id'];
echo $s_id;
$qry="SELECT * FROM subcate_tbl WHERE s_id=$s_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE subcate_tbl SET isactive=1 WHERE s_id='$s_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE subcate_tbl SET isactive=0 WHERE s_id='$s_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewsubcat.php");
	exit();
}
else
{
	echo "Error";
}
?>