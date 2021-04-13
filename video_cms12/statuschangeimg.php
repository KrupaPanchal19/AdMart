<?php 
require 'dbconnects.php';
var_dump($_GET);
$img_id=$_GET['img_id'];
echo $img_id;
$qry="SELECT * FROM img_tbl WHERE img_id=$img_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE img_tbl SET isactive=1 WHERE img_id='$img_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE img_tbl SET isactive=0 WHERE img_id='$img_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewaddvertlook.php");
	exit();
}
else
{
	echo "Error";
}
?>