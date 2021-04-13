<?php 
require 'dbconnects.php';
var_dump($_GET);
$cate_id=$_GET['cate_id'];
echo $cate_id;
$qry="SELECT * FROM cate_tble WHERE cate_id=$cate_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE cate_tble SET isactive=1 WHERE cate_id='$cate_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE cate_tble SET isactive=0 WHERE cate_id='$cate_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewcat.php");
	exit();
}
else
{
	echo "Error";
}
?>