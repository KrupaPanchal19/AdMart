<?php 
require 'dbconnects.php';
var_dump($_GET);
$a_id=$_GET['a_id'];
echo $a_id;
$qry="SELECT * FROM advertisment_tbl WHERE a_id=$a_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE advertisment_tbl SET isactive=1 WHERE a_id='$a_id'";
	echo $qry1;
}
else
{
	$qry1="UPDATE advertisment_tbl SET isactive=0 WHERE a_id='$a_id'";
	echo $qry1;
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewaddvert.php");
	exit();
}
else
{
	echo "Error";
}
?>